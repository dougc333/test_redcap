<?php
namespace Aws\SecurityLake;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Security Lake** service.
 * @method \Aws\Result createAwsLogSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAwsLogSourceAsync(array $args = [])
 * @method \Aws\Result createCustomLogSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCustomLogSourceAsync(array $args = [])
 * @method \Aws\Result createDatalake(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDatalakeAsync(array $args = [])
 * @method \Aws\Result createDatalakeAutoEnable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDatalakeAutoEnableAsync(array $args = [])
 * @method \Aws\Result createDatalakeDelegatedAdmin(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDatalakeDelegatedAdminAsync(array $args = [])
 * @method \Aws\Result createDatalakeExceptionsSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDatalakeExceptionsSubscriptionAsync(array $args = [])
 * @method \Aws\Result createSubscriber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSubscriberAsync(array $args = [])
 * @method \Aws\Result createSubscriptionNotificationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSubscriptionNotificationConfigurationAsync(array $args = [])
 * @method \Aws\Result deleteAwsLogSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAwsLogSourceAsync(array $args = [])
 * @method \Aws\Result deleteCustomLogSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCustomLogSourceAsync(array $args = [])
 * @method \Aws\Result deleteDatalake(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDatalakeAsync(array $args = [])
 * @method \Aws\Result deleteDatalakeAutoEnable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDatalakeAutoEnableAsync(array $args = [])
 * @method \Aws\Result deleteDatalakeDelegatedAdmin(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDatalakeDelegatedAdminAsync(array $args = [])
 * @method \Aws\Result deleteDatalakeExceptionsSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDatalakeExceptionsSubscriptionAsync(array $args = [])
 * @method \Aws\Result deleteSubscriber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSubscriberAsync(array $args = [])
 * @method \Aws\Result deleteSubscriptionNotificationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSubscriptionNotificationConfigurationAsync(array $args = [])
 * @method \Aws\Result getDatalake(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDatalakeAsync(array $args = [])
 * @method \Aws\Result getDatalakeAutoEnable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDatalakeAutoEnableAsync(array $args = [])
 * @method \Aws\Result getDatalakeExceptionsExpiry(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDatalakeExceptionsExpiryAsync(array $args = [])
 * @method \Aws\Result getDatalakeExceptionsSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDatalakeExceptionsSubscriptionAsync(array $args = [])
 * @method \Aws\Result getDatalakeStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDatalakeStatusAsync(array $args = [])
 * @method \Aws\Result getSubscriber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSubscriberAsync(array $args = [])
 * @method \Aws\Result listDatalakeExceptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDatalakeExceptionsAsync(array $args = [])
 * @method \Aws\Result listLogSources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLogSourcesAsync(array $args = [])
 * @method \Aws\Result listSubscribers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSubscribersAsync(array $args = [])
 * @method \Aws\Result updateDatalake(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDatalakeAsync(array $args = [])
 * @method \Aws\Result updateDatalakeExceptionsExpiry(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDatalakeExceptionsExpiryAsync(array $args = [])
 * @method \Aws\Result updateDatalakeExceptionsSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDatalakeExceptionsSubscriptionAsync(array $args = [])
 * @method \Aws\Result updateSubscriber(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSubscriberAsync(array $args = [])
 * @method \Aws\Result updateSubscriptionNotificationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSubscriptionNotificationConfigurationAsync(array $args = [])
 */
class SecurityLakeClient extends AwsClient {}
