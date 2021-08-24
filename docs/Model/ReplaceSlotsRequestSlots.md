# ReplaceSlotsRequestSlots

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_services** | [**\DocPlanner\Client\Model\ReplaceSlotsRequestAddressServices[]**](ReplaceSlotsRequestAddressServices.md) |  | [optional] 
**start** | [**\DateTime**](\DateTime.md) |  | [optional] 
**end** | [**\DateTime**](\DateTime.md) |  | [optional] 
**insurance_accepted** | **string** | Accepted insurance configuration. If **with-insurance-only** is passed, **insurance_providers** field MUST NOT be empty. If **without-insurance-only** is passed, **insurance_providers** MUST be empty | [optional] [default to 'with-and-without-insurance']
**insurance_providers** | **int[]** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

