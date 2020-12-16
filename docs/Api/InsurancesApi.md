# DocPlanner\Client\InsurancesApi

All URIs are relative to *https://www.{domain}/api/v3/integration*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAddressInsuranceProvider**](InsurancesApi.md#addaddressinsuranceprovider) | **POST** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/insurance-providers | 
[**deleteAddressInsuranceProvider**](InsurancesApi.md#deleteaddressinsuranceprovider) | **DELETE** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/insurance-providers/{insurance_provider} | 
[**getAddressInsuranceProviders**](InsurancesApi.md#getaddressinsuranceproviders) | **GET** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/insurance-providers | 
[**getInsuranceProviders**](InsurancesApi.md#getinsuranceproviders) | **GET** /insurance-providers | 

# **addAddressInsuranceProvider**
> addAddressInsuranceProvider($body, $facility_id, $doctor_id, $address_id)



Adds new insurance provider to an address of the doctor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\InsurancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DocPlanner\Client\Model\AddAddressInsuranceProviderRequest(); // \DocPlanner\Client\Model\AddAddressInsuranceProviderRequest | 
$facility_id = 56; // int | ID of the Facility
$doctor_id = 56; // int | ID of a doctor in a facility
$address_id = 56; // int | ID of a doctor`s address in a facility

try {
    $apiInstance->addAddressInsuranceProvider($body, $facility_id, $doctor_id, $address_id);
} catch (Exception $e) {
    echo 'Exception when calling InsurancesApi->addAddressInsuranceProvider: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DocPlanner\Client\Model\AddAddressInsuranceProviderRequest**](../Model/AddAddressInsuranceProviderRequest.md)|  |
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

# **deleteAddressInsuranceProvider**
> deleteAddressInsuranceProvider($facility_id, $doctor_id, $address_id, $insurance_provider)



Delete an insurance provider from doctor’s address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\InsurancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility_id = 56; // int | ID of the Facility
$doctor_id = 56; // int | ID of a doctor in a facility
$address_id = 56; // int | ID of a doctor`s address in a facility
$insurance_provider = 56; // int | ID of an insurance provider from DP dictionary

try {
    $apiInstance->deleteAddressInsuranceProvider($facility_id, $doctor_id, $address_id, $insurance_provider);
} catch (Exception $e) {
    echo 'Exception when calling InsurancesApi->deleteAddressInsuranceProvider: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility_id** | **int**| ID of the Facility |
 **doctor_id** | **int**| ID of a doctor in a facility |
 **address_id** | **int**| ID of a doctor&#x60;s address in a facility |
 **insurance_provider** | **int**| ID of an insurance provider from DP dictionary |

### Return type

void (empty response body)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.docplanner+json; charset=utf-8, application/vnd.docplanner+json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddressInsuranceProviders**
> \DocPlanner\Client\Model\InsuranceProviders getAddressInsuranceProviders($facility_id, $doctor_id, $address_id)



Get a list of insurance providers for a specific address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\InsurancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility_id = 56; // int | ID of the Facility
$doctor_id = 56; // int | ID of a doctor in a facility
$address_id = 56; // int | ID of a doctor`s address in a facility

try {
    $result = $apiInstance->getAddressInsuranceProviders($facility_id, $doctor_id, $address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsurancesApi->getAddressInsuranceProviders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility_id** | **int**| ID of the Facility |
 **doctor_id** | **int**| ID of a doctor in a facility |
 **address_id** | **int**| ID of a doctor&#x60;s address in a facility |

### Return type

[**\DocPlanner\Client\Model\InsuranceProviders**](../Model/InsuranceProviders.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.docplanner+json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInsuranceProviders**
> \DocPlanner\Client\Model\InsuranceProviders getInsuranceProviders()



Get a list of available insurance providers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\InsurancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getInsuranceProviders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsurancesApi->getInsuranceProviders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\DocPlanner\Client\Model\InsuranceProviders**](../Model/InsuranceProviders.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.docplanner+json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

