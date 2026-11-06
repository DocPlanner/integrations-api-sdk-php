# UpdateAddressPaymentSettingsRequestBookNowPayLater

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | Whether Book Now Pay Later is turned on. For an address whose schedule is managed in Docplanner&#x27;s practice management software it must equal the current value | 
**late_cancellation_window_hours** | **int** | Required while **enabled** is **true** or a patient bookings policy is **book-now-pay-later**; otherwise **null** or omitted clears the stored value. For an address whose schedule is managed in Docplanner&#x27;s practice management software it is required only when the request changes a patient bookings policy to **book-now-pay-later**, and **null** is accepted only when no value is stored, leaving it unset | [optional] 
**no_show_fee_percentage** | **float** | At most 2 decimal places. Required and nullable in the same cases as **late_cancellation_window_hours** | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

