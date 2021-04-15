# DocPlanner\Client\APINotificationCallbacksApi

All URIs are relative to *https://www.{domain}/api/v3/integration*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pullNotification**](APINotificationCallbacksApi.md#pullnotification) | **GET** /notifications | 
[**pushNotifications**](APINotificationCallbacksApi.md#pushnotifications) | **POST** /{client-endpoint-url} | 
[**releaseNotifications**](APINotificationCallbacksApi.md#releasenotifications) | **POST** /notifications/release | 

# **pullNotification**
> \DocPlanner\Client\Model\Notification pullNotification()



Pulling Notifications - You can pull notifications via this endpoint. This page will respond to you with the earliest notification you haven’t been pulled yet. First In First Out (FIFO) principle applied here. This endpoint will respond with one notification per request until there aren’t any notifications left in the notification stack. Important: Notifications that are not pulled in 72 hours are marked as expired and deleted from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth 2.0
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\APINotificationCallbacksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->pullNotification();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APINotificationCallbacksApi->pullNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\DocPlanner\Client\Model\Notification**](../Model/Notification.md)

### Authorization

[OAuth 2.0](../../README.md#OAuth 2.0)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.docplanner+json; charset=UTF-8, application/vnd.error+docplanner+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pushNotifications**
> pushNotifications()



Pushing Notifications - To be able to use this method, client should give us an endpoint url, and we will be pushing notifications to this endpoint in real time. HTTP POST method will be used to push event data to endpoint. Note: Regardless of the response status (500, 200, 400) from the client endpoint, the events will be pushed only once. You can find every possible event notification requests below.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new DocPlanner\Client\Api\APINotificationCallbacksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->pushNotifications();
} catch (Exception $e) {
    echo 'Exception when calling APINotificationCallbacksApi->pushNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **releaseNotifications**
> releaseNotifications()



Action allowing to trigger re-dispatching all the notifications that were not processed correctly. Call to this endpoint should be repeated periodically to ensure consistency between systems. Docplanner API allows to perform notifications release once per hour. Endpoint can be used only if Docplanner system is pushing events to the external endpoints.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth 2.0
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\APINotificationCallbacksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->releaseNotifications();
} catch (Exception $e) {
    echo 'Exception when calling APINotificationCallbacksApi->releaseNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[OAuth 2.0](../../README.md#OAuth 2.0)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.error+docplanner+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

