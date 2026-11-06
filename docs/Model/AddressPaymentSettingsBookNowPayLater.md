# AddressPaymentSettingsBookNowPayLater

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**available** | **bool** | Read-only. Whether Book Now Pay Later can be used at this address: the market offers it and the address has an active Docplanner payment account. For an address whose schedule is managed in Docplanner&#x27;s practice management software, it must also be turned on there | [optional] 
**enabled** | **bool** | Whether Book Now Pay Later is turned on for the address. Bookings use it only together with the window, the fee, online payments and the market offer | [optional] 
**late_cancellation_window_hours** | **int** | A cancellation this many hours or fewer before the visit is charged the no-show fee | [optional] 
**no_show_fee_percentage** | **float** | Percentage of the visit price charged for a no-show or a late cancellation | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

