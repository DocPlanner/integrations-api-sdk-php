# PaymentTransactionNotification

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**identifier** | **string** | The identifier of the payment the entry describes. **Not unique within a notification**: identify an entry by &#x60;identifier&#x60; and &#x60;type&#x60; together, because one payment can produce both a &#x60;*.frozen&#x60; entry and its final entry with the same identifier. If you store the entries, use the pair as the key. | [optional] 
**type** | **string** |  | [optional] 
**amount** | **string** | Signed. **refund** and **refund_failed** entries are negative; every other type is zero or positive. | [optional] 
**currency** | **string** |  | [optional] 
**occurred_at** | [**\DateTime**](\DateTime.md) | When the payment last changed, not when the state described by &#x60;type&#x60; was reached. A &#x60;*.frozen&#x60; entry and the final entry of the same payment therefore have the same value. Do not use it to order the entries into a history. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

