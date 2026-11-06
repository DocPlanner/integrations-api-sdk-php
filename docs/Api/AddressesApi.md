# DocPlanner\Client\AddressesApi

All URIs are relative to *https://www.{domain}/api/v3/integration*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAddress**](AddressesApi.md#getaddress) | **GET** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id} | 
[**getAddressPaymentSettings**](AddressesApi.md#getaddresspaymentsettings) | **GET** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/payment-settings | 
[**getAddresses**](AddressesApi.md#getaddresses) | **GET** /facilities/{facility_id}/doctors/{doctor_id}/addresses | 
[**removeAddressIntegration**](AddressesApi.md#removeaddressintegration) | **DELETE** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/integration | 
[**updateAddress**](AddressesApi.md#updateaddress) | **PATCH** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id} | 
[**updateAddressPaymentSettings**](AddressesApi.md#updateaddresspaymentsettings) | **PUT** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/payment-settings | 

# **getAddress**
> \DocPlanner\Client\Model\Address getAddress($facility_id, $doctor_id, $address_id, $with)



Get a single address of a doctor  Extensions: * `address.online_only` - with this parameter in url, query results will return additional parameter indicating if an address is dedicated to video consultations * `address.visit_payment` - with this parameter in url, query results will return additional parameter indicating if visit payment isr enabled * `address.commercial_type` - with this parameter in url, query results will return additional parameter indicating address commercial type * `address.insurance_support` - with this parameter in url, query results will return additional parameter indicating insurance support type of an address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility_id = "facility_id_example"; // string | ID of the Facility
$doctor_id = "doctor_id_example"; // string | ID of a doctor in a facility
$address_id = "address_id_example"; // string | ID of a doctor`s address in a facility
$with = array(new \DocPlanner\Client\Model\AddressesScopes()); // \DocPlanner\Client\Model\AddressesScopes[] | 

try {
    $result = $apiInstance->getAddress($facility_id, $doctor_id, $address_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->getAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility_id** | **string**| ID of the Facility |
 **doctor_id** | **string**| ID of a doctor in a facility |
 **address_id** | **string**| ID of a doctor&#x60;s address in a facility |
 **with** | [**\DocPlanner\Client\Model\AddressesScopes[]**](../Model/\DocPlanner\Client\Model\AddressesScopes.md)|  | [optional]

### Return type

[**\DocPlanner\Client\Model\Address**](../Model/Address.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.docplanner+json; charset=UTF-8, application/vnd.error+docplanner+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddressPaymentSettings**
> \DocPlanner\Client\Model\AddressPaymentSettings getAddressPaymentSettings($facility_id, $doctor_id, $address_id)



Get the online payment settings of an address: whether online payments are on, the upfront payment policy of patient and admin bookings for new and returning patients, and the Book Now Pay Later settings. **schedule_managed_by_docplanner** and **online_payments_account_active** tell which rules of **updateAddressPaymentSettings** apply to the address.   A policy, the late-cancellation window or the no-show fee that was never set is returned as **null**. A **null** policy is not the same as **inactive**, as the description of the policies below explains.   The window and the fee are reported as the booking flow applies them: a stored window below 24 hours is reported as **24**, a stored fee above 100 as **100**, and a stored value at or below 0 as **null**. Sending a window reported as **24** or a fee reported as **100** back with **updateAddressPaymentSettings** stores it and announces a change. A stored window above 120 hours is reported as stored and has to be brought into the accepted range when sent back. A stored window with a fraction of an hour is reported without the fraction, and sending it back stores it and announces a change. A stored fee with more than 2 decimal places is reported as stored and has to be rounded to 2 decimal places when sent back.   **Endpoint is dedicated for DocplannerPMS API clients only.**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility_id = "facility_id_example"; // string | ID of the Facility
$doctor_id = "doctor_id_example"; // string | ID of a doctor in a facility
$address_id = "address_id_example"; // string | ID of a doctor`s address in a facility

try {
    $result = $apiInstance->getAddressPaymentSettings($facility_id, $doctor_id, $address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->getAddressPaymentSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility_id** | **string**| ID of the Facility |
 **doctor_id** | **string**| ID of a doctor in a facility |
 **address_id** | **string**| ID of a doctor&#x60;s address in a facility |

### Return type

[**\DocPlanner\Client\Model\AddressPaymentSettings**](../Model/AddressPaymentSettings.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.docplanner+json; charset=UTF-8, application/vnd.error+docplanner+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddresses**
> \DocPlanner\Client\Model\Addresses getAddresses($facility_id, $doctor_id, $with)



Get a list of addresses of a doctor  Extensions: * `address.online_only` - with this parameter in url, query results will return additional parameter indicating if returned addresses are dedicated to video consultations * `address.visit_payment` - with this parameter in url, query results will return additional parameter indicating if visit payments are enabled * `address.commercial_type` - with this parameter in url, query results will return additional parameter indicating address commercial type * `address.insurance_support` - with this parameter in url, query results will return additional parameter indicating insurance support type of an address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility_id = "facility_id_example"; // string | ID of the Facility
$doctor_id = "doctor_id_example"; // string | ID of a doctor in a facility
$with = array(new \DocPlanner\Client\Model\AddressesScopes()); // \DocPlanner\Client\Model\AddressesScopes[] | 

try {
    $result = $apiInstance->getAddresses($facility_id, $doctor_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->getAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility_id** | **string**| ID of the Facility |
 **doctor_id** | **string**| ID of a doctor in a facility |
 **with** | [**\DocPlanner\Client\Model\AddressesScopes[]**](../Model/\DocPlanner\Client\Model\AddressesScopes.md)|  | [optional]

### Return type

[**\DocPlanner\Client\Model\Addresses**](../Model/Addresses.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.docplanner+json; charset=UTF-8, application/vnd.error+docplanner+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeAddressIntegration**
> removeAddressIntegration($facility_id, $doctor_id, $address_id)



Remove the integration mark from a single address.   After this call, Docplanner will no longer treat the address as integrated with the API client's system. The address itself is not deleted.   **Endpoint is dedicated for DocplannerPMS API clients only.**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility_id = "facility_id_example"; // string | ID of the Facility
$doctor_id = "doctor_id_example"; // string | ID of a doctor in a facility
$address_id = "address_id_example"; // string | ID of a doctor`s address in a facility

try {
    $apiInstance->removeAddressIntegration($facility_id, $doctor_id, $address_id);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->removeAddressIntegration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility_id** | **string**| ID of the Facility |
 **doctor_id** | **string**| ID of a doctor in a facility |
 **address_id** | **string**| ID of a doctor&#x60;s address in a facility |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.error+docplanner+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAddress**
> \DocPlanner\Client\Model\Address updateAddress($body, $facility_id, $doctor_id, $address_id)



Get a single address of a doctor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DocPlanner\Client\Model\UpdateAddressRequest(); // \DocPlanner\Client\Model\UpdateAddressRequest | 
$facility_id = "facility_id_example"; // string | ID of the Facility
$doctor_id = "doctor_id_example"; // string | ID of a doctor in a facility
$address_id = "address_id_example"; // string | ID of a doctor`s address in a facility

try {
    $result = $apiInstance->updateAddress($body, $facility_id, $doctor_id, $address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->updateAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DocPlanner\Client\Model\UpdateAddressRequest**](../Model/UpdateAddressRequest.md)|  |
 **facility_id** | **string**| ID of the Facility |
 **doctor_id** | **string**| ID of a doctor in a facility |
 **address_id** | **string**| ID of a doctor&#x60;s address in a facility |

### Return type

[**\DocPlanner\Client\Model\Address**](../Model/Address.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.docplanner+json; charset=UTF-8, application/vnd.error+docplanner+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAddressPaymentSettings**
> \DocPlanner\Client\Model\AddressPaymentSettings updateAddressPaymentSettings($body, $facility_id, $doctor_id, $address_id)



Replace the online payment settings of an address. The request is a full replacement of the fields returned by **getAddressPaymentSettings**; **book_now_pay_later.available** is read-only and ignored.   A response of **getAddressPaymentSettings** sent back needs values where it carries **null** for a field that is required here: a policy that was never set, and the window or the fee in the cases listed below. A window that **getAddressPaymentSettings** reported as **24** or a fee reported as **100** in place of a stored value outside the range is stored at that value when sent back, and the change is announced; without an active payment account it is refused as a change.   Values are read as sent and are not converted: a boolean or a number sent as a string, or a number with a decimal point where an integer is documented (also **24.0**), is refused.   The settings apply to bookings created after the response; the response returns the stored settings.   **How Book Now Pay Later combines with the policies.** Bookings use Book Now Pay Later only when **book_now_pay_later.enabled** is **true**, both the late-cancellation window and the no-show fee are set, **online_payments** is **true** and Docplanner offers Book Now Pay Later in the market. Then:  * patient bookings: when both policies are **optional**, the patient chooses between paying online and Book Now Pay Later; a **mandatory** policy keeps the online payment and the booking takes the window and the fee as its cancellation terms; a **book-now-pay-later** policy makes patients of that type book with Book Now Pay Later: their card is kept and charged only for a no-show or a late cancellation  * admin bookings: a booking whose policy is not **inactive** takes the window and the fee as its cancellation terms  Otherwise **optional** and **mandatory** are plain online payment.   **What can be written depends on the address:**  * an address whose schedule is managed in Docplanner's practice management software (**schedule_managed_by_docplanner** is **true**): Book Now Pay Later is decided there. **book_now_pay_later.enabled** must equal its current value. The window and the fee are required when the request changes a patient bookings policy to **book-now-pay-later**; otherwise each may be **null** only when the address has none stored, and a stored value cannot be cleared  * any other address (**schedule_managed_by_docplanner** is **false**): **book_now_pay_later.enabled** is written as sent. Turning it on needs **book_now_pay_later.available**. While it is **false** no patient bookings policy may be **book-now-pay-later**. The window and the fee are required while it is **true** or a patient bookings policy is **book-now-pay-later**; otherwise they may be **null**, which clears the stored value   Without an active Docplanner payment account for the address (**online_payments_account_active** is **false**), a request can only switch **online_payments** off. The request must still have the documented format and ranges, but its other settings are not compared with the stored ones and are not stored; the response shows the stored settings. While **online_payments** stays as it is, any changed setting is refused, naming each one. A request that changes nothing compared with the stored settings is not refused for the missing account. A patient bookings policy that changes to **book-now-pay-later** also needs **book_now_pay_later.available** and **book_now_pay_later.enabled**; a policy that is already **book-now-pay-later** can be sent again while the market offer is temporarily off.   Errors of a **400** response are keyed by the camelCase property path of the invalid field, for example **bookNowPayLater.lateCancellationWindowHours**; the messages of format and range errors are in the language of the market.   **Endpoint is dedicated for DocplannerPMS API clients only.**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DocPlanner\Client\Model\UpdateAddressPaymentSettingsRequest(); // \DocPlanner\Client\Model\UpdateAddressPaymentSettingsRequest | 
$facility_id = "facility_id_example"; // string | ID of the Facility
$doctor_id = "doctor_id_example"; // string | ID of a doctor in a facility
$address_id = "address_id_example"; // string | ID of a doctor`s address in a facility

try {
    $result = $apiInstance->updateAddressPaymentSettings($body, $facility_id, $doctor_id, $address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->updateAddressPaymentSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DocPlanner\Client\Model\UpdateAddressPaymentSettingsRequest**](../Model/UpdateAddressPaymentSettingsRequest.md)|  |
 **facility_id** | **string**| ID of the Facility |
 **doctor_id** | **string**| ID of a doctor in a facility |
 **address_id** | **string**| ID of a doctor&#x60;s address in a facility |

### Return type

[**\DocPlanner\Client\Model\AddressPaymentSettings**](../Model/AddressPaymentSettings.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.docplanner+json; charset=UTF-8, application/vnd.error+docplanner+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

