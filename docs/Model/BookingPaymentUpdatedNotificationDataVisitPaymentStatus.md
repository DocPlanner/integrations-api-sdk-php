# BookingPaymentUpdatedNotificationDataVisitPaymentStatus

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**online_payment_status** | **string** | &#x60;paid&#x60;: paid in full, or the full amount of a BNPL booking is reserved on the patient&#x27;s card. &#x60;partially_paid&#x60;: part of the price is paid. &#x60;waiting_for_confirmation&#x60;: a payment is being processed. &#x60;confirmed&#x60;: the patient confirmed the booking with a card and no amount has been charged, released or failed yet. A failed attempt to reserve the full amount is retried once and does not change this status. booking-payment-status-changed reports &#x60;partially_paid&#x60; as &#x60;paid&#x60; and &#x60;confirmed&#x60; as &#x60;waiting_for_confirmation&#x60;. | [optional] 
**is_bnpl_enabled** | **bool** |  | [optional] 
**no_show_fee_amount** | **string** | Always present on this notification. &#x60;null&#x60; when &#x60;is_bnpl_enabled&#x60; is false. You can ignore this field if your system does not support Book Now Pay Later. | [optional] 
**no_show_fee_status** | **string** | Always present on this notification. &#x60;null&#x60; when &#x60;is_bnpl_enabled&#x60; is false. You can ignore this field if your system does not support Book Now Pay Later. | [optional] 
**full_amount_status** | **string** | Always present on this notification. &#x60;null&#x60; when &#x60;is_bnpl_enabled&#x60; is false. You can ignore this field if your system does not support Book Now Pay Later. | [optional] 
**gross_amount** | **string** |  | [optional] 
**paid_amount** | **string** |  | [optional] 
**currency** | **string** |  | [optional] 
**synced_at** | [**\DateTime**](\DateTime.md) | When Docplanner read this payment state, with milliseconds. Of two notifications for the same booking, the one with the later &#x60;synced_at&#x60; describes a state at least as new. Use it to order &#x60;payment_changed&#x60; notifications. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

