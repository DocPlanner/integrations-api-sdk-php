# Booking

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
**moving** | [**AllOfBookingMoving**](AllOfBookingMoving.md) |  | [optional] 
**patient** | [**\DocPlanner\Client\Model\BookingPatient**](BookingPatient.md) |  | [optional] 
**address_service** | [**AllOfBookingAddressService**](AllOfBookingAddressService.md) |  | [optional] 
**comment** | **string** |  | [optional] 
**presence** | **string** |  | [optional] 
**insurance** | [**AllOfBookingInsurance**](AllOfBookingInsurance.md) |  | [optional] 
**visit_payment** | **bool** |  | [optional] 
**visit_payment_status** | **string** |  | [optional] 
**videocall_url** | **string** |  | [optional] 
**payment_url** | **string** | Payment page of a booking the patient initiated, present when the patient is asked to pay online. A booking whose online payment is optional is taken to be paid at the practice, as if the patient chose it on our payment page, so it carries none unless that choice could not be saved. It is also present, in the move response and in later reads of the booking, after a move stated as **acted_by: patient** takes a confirmed, unpaid book now, pay later booking that requires payment from its free cancellation window into its late cancellation window: the patient must confirm the visit again through it, and a booking left unconfirmed past its payment deadline is canceled. Absent for any other booking. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

