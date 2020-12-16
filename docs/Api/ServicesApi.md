# DocPlanner\Client\ServicesApi

All URIs are relative to *https://www.{domain}/api/v3/integration*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAddressService**](ServicesApi.md#addaddressservice) | **POST** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/services | 
[**deleteAddressService**](ServicesApi.md#deleteaddressservice) | **DELETE** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/services/{address_service_id} | 
[**getAddressService**](ServicesApi.md#getaddressservice) | **GET** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/services/{address_service_id} | 
[**getAddressServices**](ServicesApi.md#getaddressservices) | **GET** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/services | 
[**getServices**](ServicesApi.md#getservices) | **GET** /services | 
[**updateAddressService**](ServicesApi.md#updateaddressservice) | **PATCH** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/services/{address_service_id} | 

# **addAddressService**
> addAddressService($body, $facility_id, $doctor_id, $address_id)



Adds new service to an address of the doctor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DocPlanner\Client\Model\AddAddressServiceRequest(); // \DocPlanner\Client\Model\AddAddressServiceRequest | 
$facility_id = 56; // int | ID of the Facility
$doctor_id = 56; // int | ID of a doctor in a facility
$address_id = 56; // int | ID of a doctor`s address in a facility

try {
    $apiInstance->addAddressService($body, $facility_id, $doctor_id, $address_id);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->addAddressService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DocPlanner\Client\Model\AddAddressServiceRequest**](../Model/AddAddressServiceRequest.md)|  |
 **facility_id** | **int**| ID of the Facility |
 **doctor_id** | **int**| ID of a doctor in a facility |
 **address_id** | **int**| ID of a doctor&#x60;s address in a facility |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.docplanner+json; charset=utf-8, application/vnd.docplanner+json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAddressService**
> deleteAddressService($facility_id, $doctor_id, $address_id, $address_service_id)



Delete an address service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility_id = 56; // int | ID of the Facility
$doctor_id = 56; // int | ID of a doctor in a facility
$address_id = 56; // int | ID of a doctor`s address in a facility
$address_service_id = 56; // int | ID of an address service

try {
    $apiInstance->deleteAddressService($facility_id, $doctor_id, $address_id, $address_service_id);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->deleteAddressService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility_id** | **int**| ID of the Facility |
 **doctor_id** | **int**| ID of a doctor in a facility |
 **address_id** | **int**| ID of a doctor&#x60;s address in a facility |
 **address_service_id** | **int**| ID of an address service |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.docplanner+json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddressService**
> \DocPlanner\Client\Model\AddressService getAddressService($facility_id, $doctor_id, $address_id, $address_service_id)



View a specific address service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility_id = 56; // int | ID of the Facility
$doctor_id = 56; // int | ID of a doctor in a facility
$address_id = 56; // int | ID of a doctor`s address in a facility
$address_service_id = 56; // int | ID of an address service

try {
    $result = $apiInstance->getAddressService($facility_id, $doctor_id, $address_id, $address_service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->getAddressService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility_id** | **int**| ID of the Facility |
 **doctor_id** | **int**| ID of a doctor in a facility |
 **address_id** | **int**| ID of a doctor&#x60;s address in a facility |
 **address_service_id** | **int**| ID of an address service |

### Return type

[**\DocPlanner\Client\Model\AddressService**](../Model/AddressService.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.docplanner+json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddressServices**
> \DocPlanner\Client\Model\AddressServices getAddressServices($facility_id, $doctor_id, $address_id, $start)



Get a list of services for a specific address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility_id = 56; // int | ID of the Facility
$doctor_id = 56; // int | ID of a doctor in a facility
$address_id = 56; // int | ID of a doctor`s address in a facility
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Slot start date (parameter must be urlencoded before sending request)

try {
    $result = $apiInstance->getAddressServices($facility_id, $doctor_id, $address_id, $start);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->getAddressServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility_id** | **int**| ID of the Facility |
 **doctor_id** | **int**| ID of a doctor in a facility |
 **address_id** | **int**| ID of a doctor&#x60;s address in a facility |
 **start** | **\DateTime**| Slot start date (parameter must be urlencoded before sending request) | [optional]

### Return type

[**\DocPlanner\Client\Model\AddressServices**](../Model/AddressServices.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.docplanner+json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getServices**
> \DocPlanner\Client\Model\Services getServices($with)



Get a list of available services

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$with = array(new \DocPlanner\Client\Model\ServicesScopes()); // \DocPlanner\Client\Model\ServicesScopes[] | 

try {
    $result = $apiInstance->getServices($with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->getServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **with** | [**\DocPlanner\Client\Model\ServicesScopes[]**](../Model/\DocPlanner\Client\Model\ServicesScopes.md)|  | [optional]

### Return type

[**\DocPlanner\Client\Model\Services**](../Model/Services.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.docplanner+json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAddressService**
> \DocPlanner\Client\Model\AddressService updateAddressService($body, $facility_id, $doctor_id, $address_id, $address_service_id)



Update part of an address service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DocPlanner\Client\Model\UpdateAddressServiceRequest(); // \DocPlanner\Client\Model\UpdateAddressServiceRequest | 
$facility_id = 56; // int | ID of the Facility
$doctor_id = 56; // int | ID of a doctor in a facility
$address_id = 56; // int | ID of a doctor`s address in a facility
$address_service_id = 56; // int | ID of an address service

try {
    $result = $apiInstance->updateAddressService($body, $facility_id, $doctor_id, $address_id, $address_service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->updateAddressService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DocPlanner\Client\Model\UpdateAddressServiceRequest**](../Model/UpdateAddressServiceRequest.md)|  |
 **facility_id** | **int**| ID of the Facility |
 **doctor_id** | **int**| ID of a doctor in a facility |
 **address_id** | **int**| ID of a doctor&#x60;s address in a facility |
 **address_service_id** | **int**| ID of an address service |

### Return type

[**\DocPlanner\Client\Model\AddressService**](../Model/AddressService.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.docplanner+json; charset=UTF-8, application/vnd.docplanner+json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

