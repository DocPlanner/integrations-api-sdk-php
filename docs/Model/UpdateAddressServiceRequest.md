# UpdateAddressServiceRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_price_from** | **bool** | If true, the price is the minimum price of the service | [optional] 
**price** | **float** | Service price. Maximum 2 decimal places; additional decimals are truncated. Invalid formats are rejected with 400 Bad Request | [optional] 
**description** | **string** |  | [optional] 
**default_duration** | **int** |  | [optional] 
**is_visible** | **bool** |  | [optional] 
**allowed_patients** | [**AllOfUpdateAddressServiceRequestAllowedPatients**](AllOfUpdateAddressServiceRequestAllowedPatients.md) |  | [optional] 
**custom_name** | **string** | A custom display name for the service. Cannot be an empty string. Send null to clear the custom name. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

