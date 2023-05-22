# DocPlanner\Client\SlotsApi

All URIs are relative to *https://www.{domain}/api/v3/integration*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bookSlot**](SlotsApi.md#bookslot) | **POST** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/slots/{start}/book | 
[**deleteSlots**](SlotsApi.md#deleteslots) | **DELETE** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/slots/{date} | 
[**getSlots**](SlotsApi.md#getslots) | **GET** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/slots | 
[**replaceSlots**](SlotsApi.md#replaceslots) | **PUT** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/slots | 

# **bookSlot**
> \DocPlanner\Client\Model\Booking bookSlot($body, $facility_id, $doctor_id, $address_id, $start)



Book a slot

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\SlotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DocPlanner\Client\Model\BookSlotRequest(); // \DocPlanner\Client\Model\BookSlotRequest | 
$facility_id = "facility_id_example"; // string | ID of the Facility
$doctor_id = "doctor_id_example"; // string | ID of a doctor in a facility
$address_id = "address_id_example"; // string | ID of a doctor`s address in a facility
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Slot start date (parameter must be urlencoded before sending request)

try {
    $result = $apiInstance->bookSlot($body, $facility_id, $doctor_id, $address_id, $start);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SlotsApi->bookSlot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DocPlanner\Client\Model\BookSlotRequest**](../Model/BookSlotRequest.md)|  |
 **facility_id** | **string**| ID of the Facility |
 **doctor_id** | **string**| ID of a doctor in a facility |
 **address_id** | **string**| ID of a doctor&#x60;s address in a facility |
 **start** | **\DateTime**| Slot start date (parameter must be urlencoded before sending request) |

### Return type

[**\DocPlanner\Client\Model\Booking**](../Model/Booking.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.docplanner+json; charset=UTF-8, application/vnd.error+docplanner+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSlots**
> deleteSlots($facility_id, $doctor_id, $address_id, $date)



Delete slots for the given date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\SlotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility_id = "facility_id_example"; // string | ID of the Facility
$doctor_id = "doctor_id_example"; // string | ID of a doctor in a facility
$address_id = "address_id_example"; // string | ID of a doctor`s address in a facility
$date = new \DateTime("2013-10-20"); // \DateTime | 

try {
    $apiInstance->deleteSlots($facility_id, $doctor_id, $address_id, $date);
} catch (Exception $e) {
    echo 'Exception when calling SlotsApi->deleteSlots: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility_id** | **string**| ID of the Facility |
 **doctor_id** | **string**| ID of a doctor in a facility |
 **address_id** | **string**| ID of a doctor&#x60;s address in a facility |
 **date** | **\DateTime**|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.error+docplanner+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSlots**
> \DocPlanner\Client\Model\Slots getSlots($facility_id, $doctor_id, $address_id, $start, $end, $with)



List of free slots for the address within specified date range  Extensions: * `slot.services` - with this parameter in url, query results will return address services attached to given slots

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\SlotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility_id = "facility_id_example"; // string | ID of the Facility
$doctor_id = "doctor_id_example"; // string | ID of a doctor in a facility
$address_id = "address_id_example"; // string | ID of a doctor`s address in a facility
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Slot start date (parameter must be urlencoded before sending request)
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Slot start date (parameter must be urlencoded before sending request)
$with = array(new \DocPlanner\Client\Model\SlotsScopes()); // \DocPlanner\Client\Model\SlotsScopes[] | 

try {
    $result = $apiInstance->getSlots($facility_id, $doctor_id, $address_id, $start, $end, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SlotsApi->getSlots: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility_id** | **string**| ID of the Facility |
 **doctor_id** | **string**| ID of a doctor in a facility |
 **address_id** | **string**| ID of a doctor&#x60;s address in a facility |
 **start** | **\DateTime**| Slot start date (parameter must be urlencoded before sending request) |
 **end** | **\DateTime**| Slot start date (parameter must be urlencoded before sending request) |
 **with** | [**\DocPlanner\Client\Model\SlotsScopes[]**](../Model/\DocPlanner\Client\Model\SlotsScopes.md)|  | [optional]

### Return type

[**\DocPlanner\Client\Model\Slots**](../Model/Slots.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.docplanner+json; charset=UTF-8, application/vnd.error+docplanner+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceSlots**
> replaceSlots($body, $facility_id, $doctor_id, $address_id)



Adds or replaces the slots. This will override all existing slots for given date ranges

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\SlotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DocPlanner\Client\Model\ReplaceSlotsRequest(); // \DocPlanner\Client\Model\ReplaceSlotsRequest | 
$facility_id = "facility_id_example"; // string | ID of the Facility
$doctor_id = "doctor_id_example"; // string | ID of a doctor in a facility
$address_id = "address_id_example"; // string | ID of a doctor`s address in a facility

try {
    $apiInstance->replaceSlots($body, $facility_id, $doctor_id, $address_id);
} catch (Exception $e) {
    echo 'Exception when calling SlotsApi->replaceSlots: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DocPlanner\Client\Model\ReplaceSlotsRequest**](../Model/ReplaceSlotsRequest.md)|  |
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

