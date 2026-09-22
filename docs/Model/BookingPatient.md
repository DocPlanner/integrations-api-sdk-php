# BookingPatient

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional] 
**surname** | **string** |  | [optional] 
**email** | **string** |  | [optional] 
**phone** | **string** |  | [optional] 
**birth_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**nin** | **string** |  | [optional] 
**gender** | **string** |  | [optional] 
**is_returning** | **bool** |  | [optional] 
**insurance_number** | **string** |  | [optional] 
**profile_global_id** | **string** | Stable identifier of the marketplace patient profile behind this booking. The same patient keeps the same value across bookings, so it can be stored and used to match a booking to an existing local patient record instead of re-deriving one from the demographic fields. The key is omitted when the booking has no linked patient profile; it is never null.  Only present when the patient profile global id setting is enabled for your api client; the key is omitted entirely otherwise, in booking responses and notification payloads alike. Ask your Docplanner contact to have it switched on.  Not returned by **bookSlot**: that endpoint&#x27;s response carries no patient object, and the profile may not exist yet at the moment the booking is created. Read the value from the **slot-booked** notification for the same booking, or from **getBooking** afterwards. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

