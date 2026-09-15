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
**acted_by** | **string** | Who performed the action - &#x60;patient&#x60; for the patient, &#x60;facility&#x60; for the facility acting for them. Optional; when omitted the booking is recorded without a stated actor and behaves exactly as it does today. The two values belong to this field only. &#x60;booked_by&#x60; and &#x60;canceled_by&#x60; on a booking response name the channel the action arrived through. &#x60;confirmed_by&#x60; on booking confirmation accepts &#x60;user&#x60; and &#x60;admin&#x60;. | [optional] [default to 'null']

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

