# AddCalendarBreakRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**since** | [**\DateTime**](\DateTime.md) |  | 
**till** | [**\DateTime**](\DateTime.md) |  | 
**description** | **string** |  | [optional] 
**apply_on_coupled_addresses** | **bool** | When true, the same break is also created on the coupled addresses of this doctor in this facility - the online-only ones for an offline address and the other way round. Those breaks are moved and removed together with this one. The response describes only the break created on the requested address. | [optional] [default to false]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

