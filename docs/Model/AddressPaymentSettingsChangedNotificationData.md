# AddressPaymentSettingsChangedNotificationData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**facility** | [**\DocPlanner\Client\Model\Facility**](Facility.md) |  | [optional] 
**doctor** | [**\DocPlanner\Client\Model\Doctor**](Doctor.md) |  | [optional] 
**address** | [**\DocPlanner\Client\Model\Address**](Address.md) |  | [optional] 
**source** | **string** | **saas** when the change was made in Docplanner&#x27;s practice management software, **partner** when another API client made it | [optional] 
**changed_at** | [**\DateTime**](\DateTime.md) | When Docplanner stored the change. Always in UTC with microseconds, unlike **created_at**, which is in the time zone configured for your API client | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

