<?php

namespace Vanderbilt\REDCap\Classes\Fhir\TokenManager;

use Vanderbilt\REDCap\Classes\Fhir\FhirEhr;
use Vanderbilt\REDCap\Classes\Fhir\FhirServices;

class FhirToken implements \JsonSerializable
{
    const DATE_FORMAT = 'Y-m-d H:i:s';

    public $patient;
    public $mrn;
    public $token_owner;
    public $expiration;
    public $access_token;
    public $refresh_token;

    /**
     * constructor
     *
     * @param object|array $token_data
     */
    function __construct($token_data)
    {
        if(is_array($token_data)) $token_data = (object)$token_data;

        $this->patient = $token_data->patient;
        $this->mrn = isset($token_data->mrn) ? $token_data->mrn : null;
        $this->token_owner = isset($token_data->token_owner) ? $token_data->token_owner : null;
        $this->expiration = isset($token_data->expiration) ? $token_data->expiration : null;
        $this->access_token = $token_data->access_token;
        $this->refresh_token = $token_data->refresh_token;
        // calc expiration date
        if(isset($token_data->expires_in) && $token_data->expires_in) $this->setExpirationDate($token_data->expires_in);
    }

    public function getAccessToken()
    {
        if(empty($this->access_token)) return false;
        return $this->access_token;
    }

    /**
     * save token data to database
     *
     * @return void
     */
    public function save()
	{
        // check if patient is NULL and set the WHERE clause accordingly
        $where_patient = is_null($this->patient) ? 'patient IS NULL' : sprintf("patient = '%s'", db_real_escape_string($this->patient));
		$query_string = sprintf("DELETE FROM redcap_ehr_access_tokens
                        WHERE %s AND token_owner = %s",
                        $where_patient, checkNull($this->token_owner));
        // first delete tokens with the same patient that belong to the current user
        $result = db_query($query_string);

        // Insert
        $query_string = sprintf("INSERT INTO redcap_ehr_access_tokens (patient, mrn, token_owner, expiration, access_token, refresh_token)
                        VALUES (%s,%s,%s,%s,%s,%s)",
                        checkNull($this->patient),
                        checkNull($this->mrn),
                        checkNull($this->token_owner),
                        checkNull($this->expiration),
                        checkNull($this->access_token),
                        checkNull($this->refresh_token)
            );
        
        if($result = db_query($query_string)) return $result;
        else throw new \Exception("Access token information was not stored to the database", 1);
    }

    /**
     * set the owner of the token
     *
     * @param integer $user_id
     * @return void
     */
    public function setOwner($user_id)
    {
        $this->token_owner = $user_id;
    }

    /**
     * Undocumented function
     *
     * @param object|array $token_data
     * @return FhirToken
     */
    public static function store($token_data)
    {
        $token = new self($token_data);
        $token->save();
        return $token;
    }

    public function isValid()
    {
        if(empty($this->access_token)) return false;
        if(empty($this->expiration)) return true;
        // get the time relative to NOW
        $now = time();
        $expiration_time = strtotime( $this->expiration );
        return $expiration_time>$now;
    }

    public function isExpired()
    {
        return !$this->isValid();
    }

    /**
     * refresh the token
     * support client credential authentication flow
     *
     * @param FhirServices $fhirServices
     * @return boolean
     */
    public function refresh($fhirServices)
    {
        global $fhir_standalone_authentication_flow;
        
        try {
 
            if(empty($this->refresh_token)) return false; // Cannot refresh the token; no refresh token available
            $new_token = $fhirServices->refreshToken($this->refresh_token);
            if(!$new_token) return false;

            $this->access_token = $new_token->access_token;
            $this->setExpirationDate($timespan=$new_token->expires_in);
            $this->save();
            return true;
        } catch (\Exception $e) {
            $code = $e->getCode();
            $invalidating_codes = [400,401];
            if(in_array($code, $invalidating_codes));
            {
                // a 400 error code stands for "invalid grant": the token is too old and no longer usable
                // 401 is forbidden
                if($this->patient || $this->mrn) $this->invalidate();
                else $this->delete();
            }
            return false;
        }
    }


    /**
     * update the database:
     *  - set access_token and refresh_token to NULL
     *  - keep the patient, mrn and token owner for reference
     *
     * @return boolean
     */
    public function invalidate()
	{
		// Delete row from table
		$query_string = sprintf("UPDATE redcap_ehr_access_tokens SET access_token = NULL, refresh_token = NULL, expiration = NULL
                WHERE access_token = %s AND token_owner = %s",
                checkNull($this->access_token), checkNull($this->token_owner)
        );
		return db_query($query_string);
	}

    /**
     * update the database:
     *  - set access_token and refresh_token to NULL
     *  - keep the patient, mrn and token owner for reference
     *
     * @return boolean
     */
    public function delete()
	{
		// Delete row from table
		$query_string = sprintf(
            "DELETE FROM  redcap_ehr_access_tokens
            WHERE access_token <=> %s AND refresh_token <=> %s
            AND expiration <=> %s AND token_owner = %s",
            checkNull($this->access_token), checkNull($this->refresh_token),
            checkNull($this->expiration), checkNull($this->token_owner)
        );
		return db_query($query_string);
	}

    /**
     * set the expiration date based on a timespan
     *
     * @param [type] $timespan
     * @return void
     */
    public function setExpirationDate($timespan)
    {
        $this->expiration = self::calcExpirationDate($timespan);
    }
    
    /**
     * calculate the expiration date using a timespan
     *
     * @param [type] $timespan
     * @return string
     */
    private static function calcExpirationDate($timespan)
    {
        $now = new \DateTime();
        $date_interval = new \DateInterval("PT{$timespan}S");
        $now->add($date_interval);

        return $now->format(self::DATE_FORMAT);
    }

    public function __toString()
    {
        return $this->access_token;
    }

    /**
    * Returns data which can be serialized
    *
    * @return array
    */
    public function jsonSerialize(): array {
        
        $serialized = array(
            'patient' => $this->patient,
            'mrn' => $this->mrn,
            'token_owner' => $this->token_owner,
            'expiration' => $this->expiration,
            'access_token' => $this->access_token,
            'refresh_token' => $this->refresh_token,
        );
        return $serialized;
    }

}