## Requirements

PHP >= 5.5

Guzzle/guzzle >= 6.2

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), run `composer require docplanner/integrations-api-sdk-php`.

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/DocPlanner/Client/vendor/autoload.php');
```
## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
//Get OAuth2 access token
$authorization = new DocPlanner\Client\Authorization('AUTHORIZATION_URL');
$accessToken = $authorization->getAccessToken('YOUR_CLIENT_ID', 'YOUR_CLIENT_SECRET');

// Configure access token for authorization 
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken($accessToken);

$apiInstance = new DocPlanner\Client\Api\DoctorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility_id = 56; // int | ID of the Facility
$with = array(\DocPlanner\Client\Model\DoctorsScopes::SPECIALIZATIONS); // string[] | 

try {
    $result = $apiInstance->getDoctors($facility_id, $with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DoctorsApi->getDoctors: ', $e->getMessage(), PHP_EOL;
}

// Configure access token for authorization 
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken($accessToken);

$apiInstance = new DocPlanner\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$facility_id = 56; // int | ID of the Facility
$doctor_id = 56; // int | ID of a doctor in a facility

try {
    $result = $apiInstance->getAddresses($facility_id, $doctor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->getAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Authorization

To get access to API you need to make request to `https://www.{domain}/oauth/v2/token` for access token using your client credentials (`client_id` and `client_secret`).
Then it could be injected to `Configuration` which is used to instantiate API clients.
Whole authorization process is based on OAuth2 protocol with `grant_type = client_credentials` and `scope = integration`.
Obtained token is valid for the next 24h, so it is good practice to cache it for that period.

###Example
```php
//Get OAuth2 access token
$authorization = new DocPlanner\Client\Authorization('AUTHORIZATION_URL');
$accessToken = $authorization->getAccessToken('YOUR_CLIENT_ID', 'YOUR_CLIENT_SECRET');

// Configure access token for authorization 
$config = DocPlanner\Client\Configuration::getDefaultConfiguration()->setAccessToken($accessToken);

$apiInstance = new DocPlanner\Client\Api\AddressesApi(null, $config);
```


## Documentation for API Endpoints

All URIs are relative to `https://www.{domain}/api/v3/integration`

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AddressesApi* | [**getAddress**](docs/Api/AddressesApi.md#getaddress) | **GET** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id} | 
*AddressesApi* | [**getAddresses**](docs/Api/AddressesApi.md#getaddresses) | **GET** /facilities/{facility_id}/doctors/{doctor_id}/addresses | 
*BookingsApi* | [**cancelBooking**](docs/Api/BookingsApi.md#cancelbooking) | **DELETE** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/bookings/{booking_id} | 
*BookingsApi* | [**getBooking**](docs/Api/BookingsApi.md#getbooking) | **GET** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/bookings/{booking_id} | 
*BookingsApi* | [**getBookings**](docs/Api/BookingsApi.md#getbookings) | **GET** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/bookings | 
*BookingsApi* | [**moveBooking**](docs/Api/BookingsApi.md#movebooking) | **POST** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/bookings/{booking_id}/move | 
*BookingsApi* | [**requestOpinion**](docs/Api/BookingsApi.md#requestopinion) | **PUT** /facilities/{facility_id}/doctors/{doctor_id}/opinion-request | 
*CalendarBreaksApi* | [**addCalendarBreak**](docs/Api/CalendarBreaksApi.md#addcalendarbreak) | **POST** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/breaks | 
*CalendarBreaksApi* | [**deleteCalendarBreak**](docs/Api/CalendarBreaksApi.md#deletecalendarbreak) | **DELETE** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/breaks/{break_id} | 
*CalendarBreaksApi* | [**getCalendarBreak**](docs/Api/CalendarBreaksApi.md#getcalendarbreak) | **GET** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/breaks/{break_id} | 
*CalendarBreaksApi* | [**getCalendarBreaks**](docs/Api/CalendarBreaksApi.md#getcalendarbreaks) | **GET** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/breaks | 
*DoctorsApi* | [**getDoctor**](docs/Api/DoctorsApi.md#getdoctor) | **GET** /facilities/{facility_id}/doctors/{doctor_id} | 
*DoctorsApi* | [**getDoctors**](docs/Api/DoctorsApi.md#getdoctors) | **GET** /facilities/{facility_id}/doctors | 
*FacilitiesApi* | [**getFacilities**](docs/Api/FacilitiesApi.md#getfacilities) | **GET** /facilities | 
*FacilitiesApi* | [**getFacility**](docs/Api/FacilitiesApi.md#getfacility) | **GET** /facilities/{facility_id} | 
*InsurancesApi* | [**addAddressInsuranceProvider**](docs/Api/InsurancesApi.md#addaddressinsuranceprovider) | **POST** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/insurance-providers | 
*InsurancesApi* | [**deleteAddressInsuranceProvider**](docs/Api/InsurancesApi.md#deleteaddressinsuranceprovider) | **DELETE** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/insurance-providers/{insurance_provider} | 
*InsurancesApi* | [**getAddressInsuranceProviders**](docs/Api/InsurancesApi.md#getaddressinsuranceproviders) | **GET** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/insurance-providers | 
*InsurancesApi* | [**getInsuranceProviders**](docs/Api/InsurancesApi.md#getinsuranceproviders) | **GET** /insurance-providers | 
*PatientPresenceApi* | [**markPatientAbsence**](docs/Api/PatientPresenceApi.md#markpatientabsence) | **DELETE** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/bookings/{booking_id}/presence/patient | 
*PatientPresenceApi* | [**markPatientPresence**](docs/Api/PatientPresenceApi.md#markpatientpresence) | **POST** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/bookings/{booking_id}/presence/patient | 
*ServicesApi* | [**addAddressService**](docs/Api/ServicesApi.md#addaddressservice) | **POST** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/services | 
*ServicesApi* | [**deleteAddressService**](docs/Api/ServicesApi.md#deleteaddressservice) | **DELETE** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/services/{address_service_id} | 
*ServicesApi* | [**getAddressService**](docs/Api/ServicesApi.md#getaddressservice) | **GET** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/services/{address_service_id} | 
*ServicesApi* | [**getAddressServices**](docs/Api/ServicesApi.md#getaddressservices) | **GET** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/services | 
*ServicesApi* | [**getServices**](docs/Api/ServicesApi.md#getservices) | **GET** /services | 
*ServicesApi* | [**updateAddressService**](docs/Api/ServicesApi.md#updateaddressservice) | **PATCH** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/services/{address_service_id} | 
*SlotsApi* | [**bookSlot**](docs/Api/SlotsApi.md#bookslot) | **POST** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/slots/{start}/book | 
*SlotsApi* | [**deleteSlots**](docs/Api/SlotsApi.md#deleteslots) | **DELETE** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/slots/{date} | 
*SlotsApi* | [**getSlots**](docs/Api/SlotsApi.md#getslots) | **GET** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/slots | 
*SlotsApi* | [**replaceSlots**](docs/Api/SlotsApi.md#replaceslots) | **PUT** /facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/slots | 

## Documentation For Models

 - [AddAddressInsuranceProviderRequest](docs/Model/AddAddressInsuranceProviderRequest.md)
 - [AddAddressServiceRequest](docs/Model/AddAddressServiceRequest.md)
 - [AddCalendarBreakRequest](docs/Model/AddCalendarBreakRequest.md)
 - [Address](docs/Model/Address.md)
 - [AddressBookingExtraFields](docs/Model/AddressBookingExtraFields.md)
 - [AddressScopes](docs/Model/AddressScopes.md)
 - [AddressService](docs/Model/AddressService.md)
 - [AddressServices](docs/Model/AddressServices.md)
 - [Addresses](docs/Model/Addresses.md)
 - [AddressesScopes](docs/Model/AddressesScopes.md)
 - [BookSlotRequest](docs/Model/BookSlotRequest.md)
 - [Booking](docs/Model/Booking.md)
 - [BookingScopes](docs/Model/BookingScopes.md)
 - [Bookings](docs/Model/Bookings.md)
 - [BookingsScopes](docs/Model/BookingsScopes.md)
 - [CalendarBreak](docs/Model/CalendarBreak.md)
 - [CalendarBreaks](docs/Model/CalendarBreaks.md)
 - [Doctor](docs/Model/Doctor.md)
 - [DoctorScopes](docs/Model/DoctorScopes.md)
 - [Doctors](docs/Model/Doctors.md)
 - [DoctorsScopes](docs/Model/DoctorsScopes.md)
 - [Error](docs/Model/Error.md)
 - [Facilities](docs/Model/Facilities.md)
 - [Facility](docs/Model/Facility.md)
 - [FacilityScopes](docs/Model/FacilityScopes.md)
 - [InsuranceProvider](docs/Model/InsuranceProvider.md)
 - [InsuranceProviders](docs/Model/InsuranceProviders.md)
 - [MoveBookingRequest](docs/Model/MoveBookingRequest.md)
 - [OpinionRequest](docs/Model/OpinionRequest.md)
 - [Patient](docs/Model/Patient.md)
 - [ReplaceSlotsRequest](docs/Model/ReplaceSlotsRequest.md)
 - [ReplaceSlotsRequestAddressServices](docs/Model/ReplaceSlotsRequestAddressServices.md)
 - [ReplaceSlotsRequestSlots](docs/Model/ReplaceSlotsRequestSlots.md)
 - [Service](docs/Model/Service.md)
 - [Services](docs/Model/Services.md)
 - [ServicesScopes](docs/Model/ServicesScopes.md)
 - [Slot](docs/Model/Slot.md)
 - [Slots](docs/Model/Slots.md)
 - [SlotsScopes](docs/Model/SlotsScopes.md)
 - [Specialization](docs/Model/Specialization.md)
 - [Specializations](docs/Model/Specializations.md)
 - [UpdateAddressServiceRequest](docs/Model/UpdateAddressServiceRequest.md)
