# DocPlanner\Client\DoctorsApi

All URIs are relative to *https://www.{domain}/api/v3/integration*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDoctor**](DoctorsApi.md#getdoctor) | **GET** /facilities/{facility_id}/doctors/{doctor_id} | 
[**getDoctors**](DoctorsApi.md#getdoctors) | **GET** /facilities/{facility_id}/doctors | 

# **getDoctor**
> \DocPlanner\Client\Model\Doctor getDoctor($facility_id, $doctor_id, $with)



Get a single doctor in a facility  Extensions: * `doctor.addresses` - with this parameter in url, query results will return a list of all the doctor addresses in a given facility * `doctor.license_numbers` - with this parameter in url, query results will contain license numbers of doctors * `address.booking_extra_fields` - with this parameter in url, query results will return required parameters requested from patient in the booking flow * `address.online_only` - with this parameter in url, query results will return additional parameter indicating if an address is dedicated to video consultations * `address.visit_payment` - with this parameter in url, query results will return additional parameter indicating when visit payments are enabled

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth 2.0
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\DoctorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility_id = "facility_id_example"; // string | ID of the Facility
$doctor_id = "doctor_id_example"; // string | ID of a doctor in a facility
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
 **facility_id** | **string**| ID of the Facility |
 **doctor_id** | **string**| ID of a doctor in a facility |
 **with** | [**\DocPlanner\Client\Model\DoctorScopes[]**](../Model/\DocPlanner\Client\Model\DoctorScopes.md)|  | [optional]

### Return type

[**\DocPlanner\Client\Model\Doctor**](../Model/Doctor.md)

### Authorization

[OAuth 2.0](../../README.md#OAuth 2.0)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.docplanner+json; charset=UTF-8, application/vnd.error+docplanner+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDoctors**
> \DocPlanner\Client\Model\Doctors getDoctors($facility_id, $with)



Get a list of doctors in a facility  Extensions: * `doctor.specializations` - with this parameter in url, query results will contain specialization of doctors * `doctor.license_numbers` - with this parameter in url, query results will contain license numbers of doctors

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth 2.0
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DocPlanner\Client\Api\DoctorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility_id = "facility_id_example"; // string | ID of the Facility
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
 **facility_id** | **string**| ID of the Facility |
 **with** | [**\DocPlanner\Client\Model\DoctorsScopes[]**](../Model/\DocPlanner\Client\Model\DoctorsScopes.md)|  | [optional]

### Return type

[**\DocPlanner\Client\Model\Doctors**](../Model/Doctors.md)

### Authorization

[OAuth 2.0](../../README.md#OAuth 2.0)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.docplanner+json; charset=UTF-8, application/vnd.error+docplanner+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

