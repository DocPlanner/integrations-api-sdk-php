# DocPlanner\Client\FacilitiesApi

All URIs are relative to *https://www.{domain}/api/v3/integration*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFacilities**](FacilitiesApi.md#getfacilities) | **GET** /facilities | 
[**getFacility**](FacilitiesApi.md#getfacility) | **GET** /facilities/{facility_id} | 

# **getFacilities**
> \DocPlanner\Client\Model\Facilities getFacilities()



Get a list of facilities

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth 2.0
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\FacilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getFacilities();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FacilitiesApi->getFacilities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\DocPlanner\Client\Model\Facilities**](../Model/Facilities.md)

### Authorization

[OAuth 2.0](../../README.md#OAuth 2.0)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.docplanner+json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFacility**
> \DocPlanner\Client\Model\Facility getFacility($facility_id, $with)



Get a single facility  Extensions: * `facility.doctors` - with this parameter in url, query results will return a list of all the doctors in a given facility

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth 2.0
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\FacilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility_id = "facility_id_example"; // string | ID of the Facility
$with = array(new \DocPlanner\Client\Model\FacilityScopes()); // \DocPlanner\Client\Model\FacilityScopes[] | 

try {
    $result = $apiInstance->getFacility($facility_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FacilitiesApi->getFacility: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility_id** | **string**| ID of the Facility |
 **with** | [**\DocPlanner\Client\Model\FacilityScopes[]**](../Model/\DocPlanner\Client\Model\FacilityScopes.md)|  | [optional]

### Return type

[**\DocPlanner\Client\Model\Facility**](../Model/Facility.md)

### Authorization

[OAuth 2.0](../../README.md#OAuth 2.0)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.docplanner+json; charset=UTF-8, application/vnd.error+docplanner+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

