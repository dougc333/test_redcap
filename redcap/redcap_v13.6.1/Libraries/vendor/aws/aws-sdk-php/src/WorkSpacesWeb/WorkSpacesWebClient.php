<?php
namespace Aws\WorkSpacesWeb;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon WorkSpaces Web** service.
 * @method \Aws\Result associateBrowserSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateBrowserSettingsAsync(array $args = [])
 * @method \Aws\Result associateNetworkSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateNetworkSettingsAsync(array $args = [])
 * @method \Aws\Result associateTrustStore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateTrustStoreAsync(array $args = [])
 * @method \Aws\Result associateUserAccessLoggingSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateUserAccessLoggingSettingsAsync(array $args = [])
 * @method \Aws\Result associateUserSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateUserSettingsAsync(array $args = [])
 * @method \Aws\Result createBrowserSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBrowserSettingsAsync(array $args = [])
 * @method \Aws\Result createIdentityProvider(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createIdentityProviderAsync(array $args = [])
 * @method \Aws\Result createNetworkSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNetworkSettingsAsync(array $args = [])
 * @method \Aws\Result createPortal(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPortalAsync(array $args = [])
 * @method \Aws\Result createTrustStore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTrustStoreAsync(array $args = [])
 * @method \Aws\Result createUserAccessLoggingSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserAccessLoggingSettingsAsync(array $args = [])
 * @method \Aws\Result createUserSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUserSettingsAsync(array $args = [])
 * @method \Aws\Result deleteBrowserSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBrowserSettingsAsync(array $args = [])
 * @method \Aws\Result deleteIdentityProvider(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIdentityProviderAsync(array $args = [])
 * @method \Aws\Result deleteNetworkSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNetworkSettingsAsync(array $args = [])
 * @method \Aws\Result deletePortal(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePortalAsync(array $args = [])
 * @method \Aws\Result deleteTrustStore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTrustStoreAsync(array $args = [])
 * @method \Aws\Result deleteUserAccessLoggingSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserAccessLoggingSettingsAsync(array $args = [])
 * @method \Aws\Result deleteUserSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserSettingsAsync(array $args = [])
 * @method \Aws\Result disassociateBrowserSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateBrowserSettingsAsync(array $args = [])
 * @method \Aws\Result disassociateNetworkSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateNetworkSettingsAsync(array $args = [])
 * @method \Aws\Result disassociateTrustStore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateTrustStoreAsync(array $args = [])
 * @method \Aws\Result disassociateUserAccessLoggingSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateUserAccessLoggingSettingsAsync(array $args = [])
 * @method \Aws\Result disassociateUserSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateUserSettingsAsync(array $args = [])
 * @method \Aws\Result getBrowserSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBrowserSettingsAsync(array $args = [])
 * @method \Aws\Result getIdentityProvider(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getIdentityProviderAsync(array $args = [])
 * @method \Aws\Result getNetworkSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getNetworkSettingsAsync(array $args = [])
 * @method \Aws\Result getPortal(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPortalAsync(array $args = [])
 * @method \Aws\Result getPortalServiceProviderMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPortalServiceProviderMetadataAsync(array $args = [])
 * @method \Aws\Result getTrustStore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTrustStoreAsync(array $args = [])
 * @method \Aws\Result getTrustStoreCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTrustStoreCertificateAsync(array $args = [])
 * @method \Aws\Result getUserAccessLoggingSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUserAccessLoggingSettingsAsync(array $args = [])
 * @method \Aws\Result getUserSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getUserSettingsAsync(array $args = [])
 * @method \Aws\Result listBrowserSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBrowserSettingsAsync(array $args = [])
 * @method \Aws\Result listIdentityProviders(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIdentityProvidersAsync(array $args = [])
 * @method \Aws\Result listNetworkSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listNetworkSettingsAsync(array $args = [])
 * @method \Aws\Result listPortals(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPortalsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result listTrustStoreCertificates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTrustStoreCertificatesAsync(array $args = [])
 * @method \Aws\Result listTrustStores(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTrustStoresAsync(array $args = [])
 * @method \Aws\Result listUserAccessLoggingSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUserAccessLoggingSettingsAsync(array $args = [])
 * @method \Aws\Result listUserSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUserSettingsAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateBrowserSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBrowserSettingsAsync(array $args = [])
 * @method \Aws\Result updateIdentityProvider(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateIdentityProviderAsync(array $args = [])
 * @method \Aws\Result updateNetworkSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateNetworkSettingsAsync(array $args = [])
 * @method \Aws\Result updatePortal(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePortalAsync(array $args = [])
 * @method \Aws\Result updateTrustStore(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTrustStoreAsync(array $args = [])
 * @method \Aws\Result updateUserAccessLoggingSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserAccessLoggingSettingsAsync(array $args = [])
 * @method \Aws\Result updateUserSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserSettingsAsync(array $args = [])
 */
class WorkSpacesWebClient extends AwsClient {}
