# BookingNotification

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**status** | **string** |  | [optional] 
**start_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**end_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**duration** | **int** |  | [optional] 
**booked_by** | **string** |  | [optional] 
**canceled_by** | **string** |  | [optional] 
**booked_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**canceled_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**address_service** | [**AllOfBookingNotificationAddressService**](AllOfBookingNotificationAddressService.md) |  | [optional] 
**patient** | [**\DocPlanner\Client\Model\Patient**](Patient.md) |  | [optional] 
**signature** | **string** |  | [optional] 
**comment** | **string** |  | [optional] 
**insurance** | [**AllOfBookingNotificationInsurance**](AllOfBookingNotificationInsurance.md) |  | [optional] 
**visit_payment** | **bool** |  | [optional] 
**videocall_url** | **string** |  | [optional] 
**cancellation_reason** | **string** | Set when Docplanner canceled the booking because the patient did not pay. &#x60;unpaid&#x60;: the patient did not pay by the booking&#x27;s payment deadline. The booking reports &#x60;canceled_by: user&#x60; in that case too, so use this field to tell it from a cancellation by the patient. It is never the &#x60;reason&#x60; you send when you cancel a booking. Absent for any other booking. More values may be added: treat a value you do not know as no reason given. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

