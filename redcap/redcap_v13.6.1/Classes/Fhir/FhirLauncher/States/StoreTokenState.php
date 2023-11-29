<?php

namespace Vanderbilt\REDCap\Classes\Fhir\FhirLauncher\States;

use User;
use Session;
use Exception;
use HttpClient;
use Vanderbilt\REDCap\Classes\Fhir\FhirLauncher\FhirLauncher;
use Vanderbilt\REDCap\Classes\Fhir\FhirLauncher\DTOs\SessionDTO;
use Vanderbilt\REDCap\Classes\Fhir\TokenManager\FhirTokenManager;
use Vanderbilt\REDCap\Classes\Fhir\FhirLauncher\DTOs\FhirCookieDTO;


/**
 * make sure the user is authenticated
 * - store the token
 * - save a reference of the session in the main PHP session
 */
class StoreTokenState extends State
{

	public function run() {
		$session = $this->context->getSession();
		$this->context->log("checking REDCap user authentication");
		$this->checkLogin($session); // force login
		// the user is authenticated; store the token
		$this->context->log("storing access token");
		$this->storeToken($session);
		// also copy the FhirCookie to the session
		// $this->copyFhirCookieToSession();

		$this->redirectToNextState($session);
	}

	function copyFhirCookieToSession() {
		$fhirCookie = FhirCookieDTO::fromName(FhirLauncher::COOKIE_NAME);
		if (session_status() != PHP_SESSION_ACTIVE) return;
		// if (session_status() != PHP_SESSION_ACTIVE) session_start();
		$_SESSION[FhirLauncher::COOKIE_NAME] = $fhirCookie;
	}

	/**
	 * force REDCap login if user not already logged in
	 * 
	 * @param SessionDTO $session
	 * @return void
	 */
	function checkLogin($session) {
		/**
		 * go to the FHIR launcher login form
		 * this is an alternative to the standard REDCap login (loginFunction)
		 * NOTE: this still does not work in iFrames
		 */
		$useFhirLauncherLogin = function() {
			$params = $_GET;
			$params[FhirLauncher::FLAG_LOGIN] = 1;
			$query = http_build_query($params);
			$URL = $this->context->getRedirectUrl();
			HttpClient::redirect("$URL?$query", true, 302);
		};
		if($session->user) return;
		if($username = @$_SESSION['username']) {
			$session->user = $username;
			return;
		}
		// $useFhirLauncherLogin();
		loginFunction(); // use standard REDCap login form
	}

	/**
	 *
	 * @param SessionDTO $session
	 * @return void
	 */
	function storeToken($session) {

		if(!$session) throw new Exception("Error: session data is missing", 1);
		$accessToken = $session->accessToken;
		if(!$accessToken) throw new Exception("Error: access token payload is missing", 1);
		
		$user = @$session->user;
		$userid = User::getUIIDByUsername($user);
		if(!$userid) throw new Exception("Error: no user. Cannot persist the access token.", 1);

		$tokenData = [
			'access_token' => @$accessToken->access_token,
			'refresh_token' => @$accessToken->refresh_token,
			'expires_in' => @$accessToken->expires_in,
			'patient' => $patient = @$accessToken->patient,
		];
		return FhirTokenManager::storeToken($tokenData, $userid);
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

		// redirect to the map EHR user state
		$params = ['state' => $state, FhirLauncher::FLAG_MAP_EHR_USER=>1];
		$query = http_build_query($params);
		$this->context->log("redirecting to 'patient connector' page");
		HttpClient::redirect("$URL?$query", true, 302);
	}

	/**
	 * remove the store stoken flag and redirect
	 *
	 * @return void
	 */
	public function redirect() {
		$params = array_filter($_GET, function($key) {
			return $key!=FhirLauncher::FLAG_STORE_TOKEN;
		}, ARRAY_FILTER_USE_KEY);
		$query = http_build_query($params);
		$URL = $this->context->getRedirectUrl();
		HttpClient::redirect("$URL?$query", true, 302);
	}

}