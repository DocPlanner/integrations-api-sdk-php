# AddressPaymentSettings

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**online_payments** | **bool** |  | [optional] 
**schedule_managed_by_docplanner** | **bool** | Read-only. **true** when the schedule of this address is managed in Docplanner&#x27;s practice management software. It decides which write rules of **updateAddressPaymentSettings** apply | [optional] 
**online_payments_account_active** | **bool** | Read-only. **true** when the address has an active Docplanner payment account. While it is **false**, the only accepted change is switching **online_payments** off | [optional] 
**upfront_payment_policies** | [**\DocPlanner\Client\Model\AddressPaymentSettingsUpfrontPaymentPolicies**](AddressPaymentSettingsUpfrontPaymentPolicies.md) |  | [optional] 
**book_now_pay_later** | [**\DocPlanner\Client\Model\AddressPaymentSettingsBookNowPayLater**](AddressPaymentSettingsBookNowPayLater.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

