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
**payment_url** | **string** | Payment page of the booking, present when the patient is asked to pay online: on a booking the patient initiated, and on a booking whose **no_show_protection** applies, while the payment is owed. A booking whose online payment is optional is taken to be paid at the practice, as if the patient chose it on our payment page. It still carries the link until the visit starts, so the patient can choose to pay online instead, unless the patient later chooses the practice on our payment page. It is also present, in the move response and in later reads of the booking, after a move stated as **acted_by: patient** takes a confirmed, unpaid book now, pay later booking that requires payment from its free cancellation window into its late cancellation window: the patient must confirm the visit again through it, and a booking left unconfirmed past its payment deadline is canceled. Absent for any other booking. | [optional] 
**payment_deadline** | [**\DateTime**](\DateTime.md) | When the online payment of the booking is due, for every booking Docplanner cancels when it is not paid in time: a booking the patient or the doctor made, a booking you made stated as &#x60;acted_by: patient&#x60; whose payment is required, and a booking you made whose &#x60;no_show_protection&#x60; applies. Present while the payment is still open, also when &#x60;payment_url&#x60; is not, for example while the patient&#x27;s payment is being processed. A booking not paid by then can be canceled for non-payment: it then reports &#x60;cancellation_reason: unpaid&#x60;. The deadline can change, for example when the booking is moved, so read the booking again for the current one. Absent once the booking is paid or canceled, when an insurer pays for the visit, for a booking without an open payment, and in the booking of a notification: &#x60;booking-payment-updated&#x60; carries it in &#x60;visit_payment_status&#x60;. | [optional] 
**cancellation_reason** | **string** | Set when Docplanner canceled the booking because the patient did not pay. &#x60;unpaid&#x60;: the patient did not pay by the booking&#x27;s payment deadline. The booking reports &#x60;canceled_by: user&#x60; in that case too, so use this field to tell it from a cancellation by the patient. It is never the &#x60;reason&#x60; you send when you cancel a booking. Absent for any other booking. More values may be added: treat a value you do not know as no reason given. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

