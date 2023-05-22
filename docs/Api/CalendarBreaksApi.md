# DocPlanner\Client\CalendarBreaksApi

All URIs are relative to *https://www.{domain}/api/v3/integration*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCalendarBreak**](CalendarBreaksApi.md#addcalendarbreak) | **POST** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/breaks | 
[**deleteCalendarBreak**](CalendarBreaksApi.md#deletecalendarbreak) | **DELETE** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/breaks/{break_id} | 
[**getCalendarBreak**](CalendarBreaksApi.md#getcalendarbreak) | **GET** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/breaks/{break_id} | 
[**getCalendarBreaks**](CalendarBreaksApi.md#getcalendarbreaks) | **GET** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/breaks | 
[**moveCalendarBreak**](CalendarBreaksApi.md#movecalendarbreak) | **PATCH** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/breaks/{break_id} | 

# **addCalendarBreak**
> addCalendarBreak($body, $facility_id, $doctor_id, $address_id)



Add a new break to the calendar

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\CalendarBreaksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DocPlanner\Client\Model\AddCalendarBreakRequest(); // \DocPlanner\Client\Model\AddCalendarBreakRequest | 
$facility_id = "facility_id_example"; // string | ID of the Facility
$doctor_id = "doctor_id_example"; // string | ID of a doctor in a facility
$address_id = "address_id_example"; // string | ID of a doctor`s address in a facility

try {
    $apiInstance->addCalendarBreak($body, $facility_id, $doctor_id, $address_id);
} catch (Exception $e) {
    echo 'Exception when calling CalendarBreaksApi->addCalendarBreak: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DocPlanner\Client\Model\AddCalendarBreakRequest**](../Model/AddCalendarBreakRequest.md)|  |
 **facility_id** | **string**| ID of the Facility |
 **doctor_id** | **string**| ID of a doctor in a facility |
 **address_id** | **string**| ID of a doctor&#x60;s address in a facility |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.error+docplanner+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCalendarBreak**
> deleteCalendarBreak($facility_id, $doctor_id, $address_id, $break_id)



Delete the calendar break

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\CalendarBreaksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility_id = "facility_id_example"; // string | ID of the Facility
$doctor_id = "doctor_id_example"; // string | ID of a doctor in a facility
$address_id = "address_id_example"; // string | ID of a doctor`s address in a facility
$break_id = "break_id_example"; // string | ID of the Calendar Break

try {
    $apiInstance->deleteCalendarBreak($facility_id, $doctor_id, $address_id, $break_id);
} catch (Exception $e) {
    echo 'Exception when calling CalendarBreaksApi->deleteCalendarBreak: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility_id** | **string**| ID of the Facility |
 **doctor_id** | **string**| ID of a doctor in a facility |
 **address_id** | **string**| ID of a doctor&#x60;s address in a facility |
 **break_id** | **string**| ID of the Calendar Break |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.error+docplanner+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCalendarBreak**
> \DocPlanner\Client\Model\CalendarBreak getCalendarBreak($facility_id, $doctor_id, $address_id, $break_id)



View a specific calendar break

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\CalendarBreaksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility_id = "facility_id_example"; // string | ID of the Facility
$doctor_id = "doctor_id_example"; // string | ID of a doctor in a facility
$address_id = "address_id_example"; // string | ID of a doctor`s address in a facility
$break_id = "break_id_example"; // string | ID of the Calendar Break

try {
    $result = $apiInstance->getCalendarBreak($facility_id, $doctor_id, $address_id, $break_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarBreaksApi->getCalendarBreak: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility_id** | **string**| ID of the Facility |
 **doctor_id** | **string**| ID of a doctor in a facility |
 **address_id** | **string**| ID of a doctor&#x60;s address in a facility |
 **break_id** | **string**| ID of the Calendar Break |

### Return type

[**\DocPlanner\Client\Model\CalendarBreak**](../Model/CalendarBreak.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.docplanner+json; charset=UTF-8, application/vnd.error+docplanner+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCalendarBreaks**
> \DocPlanner\Client\Model\CalendarBreaks getCalendarBreaks($facility_id, $doctor_id, $address_id, $since, $till)



Get the list of calendar breaks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\CalendarBreaksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility_id = "facility_id_example"; // string | ID of the Facility
$doctor_id = "doctor_id_example"; // string | ID of a doctor in a facility
$address_id = "address_id_example"; // string | ID of a doctor`s address in a facility
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$till = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->getCalendarBreaks($facility_id, $doctor_id, $address_id, $since, $till);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarBreaksApi->getCalendarBreaks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility_id** | **string**| ID of the Facility |
 **doctor_id** | **string**| ID of a doctor in a facility |
 **address_id** | **string**| ID of a doctor&#x60;s address in a facility |
 **since** | **\DateTime**|  |
 **till** | **\DateTime**|  |

### Return type

[**\DocPlanner\Client\Model\CalendarBreaks**](../Model/CalendarBreaks.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.docplanner+json; charset=UTF-8, application/vnd.error+docplanner+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **moveCalendarBreak**
> moveCalendarBreak($body, $facility_id, $doctor_id, $address_id, $break_id)



Move the calendar break

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\CalendarBreaksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DocPlanner\Client\Model\MoveCalendarBreakRequest(); // \DocPlanner\Client\Model\MoveCalendarBreakRequest | 
$facility_id = "facility_id_example"; // string | ID of the Facility
$doctor_id = "doctor_id_example"; // string | ID of a doctor in a facility
$address_id = "address_id_example"; // string | ID of a doctor`s address in a facility
$break_id = "break_id_example"; // string | ID of the Calendar Break

try {
    $apiInstance->moveCalendarBreak($body, $facility_id, $doctor_id, $address_id, $break_id);
} catch (Exception $e) {
    echo 'Exception when calling CalendarBreaksApi->moveCalendarBreak: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DocPlanner\Client\Model\MoveCalendarBreakRequest**](../Model/MoveCalendarBreakRequest.md)|  |
 **facility_id** | **string**| ID of the Facility |
 **doctor_id** | **string**| ID of a doctor in a facility |
 **address_id** | **string**| ID of a doctor&#x60;s address in a facility |
 **break_id** | **string**| ID of the Calendar Break |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.error+docplanner+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

