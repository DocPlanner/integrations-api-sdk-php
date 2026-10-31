# BookingPaymentUpdatedNotificationData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**facility** | [**\DocPlanner\Client\Model\Facility**](Facility.md) |  | [optional] 
**doctor** | [**\DocPlanner\Client\Model\Doctor**](Doctor.md) |  | [optional] 
**address** | [**\DocPlanner\Client\Model\Address**](Address.md) |  | [optional] 
**visit_booking** | [**\DocPlanner\Client\Model\BookingNotification**](BookingNotification.md) |  | [optional] 
**trigger** | **string** | Why this notification was sent. &#x60;resync&#x60;: Docplanner re-sent the current state; always apply it. &#x60;payment_changed&#x60;: the payment changed; apply it only if its &#x60;synced_at&#x60; is later than that of the last notification you applied for the booking. | [optional] 
**visit_payment_status** | [**\DocPlanner\Client\Model\BookingPaymentUpdatedNotificationDataVisitPaymentStatus**](BookingPaymentUpdatedNotificationDataVisitPaymentStatus.md) |  | [optional] 
**transactions** | [**\DocPlanner\Client\Model\PaymentTransactionNotification[]**](PaymentTransactionNotification.md) | The payment operations of the booking as they stand now. It is not a history, and entries are not ordered by time. Identify each entry by &#x60;identifier&#x60; and &#x60;type&#x60; together, never by &#x60;identifier&#x60; alone: one payment can produce several entries with the same &#x60;identifier&#x60;, for example a &#x60;*.frozen&#x60; entry and its final &#x60;*.captured&#x60;, &#x60;*.released&#x60; or &#x60;*.collection&#x60; entry. If you store the entries, use the pair as the key, or the second entry overwrites the first. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

