# DocPlanner\Client\AddressesApi

All URIs are relative to *https://www.{domain}/api/v3/integration*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAddress**](AddressesApi.md#getaddress) | **GET** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id} | 
[**getAddresses**](AddressesApi.md#getaddresses) | **GET** /facilities/{facility_id}/doctors/{doctor_id}/addresses | 

# **getAddress**
> \DocPlanner\Client\Model\Address getAddress($facility_id, $doctor_id, $address_id, $with)



Get a single address of a doctor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility_id = 56; // int | ID of the Facility
$doctor_id = 56; // int | ID of a doctor in a facility
$address_id = 56; // int | ID of a doctor`s address in a facility
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
 **facility_id** | **int**| ID of the Facility |
 **doctor_id** | **int**| ID of a doctor in a facility |
 **address_id** | **int**| ID of a doctor&#x60;s address in a facility |
 **with** | [**\DocPlanner\Client\Model\AddressesScopes[]**](../Model/\DocPlanner\Client\Model\AddressesScopes.md)|  | [optional]

### Return type

[**\DocPlanner\Client\Model\Address**](../Model/Address.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.docplanner+json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddresses**
> \DocPlanner\Client\Model\Addresses getAddresses($facility_id, $doctor_id, $with)



Get a list of addresses of a doctor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility_id = 56; // int | ID of the Facility
$doctor_id = 56; // int | ID of a doctor in a facility
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
 **facility_id** | **int**| ID of the Facility |
 **doctor_id** | **int**| ID of a doctor in a facility |
 **with** | [**\DocPlanner\Client\Model\AddressesScopes[]**](../Model/\DocPlanner\Client\Model\AddressesScopes.md)|  | [optional]

### Return type

[**\DocPlanner\Client\Model\Addresses**](../Model/Addresses.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.docplanner+json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

