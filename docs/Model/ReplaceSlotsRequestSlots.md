# ReplaceSlotsRequestSlots

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_services** | [**\DocPlanner\Client\Model\ReplaceSlotsRequestAddressServices[]**](ReplaceSlotsRequestAddressServices.md) | If set to null or empty collection, it will **remove** all the slots from a given time range | [optional] 
**start** | [**\DateTime**](\DateTime.md) |  | 
**end** | [**\DateTime**](\DateTime.md) |  | 
**insurance_accepted** | **string** | Accepted insurance configuration. If **with-insurance-only** is passed, **insurance_providers** field MUST NOT be empty. If **without-insurance-only** is passed, **insurance_providers** MUST be empty | [optional] [default to 'with-and-without-insurance']
**insurance_providers** | **int[]** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

