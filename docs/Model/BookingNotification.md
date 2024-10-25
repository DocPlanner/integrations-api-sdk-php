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

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

