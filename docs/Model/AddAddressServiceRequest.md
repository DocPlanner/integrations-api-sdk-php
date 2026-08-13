# AddAddressServiceRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**service_id** | **string** | ID of a service | 
**is_price_from** | **bool** | If true, the price is the minimum price of the service | [optional] 
**price** | **float** | Service price. Maximum 2 decimal places; additional decimals are truncated. Invalid formats are rejected with 400 Bad Request | [optional] 
**description** | **string** |  | [optional] 
**is_visible** | **bool** |  | [optional] 
**default_duration** | **int** |  | [optional] 
**allowed_patients** | [**AllOfAddAddressServiceRequestAllowedPatients**](AllOfAddAddressServiceRequestAllowedPatients.md) |  | [optional] 
**custom_name** | **string** | A custom display name for the service. Cannot be an empty string. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

