# MoveBookingRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_service_id** | **string** |  | 
**start** | [**\DateTime**](\DateTime.md) |  | [optional] 
**duration** | **int** |  | [optional] 
**address_id** | **string** |  | [optional] 
**send_notifications** | **bool** | Whether patient should get notification on moving the visit | [optional] 
**acted_by** | **string** | Who performed the action - &#x60;patient&#x60; for the patient, &#x60;facility&#x60; for the facility acting for them. Optional; when omitted the booking is recorded without a stated actor and behaves exactly as it does today. The two values belong to this field only. &#x60;booked_by&#x60; and &#x60;canceled_by&#x60; on a booking response name the channel the action arrived through. &#x60;confirmed_by&#x60; on booking confirmation accepts &#x60;user&#x60; and &#x60;admin&#x60;. | [optional] [default to 'null']

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

