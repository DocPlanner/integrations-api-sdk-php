# DocPlanner\Client\AddressesApi

All URIs are relative to *https://www.{domain}/api/v3/integration*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAddress**](AddressesApi.md#getaddress) | **GET** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id} | 
[**getAddresses**](AddressesApi.md#getaddresses) | **GET** /facilities/{facility_id}/doctors/{doctor_id}/addresses | 
[**updateAddress**](AddressesApi.md#updateaddress) | **PATCH** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id} | 

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

