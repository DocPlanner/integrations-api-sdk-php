# DocPlanner\Client\PatientPresenceApi

All URIs are relative to *https://www.{domain}/api/v3/integration*

Method | HTTP request | Description
------------- | ------------- | -------------
[**markPatientAbsence**](PatientPresenceApi.md#markpatientabsence) | **DELETE** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/bookings/{booking_id}/presence/patient | 
[**markPatientPresence**](PatientPresenceApi.md#markpatientpresence) | **POST** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/bookings/{booking_id}/presence/patient | 

# **markPatientAbsence**
> markPatientAbsence($facility_id, $doctor_id, $address_id, $booking_id)



Mark the absence of the patient on the visit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\PatientPresenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility_id = 56; // int | ID of the Facility
$doctor_id = 56; // int | ID of a doctor in a facility
$address_id = 56; // int | ID of a doctor`s address in a facility
$booking_id = 56; // int | ID of the Booking

try {
    $apiInstance->markPatientAbsence($facility_id, $doctor_id, $address_id, $booking_id);
} catch (Exception $e) {
    echo 'Exception when calling PatientPresenceApi->markPatientAbsence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility_id** | **int**| ID of the Facility |
 **doctor_id** | **int**| ID of a doctor in a facility |
 **address_id** | **int**| ID of a doctor&#x60;s address in a facility |
 **booking_id** | **int**| ID of the Booking |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.docplanner+json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markPatientPresence**
> markPatientPresence($facility_id, $doctor_id, $address_id, $booking_id)



Mark the presence of the patient on the visit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\PatientPresenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility_id = 56; // int | ID of the Facility
$doctor_id = 56; // int | ID of a doctor in a facility
$address_id = 56; // int | ID of a doctor`s address in a facility
$booking_id = 56; // int | ID of the Booking

try {
    $apiInstance->markPatientPresence($facility_id, $doctor_id, $address_id, $booking_id);
} catch (Exception $e) {
    echo 'Exception when calling PatientPresenceApi->markPatientPresence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility_id** | **int**| ID of the Facility |
 **doctor_id** | **int**| ID of a doctor in a facility |
 **address_id** | **int**| ID of a doctor&#x60;s address in a facility |
 **booking_id** | **int**| ID of the Booking |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.docplanner+json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

