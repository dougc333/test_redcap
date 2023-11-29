<?php

namespace Vanderbilt\REDCap\Classes\Fhir\FhirLauncher\States;

use User;
use Exception;
use HttpClient;
use Vanderbilt\REDCap\Classes\Fhir\FhirLauncher\FhirLauncher;
use Vanderbilt\REDCap\Classes\Fhir\FhirLauncher\FhirRenderer;
use Vanderbilt\REDCap\Classes\Fhir\FhirLauncher\DTOs\SessionDTO;

/**
 * make sure the user is authenticated
 * - store the token
 * - save a reference of the session in the main PHP session
 */
class MapEhrUserState extends State
{

	public function run() {
		$session = $this->context->getSession();
		$fhirUser = $session->fhirUser;
		$fhirUsers = $session->fhirUsers;
		$redcapUser = $session->user;

		// deal with the chosen FHIR user type
		if($request = $_POST) {
			$skip = boolval(@$request['skip']);
			if($skip) {
				$this->context->log("user decided to skip the mapping");
				$this->redirectToNextState($session);
			}

			$selectedFhirUser = @$request['fhir-user'];
			$session->fhirUser = $fhirUser = @$fhirUsers[$selectedFhirUser];
			if($fhirUser && $redcapUser) {
				$this->context->log("the user has chosen to map '{$fhirUser}' to '{$redcapUser}'");
				$this->mapEhrUser($fhirUser, $redcapUser);
			}else {
				$this->context->log("there was an error mapping '{$fhirUser}' to '{$redcapUser}'");
			}
			// whatever happens, go to next state
			$this->redirectToNextState($session);
		}

		if($fhirUser && $redcapUser) {
			// if a FHIR user is available here, then override the mapping (if exists)
			$this->mapEhrUser($fhirUser, $redcapUser);
		}
		// redirect to next state without managing extra Fhir user types (could be confusing)
		$this->redirectToNextState($session);

		$manageMultipleFhirUserTypes = function() use($session, $fhirUsers, $redcapUser) {
			// code from here will manage multiple fhir user types retrieved using the open ID scope
			$mappedEhrUser = $this->getMappedUsernameFromFhirUser($redcapUser);
			if($mappedEhrUser && ( empty($fhirUsers) || in_array($mappedEhrUser, $fhirUsers)) ) {
				$this->context->log("mapping already in place; moving to next state");
				$this->redirectToNextState($session);
			}


			// user mapping is usually performed after a launch from EHR, but could work in standalone launch as well
			// TODO: make sure that this one is not interfering with the ehr_user_mapping when in standalone launch context

			if(empty($fhirUsers)) $this->redirectToNextState($session);
			if($redcapUser && count($fhirUsers)===1) {
				$this->context->log("one mapping option is available; mapping FHIR user to REDCap user");
				$fhirUser = reset($fhirUsers);
				$this->mapEhrUser($fhirUser, $redcapUser);
				$this->redirectToNextState($session);
			}
			$this->context->log("multiple mapping options are available; user must select one");
			$renderer = FhirRenderer::engine();
			$html = $renderer->run('map_ehr_user', compact('session', 'fhirUsers'));
			print($html);
		};

	}

	/**
	 * Query table to get EHR user associated to a REDCap username
	 *
	 * @param string $ehr_user
	 * @return string
	 */
	private function getMappedUsernameFromFhirUser($redcapUsername)
	{		
		$queryString = "SELECT ehr_username FROM redcap_ehr_user_map
			WHERE redcap_userid = (SELECT ui_id FROM redcap_user_information WHERE username=?) LIMIT 1";
		$result = db_query($queryString, [$redcapUsername]);
		if(!$result) return false;
		if($row = db_fetch_assoc($result)) return $row['ehr_username'];
	}

	/**
	 * Map REDCap username to EHR username in db table
	 *
	 * @param string $ehr_user
	 * @param string $redcap_user
	 * @throws Exception if no valid user is provided
	 * @return mysqli_result|bool
	 */
	public function mapEhrUser($ehr_user, $redcap_user)
	{
		// Get user ui_id
		$user_id = User::getUIIDByUsername($redcap_user);
		if(empty($user_id)) {
			return false;
			// throw new \Exception("Error mapping the EHR user: no valid REDCap user provided.", 1);
		}
		
		$sql = "REPLACE INTO redcap_ehr_user_map (ehr_username, redcap_userid) VALUES (?, ?)";
		return db_query($sql, [db_escape($ehr_user), db_escape($user_id)]);
	}

	/**
	 * redirect to the next state based on the data available in the
	 * session and the launch type
	 *
	 * @param SessionDTO $session
	 * @return void
	 */
	public function redirectToNextState($session) {
		$URL = $this->context->getRedirectUrl();
		$state = @$session->state;
		$accessTokenDTO = @$session->accessToken;
		$launchType = $session->launchType;
		if(($patient = @$accessTokenDTO->patient) && $launchType===FhirLauncher::LAUNCHTYPE_EHR) {
			// set data for the patient portal (EHR launch) and redirect to the store token state
			$params = ['state' => $state, FhirLauncher::FLAG_PATIENT_ID=>$patient];
			$query = http_build_query($params);
			$this->context->log("redirecting to 'patient connector' page");
			HttpClient::redirect("$URL?$query", true, 302);
		}else {
			// redirect to success page (standalone launch) and redirect to the store token state
			$params = ['state' => $state, FhirLauncher::FLAG_AUTH_SUCCESS=>1];
			$query = http_build_query($params);
			$this->context->log("redirecting to 'auth success' page");
			HttpClient::redirect("$URL?$query", true, 302);
		}
	}

}