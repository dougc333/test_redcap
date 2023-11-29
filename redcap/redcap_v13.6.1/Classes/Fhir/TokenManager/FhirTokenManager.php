<?php

namespace Vanderbilt\REDCap\Classes\Fhir\TokenManager;

use User;
use Logging;
use DateTime;
use Exception;
use UserRights;
use SplObserver;
use Vanderbilt\REDCap\Classes\Fhir\FhirEhr;
use Vanderbilt\REDCap\Classes\Fhir\FhirClient;
use Vanderbilt\REDCap\Classes\Fhir\FhirServices;
use Vanderbilt\REDCap\Classes\Parcel\PostMaster;
use Vanderbilt\REDCap\Classes\Fhir\Utility\Feedback;
use Vanderbilt\REDCap\Classes\Fhir\FhirClientResponse;
use Vanderbilt\REDCap\Classes\Fhir\Utility\ProjectProxy;
use Vanderbilt\REDCap\Classes\Fhir\Endpoints\FhirRequest;
use Vanderbilt\REDCap\Classes\Fhir\Facades\FhirClientFacade;
use Vanderbilt\REDCap\Classes\Fhir\FhirLauncher\FhirLauncher;
use Vanderbilt\REDCap\Classes\Fhir\FhirLauncher\DTOs\SessionDTO;
use Vanderbilt\REDCap\Classes\Fhir\FhirLauncher\DTOs\AccessTokenResponseDTO;

class FhirTokenManager implements SplObserver
{
    /**
     * user ID to use when storing and retrieving tokens from the database
     *
     * @var int
     */
    private $user_id;

    /**
     * project ID used to retrieve a group of users
     *
     * @var int
     */
    private $project_id;

    /**
     * project ID used to retrieve a group of users
     *
     * @var string
     */
    private $patient_id;
    
    /**
     * ordered list of preferred UI_IDs to use when retrieving tokens
     *
     * @var array
     */
    private $preferredUsers = [];

    /**
     *
     * @param int $user_id
     * @param int $project_id
     * @param string $patient_id
     */
    function __construct($user_id=null, $project_id=null, $patient_id=null)
    {
        $this->user_id = $user_id;
        $this->project_id = $project_id;
        $this->patient_id = $patient_id;
        $users = $this->getUsers();
        $this->setPreferredUsers($users);
    }

    /**
     * get a users priority list.
     * - if a user_id is provided, then the list will include just the user.
     * - if a project is provided, then the list will include users from the project
     * - return an empty list otherwise
     *
     * @return array
     */
    public function getUsers() {
        $users = [];
        if($this->user_id) {
            $users[] = $this->user_id;
            return $users;
        }
        if($this->project_id) {
            $projectUsers = $this->getProjectUsers($this->project_id);
            $users = array_merge($users, $projectUsers);
        }
        return array_unique($users);
    }

    /**
     * return a list of users eligible for feedback
     * users are selected based on the user rights of a project and
     * ordered based on the FHIR interaction they had
     *
     * @return array
     */
    public function getFeedbackUsers() {
        if(!$this->project_id) return [];
        $logsSubquery = sprintf(
            "SELECT `user_id`, MAX(`created_at`) AS `created_at`
            FROM `redcap_ehr_fhir_logs`
            WHERE `project_id`=%u AND `user_id` IS NOT NULL
            GROUP BY `user_id`", $this->project_id
        );
        $queryString = sprintf(
            "SELECT `ui`.`ui_id`,`ui`.`username`, `logs`.`created_at` FROM `redcap_user_information` AS ui
            LEFT JOIN `redcap_user_rights` AS `ur` ON `ui`.`username`=`ur`.`username`
            LEFT JOIN (%s) AS logs ON `logs`.`user_id`=`ui`.`ui_id`
            WHERE `project_id`=%u
            ORDER BY `logs`.`created_at` DESC",
            $logsSubquery,
            $this->project_id
        );
        $result = db_query($queryString);
        if(!$result) return [];
        $users = [];
        while($row=db_fetch_assoc($result)) {
            $users[@$row['ui_id']] = @$row['username'];
        }
        return $users;
    }

    /**
     * title used as title for feedback messages
     */
    const FEEDBACK_MESSAGE_TITLE = '[EHR Automated Data Pull Alert]';
    const FEEDBACK_MESSAGE_DELAY = 60*30;

    /**
     * send an alert
     *
     * @param string $message
     * @return int|null thread_id or null if the message is not sent
     */
    public function sendAlert($message) {
        $project_id = $this->project_id;
        if(!$project_id) return;

        $project = new ProjectProxy($project_id);

        $project_creator = @$project->project['created_by'];
        $userInfo = User::getUserInfoByUiid($project_creator);
        $username = $userInfo['username'];

        $html = '[This message was automatically generated by REDCap]'.PHP_EOL;
        $html .= $message;

        $userNames = $this->getFeedbackUsers();
        if(empty($userNames)) return;
        $title = self::FEEDBACK_MESSAGE_TITLE." - PID {$project_id}";

        $postMaster = new PostMaster();
        $postMaster->sendParcel($to=$username, $from='REDCap - FhirToken Manager', $subject=$title, $body=$html);
        return;
    }

    /**
     * check if a message was recently sent by the token manager
     *
     * @return bool
     */
    public function checkIfMessageWasSentRecently() {
        $now = time();
        $previousMessageDate = $this->getPreviousMessageDate();
        if(! ($previousMessageDate instanceof DateTime) ) return false;
        $previousTimestamp = $previousMessageDate->getTimestamp();
        $delay = $now-$previousTimestamp;
        return ($delay) < self::FEEDBACK_MESSAGE_DELAY;
    }

    /**
     * get the date of the last message sent by the token manager
     *
     * @return DateTime|false
     */
    public function getPreviousMessageDate() {
        $title = self::FEEDBACK_MESSAGE_TITLE;
        
        $query_string = sprintf(
            "SELECT threads.thread_id, project_id, channel_name, recipients.recipient_user_id, sent_time
            FROM redcap_messages_threads AS threads
            LEFT JOIN redcap_messages AS messages ON threads.thread_id=messages.thread_id
            LEFT JOIN redcap_messages_recipients AS recipients ON threads.thread_id=recipients.thread_id
            LEFT JOIN redcap_messages_status AS status ON messages.message_id=status.message_id
            WHERE project_id=%u AND channel_name LIKE %s
            ORDER BY sent_time DESC",
            intval($this->project_id), checkNull("{$title}%")
        );
        $result = db_query($query_string);
        if( $result && ($row = db_fetch_assoc($result)) ) return date_create_from_format('Y-m-d H:i:s', @$row['sent_time']);
        return false;
    }

    /**
     * delete existing message's threads
     * to avoid flooding the system
     *
     * @return mysqli_result
     */
    public function deletePreviousMessages() {
        $title = self::FEEDBACK_MESSAGE_TITLE;

        $query_string = sprintf(
            "DELETE FROM redcap_messages_threads WHERE project_id = %u AND channel_name LIKE %s",
            intval($this->project_id), checkNull("{$title}%")
        );
        return db_query($query_string);
    }


    /**
     * return the list of preferred users to used when retrieving tokens
     *
     * @return array
     */
    public function getPreferredUsers() { return $this->preferredUsers; }

    /**
     *
     * @param array $users
     * @return void
     */
    public function setPreferredUsers($users) { $this->preferredUsers = $users; }

    /**
     *
     * @return int
     */
    public function getUserId() { return $this->user_id; }

    /**
     *
     * @return string
     */
    public function getPatientId() { return $this->patient_id; }

    /**
     *
     * @param string $patient_id
     * @return void
     */
    public function setPatientId($patient_id) { return $this->patient_id = $patient_id; }

    /**
     * get a token using the client credentials flow
     *
     * @return FhirToken|false a valid access token or false if not 
     */
    private function getTokenUsingClientCredentials()
    {
        try {
            $fhirServices = FhirServices::getInstance();
            $scopes = FhirServices::$client_credentials_scopes;
            $new_token = $fhirServices->getTokenWithClientCredentials($scopes);
            $token = self::storeToken($new_token, $this->user_id);
            return $token;
        } catch (\Exception $e) {
            $exception_code = $e->getCode();
            $exception_message = $e->getMessage();
            $exception_data = array();
            if($e instanceof \DataException) $exception_data = $e->getData();
            \Logging::logEvent( "", "FHIR", "MANAGE", json_encode($exception_data, JSON_PRETTY_PRINT), $exception_code, $exception_message );
            return false;
        }
    }

    /**
     * get a valid access token for a user
     * refresh the token if expired
     * if the refresh fails, try the next token
     *
     * @return FhirToken|false a valid access token or false if not 
     */
    public function getToken()
    {
        global $lang, $fhir_standalone_authentication_flow;
        $tokens = $this->getTokens();
        $token = current($tokens);
        if($token===false)
        {
            if($fhir_standalone_authentication_flow==FhirEhr::AUTHENTICATION_FLOW_CLIENT_CREDENTIALS)
            {
                // try to get a token using client credentials flow
                return $this->getTokenUsingClientCredentials();
            }else
            {
                return false;
                // throw new \Exception($message = $lang['data_entry_398'], 401); // 401 = unauthorized client
            }
        }
        

        if($token->isExpired())
        {
            // refresh if expired
            $fhirServices = FhirServices::getInstance();
            $token->refresh($fhirServices);
        }

        // check if token is valid
        if($token->isValid()) return $token;
        

        // if the token has not been refreshed try the next token
        return $this->getToken();
    }

    /**
     * get an access token
     * 
     * @throws Exception if access token is not available
     * @return string
     */
    public function getAccessToken()
    {
        $token = $this->getToken();
        if(!$token) return false;
        $access_token = $token->getAccessToken();
        return $access_token;
    }


    /**
     * no token available
     *
     * @throws Exception
     */
    private function throwNoTokensAvailableException()
    {
        throw new \Exception("Error: no tokens available.", 1);
    }

    /**
     * get all valid tokens for a specific user
     * an token is valid if
     *  - access_token is not expired
     *      OR
     *  - refresh_token is not older than 30 days
     * 
     * if a user is specified then only his tokens are selected
     * (usually we have no user when a cron job is running)
     * 
     * specific tokens are prioritized.
     * the priority order is:
     *  - patient
     *  - expiration
     *
     * @param integer $user_id
     * @return FhirToken[]
     */
    public function getTokens()
    {
        if(empty($this->preferredUsers)) return [];

        $implodeWithQuotes = function($array) {
            return "'" . implode("', '", $array) . "'";
        };
        $selectQuery = function() {
            $now = date('Y-m-d H:i:s');
            $query_string = sprintf(
                "SELECT * FROM redcap_ehr_access_tokens WHERE 
                (
                    (access_token IS NOT NULL AND expiration > %1\$s)
                    OR
                    (refresh_token IS NOT NULL AND expiration > DATE_SUB(%1\$s, INTERVAL 30 DAY))
                )", checkNull($now)
            );
            return $query_string;
        };
        $whereQuery = function() use($implodeWithQuotes) {
            $query_string = sprintf( " AND token_owner IN (%s)", $implodeWithQuotes($this->preferredUsers) );
            return $query_string;
        };
        $orderByQuery = function() use($implodeWithQuotes) {
            $order_by_clauses = [];
            // prioritize patient specific tokens
            if(isset($this->patient_id)) $order_by_clauses[] = sprintf("FIELD (patient, %s) DESC", checkNull($this->patient_id));
            $order_by_clauses[] = sprintf("FIELD (token_owner, %s) DESC", $implodeWithQuotes($this->preferredUsers));
            $order_by_clauses[] = 'expiration DESC';
            
            $order_by_string = " ORDER BY ".implode(', ', $order_by_clauses);
            return $order_by_string;
        };
        
        $query_string = $selectQuery();
        $query_string .= $whereQuery();
        $query_string .= $orderByQuery();
        
        
        // query the DB
        $list = [];        
        $result = db_query($query_string);
        while($tokenInfo = db_fetch_object($result))
        {
            $list[] = new FhirToken($tokenInfo);
        }

        return $list;
    }

    /**
     * get an ordered list of users with a valid access token (active or refreshable)
     * for a specific project was
     * the project creator is the first in the list
     *
     * @return array
     */
    public function getProjectUsers()
    {
        $project_id = $this->project_id;
        if(!$project_id) return [];

        $getProjectUsers = function() use($project_id) {
            $projectsPrivileges = UserRights::getPrivileges($project_id);
            $usersInfo = @$projectsPrivileges[$project_id] ?: [];
            $usernames = array_keys($usersInfo);
            $user_ids = array_map(function($username) {
                return User::getUIIDByUsername($username);
            }, $usernames);
            return $user_ids;
        };

        $getProjectCreator = function() use($project_id) {
            $db = new \RedCapDB();
            $projectInfo = $db->getProject($project_id);
            $project_creator = $projectInfo->created_by;
            return $project_creator;
        };

        $users = $getProjectUsers();
        
        $projectCreator = $getProjectCreator();
        // prepend the project creator
        if($projectCreator) array_unshift($users, $projectCreator);

        return array_unique($users);
    }

    /**
     * persist a token to the database
     *
     * @param object|array $token_data
     * @param integer $user_id
     * @return FhirToken
     */
    public static function storeToken($token_data, $user_id=null)
    {
        $token = new FhirToken($token_data);
        if($user_id) $token->setOwner($user_id);
        $token->save();
        return $token;
    }

    // If there is an institution-specific MRN, then store in access token table to pair it with the patient id
    /**
     * Undocumented function
     *
     * @param string $patient
     * @param string $mrn
     * @return void
     */
	public function storePatientMrn($patient, $mrn)
	{
	    if (empty($mrn)) return false;
		$query_string = sprintf("UPDATE redcap_ehr_access_tokens SET mrn = %s
				        WHERE patient='%s'", checkNull($mrn), db_escape($patient));
		return db_query($query_string);
    }
    
    /**
     * cleanup MRN entries for a user
     * 
     * the table could contain orphaned MRNs 
     * if the FHIR ID changes for any reason (i.e. EHR updates)
     *
     * @param integer $user_id token owner
     * @param string $mrn
     * @param string $patient_id
     * @return boolean
     */
    public function removeOrphanedMrns($mrn, $patient_id)
    {
        if(!$user_id = $this->user_id) return;
        $query_string = 
            "DELETE FROM redcap_ehr_access_tokens 
            WHERE mrn=? AND token_owner=?
            AND patient != ?";
        return db_query($query_string, [$mrn, $user_id, $patient_id]);
    }

    /**
     * remove all entries of a FHIR id (patient)
     * used when we get a 400 or 404 error fetching a FHIR resource
     * @param string $patient_id
     * @return bool
     */
    public function removeCachedPatient($patient_id)
    {
        $query_strings = [];
        // delete if no access token is associated
        $query_strings[] = sprintf(
            "DELETE FROM `redcap_ehr_access_tokens` WHERE `patient`='%s' AND `access_token` IS NULL",
            db_escape($patient_id)
        );
        // update with null values if there is an access token associated
        $query_strings[] = sprintf(
            "UPDATE `redcap_ehr_access_tokens` SET `patient`=NULL, `mrn`=NULL
            WHERE `patient`='%s' AND `access_token` IS NOT NULL",
            db_escape($patient_id));
        
            // Begin transaction
        db_query("SET AUTOCOMMIT=0");
        db_query("BEGIN");
        foreach ($query_strings as $query_string) {
            $result = db_query($query_string);
            if($result===false) {
                db_query("ROLLBACK");
			    db_query("SET AUTOCOMMIT=1");
                return false;
            }
        }
        db_query("COMMIT");
		db_query("SET AUTOCOMMIT=1");
        return true;
    }

    /**
	 * react to notifications (from the FHIR client)
	 *
	 * @param SplSubject $subject
	 * @param string $event
	 * @param mixed $data
	 * @return void
	 */
	public function update($subject, string $event = null, $data = null): void
	{
        $updateFhirClient = function() use($subject, $event, $data) {
            switch ($event) {
                case FhirClient::NOTIFICATION_PATIENT_IDENTIFIED:
                    $mrn = @$data['mrn'];
                    $fhir_id = @$data['fhir_id'];
                    $this->onPatientIdentified($mrn, $fhir_id);
                    break;
                case FhirClient::NOTIFICATION_RESOURCE_ERROR:
                    if(!($subject instanceof FhirClient)) break;
                    /** @var FhirClientResponse $data  */
                    $this->onFhirClientError($data);
                    break;
                default:
                    break;
            }
        };
        
        if($subject instanceof FhirClient) $updateFhirClient();
	}


    /**
     * cache the FHIR ID when a patient is identified
     *
     * @param string $mrn
     * @param string $fhir_id
     * @return void
     */
    private function onPatientIdentified($mrn, $fhir_id)
    {
        $query_string = 'INSERT INTO `redcap_ehr_access_tokens` (`mrn`, `patient`) VALUES (?, ?)';
        $result = db_query($query_string, [$mrn, $fhir_id]);
        if($result) Logging::logEvent($query_string, 'redcap_ehr_access_token', 'FHIR', '', json_encode(compact('fhir_id', 'mrn'), JSON_PRETTY_PRINT), 'Patient FHIR ID has been cached', 'Patient identified');
    }

    /**
     * perform actions when errors are detected
     * (e.g. delete access token if access is forbidden)
     * @param FhirClientResponse $fhirClientResponse
     * @return void
     */
    private function onFhirClientError($fhirClientResponse)
    {
        $error = $fhirClientResponse->error;
        if(!$error instanceof Exception) return;
        $code = $error->getCode();
        switch ($code) {
            // delete identifier if 'Wrong format' or 'not found'
            case '400':
            case '404':
                $request = $fhirClientResponse->request;
                if(!($request instanceof FhirRequest)) break;
                $identifier = $request->extractIdentifier();
                if($identifier) $this->removeCachedPatient($identifier);
                break;
            // delete access token if access is forbidden
            case '401':
                $accessToken = $fhirClientResponse->access_token;
                // $mrn = @$data['mrn'];
                if($accessToken) $this->deleteAccessToken($accessToken);
                break;
            default:
                # code...
                break;
        }

    }

    private function deleteAccessToken($access_token) {
        $query_string = sprintf('DELETE FROM `redcap_ehr_access_tokens` WHERE `access_token`=%s', checkNull($access_token));
        $result = db_query($query_string);
        if($result) Logging::logEvent($query_string, 'redcap_ehr_access_token', 'FHIR', $access_token, '','Access token has been deleted', 'Permission denied');
    }

}

