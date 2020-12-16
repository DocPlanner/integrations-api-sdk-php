# DocPlanner\Client\BookingsApi

All URIs are relative to *https://www.{domain}/api/v3/integration*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelBooking**](BookingsApi.md#cancelbooking) | **DELETE** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/bookings/{booking_id} | 
[**getBooking**](BookingsApi.md#getbooking) | **GET** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/bookings/{booking_id} | 
[**getBookings**](BookingsApi.md#getbookings) | **GET** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/bookings | 
[**moveBooking**](BookingsApi.md#movebooking) | **POST** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/bookings/{booking_id}/move | 
[**requestOpinion**](BookingsApi.md#requestopinion) | **PUT** /facilities/{facility_id}/doctors/{doctor_id}/opinion-request | 

# **cancelBooking**
> cancelBooking($facility_id, $doctor_id, $address_id, $booking_id)



Cancel the booking

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\BookingsApi(
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
    $apiInstance->cancelBooking($facility_id, $doctor_id, $address_id, $booking_id);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->cancelBooking: ', $e->getMessage(), PHP_EOL;
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

# **getBooking**
> \DocPlanner\Client\Model\Booking getBooking($facility_id, $doctor_id, $address_id, $booking_id, $with)



View specific booking

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility_id = 56; // int | ID of the Facility
$doctor_id = 56; // int | ID of a doctor in a facility
$address_id = 56; // int | ID of a doctor`s address in a facility
$booking_id = 56; // int | ID of the Booking
$with = array(new \DocPlanner\Client\Model\BookingScopes()); // \DocPlanner\Client\Model\BookingScopes[] | 

try {
    $result = $apiInstance->getBooking($facility_id, $doctor_id, $address_id, $booking_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->getBooking: ', $e->getMessage(), PHP_EOL;
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
 **with** | [**\DocPlanner\Client\Model\BookingScopes[]**](../Model/\DocPlanner\Client\Model\BookingScopes.md)|  | [optional]

### Return type

[**\DocPlanner\Client\Model\Booking**](../Model/Booking.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.docplanner+json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBookings**
> \DocPlanner\Client\Model\Bookings getBookings($facility_id, $doctor_id, $address_id, $start, $end, $with)



Get  bookings list of a doctor in the facility

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility_id = 56; // int | ID of the Facility
$doctor_id = 56; // int | ID of a doctor in a facility
$address_id = 56; // int | ID of a doctor`s address in a facility
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Slot start date (parameter must be urlencoded before sending request)
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Slot start date (parameter must be urlencoded before sending request)
$with = array(new \DocPlanner\Client\Model\BookingsScopes()); // \DocPlanner\Client\Model\BookingsScopes[] | 

try {
    $result = $apiInstance->getBookings($facility_id, $doctor_id, $address_id, $start, $end, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->getBookings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility_id** | **int**| ID of the Facility |
 **doctor_id** | **int**| ID of a doctor in a facility |
 **address_id** | **int**| ID of a doctor&#x60;s address in a facility |
 **start** | **\DateTime**| Slot start date (parameter must be urlencoded before sending request) |
 **end** | **\DateTime**| Slot start date (parameter must be urlencoded before sending request) |
 **with** | [**\DocPlanner\Client\Model\BookingsScopes[]**](../Model/\DocPlanner\Client\Model\BookingsScopes.md)|  | [optional]

### Return type

[**\DocPlanner\Client\Model\Bookings**](../Model/Bookings.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.docplanner+json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **moveBooking**
> moveBooking($body, $facility_id, $doctor_id, $address_id, $booking_id)



Move booking for a doctor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DocPlanner\Client\Model\MoveBookingRequest(); // \DocPlanner\Client\Model\MoveBookingRequest | 
$facility_id = 56; // int | ID of the Facility
$doctor_id = 56; // int | ID of a doctor in a facility
$address_id = 56; // int | ID of a doctor`s address in a facility
$booking_id = 56; // int | ID of the Booking

try {
    $apiInstance->moveBooking($body, $facility_id, $doctor_id, $address_id, $booking_id);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->moveBooking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DocPlanner\Client\Model\MoveBookingRequest**](../Model/MoveBookingRequest.md)|  |
 **facility_id** | **int**| ID of the Facility |
 **doctor_id** | **int**| ID of a doctor in a facility |
 **address_id** | **int**| ID of a doctor&#x60;s address in a facility |
 **booking_id** | **int**| ID of the Booking |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.docplanner+json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestOpinion**
> requestOpinion($facility_id, $doctor_id, $body)



After the visit was booked via clinics software, by calling this endpoint you can request SMS asking patient to leave an opinion. We do not store patient and visit information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\BookingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility_id = 56; // int | ID of the Facility
$doctor_id = 56; // int | ID of a doctor in a facility
$body = new \DocPlanner\Client\Model\OpinionRequest(); // \DocPlanner\Client\Model\OpinionRequest | Phone number of the patient

try {
    $apiInstance->requestOpinion($facility_id, $doctor_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling BookingsApi->requestOpinion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility_id** | **int**| ID of the Facility |
 **doctor_id** | **int**| ID of a doctor in a facility |
 **body** | [**\DocPlanner\Client\Model\OpinionRequest**](../Model/OpinionRequest.md)| Phone number of the patient | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.docplanner+json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

