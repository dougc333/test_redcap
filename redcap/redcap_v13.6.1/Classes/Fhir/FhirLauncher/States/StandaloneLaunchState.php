<?php

namespace Vanderbilt\REDCap\Classes\Fhir\FhirLauncher\States;

use Vanderbilt\REDCap\Classes\DTOs\REDCapConfigDTO;
use Vanderbilt\REDCap\Classes\Fhir\FhirLauncher\FhirLauncher;
use Vanderbilt\REDCap\Classes\Fhir\FhirLauncher\Scopes\Scopes;
use Vanderbilt\REDCap\Classes\Fhir\FhirLauncher\Scopes\AuthorizationScopes;
use Vanderbilt\REDCap\Classes\Fhir\FhirLauncher\DTOs\AuthorizationRequestDTO;
use Vanderbilt\REDCap\Classes\Fhir\FhirLauncher\FhirLaunchContexts;
use Vanderbilt\REDCap\Classes\Fhir\FhirLauncher\Traits\CanGetAuthorizationToken;
use Vanderbilt\REDCap\Classes\Fhir\FhirLauncher\Traits\CanSetSessionCookie;

class StandaloneLaunchState extends State
{
	use CanGetAuthorizationToken;
	use CanSetSessionCookie;

	public function run() {
		$session = $this->context->getSession();
		$this->context->forceBlankSession();
		
		$this->context->log('Starting standalone launch'); // diagram step

		$session->launchType = FhirLauncher::LAUNCHTYPE_STANDALONE; // save the launch type
		$state = $session->state;

		$config = REDCapConfigDTO::fromDB();
		$scopes = new AuthorizationScopes();
		$scopes->setLevel(Scopes::USER_LEVEL); // set provider level for resource scopes
		$scopes->setFilter('^launch'); // launch scope must not be provided in a standalone launch

		$aud = $this->getIdentityProvider($config->fhir_endpoint_base_url);

		$authorizationDTO = AuthorizationRequestDTO::fromArray([
			'response_type' => AuthorizationRequestDTO::RESPONSE_TYPE_CODE,
			'client_id' => @$config->fhir_client_id,
			'redirect_uri' => $this->context->getRedirectUrl(),
			'scope' => strval($scopes),
			// 'launch' => '', // only set during launch from EHR
			'aud' => $aud,
			'state' => $state,
			'legacy_login_page' => 0, // optional, Epic-only parameter that forces the authentication to use the legacy OAuth2
		]);
		$URL = $this->context->getAuthorizeURL();
		$params = $authorizationDTO->getData();
		$this->applyConfigOverrides(FhirLaunchContexts::STANDALONE_LAUNCH, $params);

		$this->context->log(sprintf("setting params for authorization URL: ", json_encode($params, JSON_PRETTY_PRINT))); // diagram step
		$this->context->log("request authorization via OAuth2: redirecting to $URL"); // diagram step
		
		$this->setCookie($state, FhirLauncher::LAUNCHTYPE_STANDALONE);

		$this->redirectToAuthorizeURL($URL, $params);
	}

}