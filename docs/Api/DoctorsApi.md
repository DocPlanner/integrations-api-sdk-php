# DocPlanner\Client\DoctorsApi

All URIs are relative to *https://www.znanylekarz.pl/api/v3/integration*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDoctor**](DoctorsApi.md#getdoctor) | **GET** /facilities/{facility_id}/doctors/{doctor_id} | 
[**getDoctors**](DoctorsApi.md#getdoctors) | **GET** /facilities/{facility_id}/doctors | 

# **getDoctor**
> \DocPlanner\Client\Model\Doctor getDoctor($facility_id, $doctor_id, $with)



Get a single doctor in a facility

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\DoctorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility_id = 56; // int | ID of the Facility
$doctor_id = 56; // int | ID of a doctor in a facility
$with = array(new \DocPlanner\Client\Model\DoctorScopes()); // \DocPlanner\Client\Model\DoctorScopes[] | 

try {
    $result = $apiInstance->getDoctor($facility_id, $doctor_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DoctorsApi->getDoctor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility_id** | **int**| ID of the Facility |
 **doctor_id** | **int**| ID of a doctor in a facility |
 **with** | [**\DocPlanner\Client\Model\DoctorScopes[]**](../Model/\DocPlanner\Client\Model\DoctorScopes.md)|  | [optional]

### Return type

[**\DocPlanner\Client\Model\Doctor**](../Model/Doctor.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.docplanner+json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDoctors**
> \DocPlanner\Client\Model\Doctors getDoctors($facility_id, $with)



Get a list of doctors in a facility

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2_client_credentials
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\DoctorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility_id = 56; // int | ID of the Facility
$with = array(new \DocPlanner\Client\Model\DoctorsScopes()); // \DocPlanner\Client\Model\DoctorsScopes[] | 

try {
    $result = $apiInstance->getDoctors($facility_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DoctorsApi->getDoctors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facility_id** | **int**| ID of the Facility |
 **with** | [**\DocPlanner\Client\Model\DoctorsScopes[]**](../Model/\DocPlanner\Client\Model\DoctorsScopes.md)|  | [optional]

### Return type

[**\DocPlanner\Client\Model\Doctors**](../Model/Doctors.md)

### Authorization

[oauth2_client_credentials](../../README.md#oauth2_client_credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.docplanner+json; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

