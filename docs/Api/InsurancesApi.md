# DocPlanner\Client\InsurancesApi

All URIs are relative to *https://www.{domain}/api/v3/integration*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAddressInsuranceProvider**](InsurancesApi.md#addaddressinsuranceprovider) | **POST** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/insurance-providers | 
[**deleteAddressInsuranceProvider**](InsurancesApi.md#deleteaddressinsuranceprovider) | **DELETE** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/insurance-providers/{insurance_provider_id} | 
[**getAddressInsuranceProviders**](InsurancesApi.md#getaddressinsuranceproviders) | **GET** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/insurance-providers | 
[**getInsurancePlans**](InsurancesApi.md#getinsuranceplans) | **GET** /insurance-providers/{insurance_provider_id}/plans | 
[**getInsuranceProviders**](InsurancesApi.md#getinsuranceproviders) | **GET** /insurance-providers | 
[**updateOrCreateAddressInsuranceProvider**](InsurancesApi.md#updateorcreateaddressinsuranceprovider) | **PUT** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/insurance-providers | 

# **addAddressInsuranceProvider**
> addAddressInsuranceProvider($body, $facility_id, $doctor_id, $address_id)



Adds new insurance provider to an address of the doctor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\InsurancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DocPlanner\Client\Model\AddAddressInsuranceProviderRequest(); // \DocPlanner\Client\Model\AddAddressInsuranceProviderRequest | 
$facility_id = "facility_id_example"; // string | ID of the Facility
$doctor_id = "doctor_id_example"; // string | ID of a doctor in a facility
$address_id = "address_id_example"; // string | ID of a doctor`s address in a facility

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

# **deleteAddressInsuranceProvider**
> deleteAddressInsuranceProvider($facility_id, $doctor_id, $address_id, $insurance_provider_id)



Delete an insurance provider from doctor’s address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\InsurancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility_id = "facility_id_example"; // string | ID of the Facility
$doctor_id = "doctor_id_example"; // string | ID of a doctor in a facility
$address_id = "address_id_example"; // string | ID of a doctor`s address in a facility
$insurance_provider_id = "insurance_provider_id_example"; // string | ID of an insurance provider from DP dictionary

try {
    $apiInstance->deleteAddressInsuranceProvider($facility_id, $doctor_id, $address_id, $insurance_provider_id);
} catch (Exception $e) {
    echo 'Exception when calling InsurancesApi->deleteAddressInsuranceProvider: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility_id** | **string**| ID of the Facility |
 **doctor_id** | **string**| ID of a doctor in a facility |
 **address_id** | **string**| ID of a doctor&#x60;s address in a facility |
 **insurance_provider_id** | **string**| ID of an insurance provider from DP dictionary |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.error+docplanner+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddressInsuranceProviders**
> \DocPlanner\Client\Model\AddressInsuranceProviders getAddressInsuranceProviders($facility_id, $doctor_id, $address_id)



Get a list of insurance providers for a specific address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\InsurancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility_id = "facility_id_example"; // string | ID of the Facility
$doctor_id = "doctor_id_example"; // string | ID of a doctor in a facility
$address_id = "address_id_example"; // string | ID of a doctor`s address in a facility

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
 **facility_id** | **string**| ID of the Facility |
 **doctor_id** | **string**| ID of a doctor in a facility |
 **address_id** | **string**| ID of a doctor&#x60;s address in a facility |

### Return type

[**\DocPlanner\Client\Model\AddressInsuranceProviders**](../Model/AddressInsuranceProviders.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.docplanner+json; charset=UTF-8, application/vnd.error+docplanner+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInsurancePlans**
> \DocPlanner\Client\Model\InsurancePlans getInsurancePlans($insurance_provider_id)



Get a list of available insurance plans for a given insurance provider

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\InsurancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$insurance_provider_id = "insurance_provider_id_example"; // string | ID of an insurance provider from DP dictionary

try {
    $result = $apiInstance->getInsurancePlans($insurance_provider_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InsurancesApi->getInsurancePlans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **insurance_provider_id** | **string**| ID of an insurance provider from DP dictionary |

### Return type

[**\DocPlanner\Client\Model\InsurancePlans**](../Model/InsurancePlans.md)

### Authorization

[oauth2](../../README.md#oauth2)

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

// Configure OAuth2 access token for authorization: oauth2
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

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.docplanner+json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrCreateAddressInsuranceProvider**
> updateOrCreateAddressInsuranceProvider($body, $facility_id, $doctor_id, $address_id)



Updates or creates insurance provider for a given doctor address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\InsurancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DocPlanner\Client\Model\UpdateOrCreateAddressInsuranceProviderRequest(); // \DocPlanner\Client\Model\UpdateOrCreateAddressInsuranceProviderRequest | 
$facility_id = "facility_id_example"; // string | ID of the Facility
$doctor_id = "doctor_id_example"; // string | ID of a doctor in a facility
$address_id = "address_id_example"; // string | ID of a doctor`s address in a facility

try {
    $apiInstance->updateOrCreateAddressInsuranceProvider($body, $facility_id, $doctor_id, $address_id);
} catch (Exception $e) {
    echo 'Exception when calling InsurancesApi->updateOrCreateAddressInsuranceProvider: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DocPlanner\Client\Model\UpdateOrCreateAddressInsuranceProviderRequest**](../Model/UpdateOrCreateAddressInsuranceProviderRequest.md)|  |
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

