# BookSlotRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_service_id** | **string** |  | 
**is_returning** | **bool** |  | [optional] 
**patient** | [**\DocPlanner\Client\Model\Patient**](Patient.md) |  | 
**duration** | **int** |  | 
**send_notifications** | **bool** | Whether we should send visit notifications | [optional] 
**label** | **string** |  | [optional] [default to 'null']
**comment** | **string** |  | [optional] [default to 'null']
**insurance_provider_id** | **string** |  | [optional] [default to 'null']
**insurance_plan_id** | **string** |  | [optional] [default to 'null']
**is_recurring** | **bool** | Whether the visit should be marked as recurrent (there will be no confirmation notification sent to the patient) | [optional] [default to false]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

