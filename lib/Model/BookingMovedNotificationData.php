<?php
/**
 * BookingMovedNotificationData
 *
 * PHP version 5
 *
 * @category Class
 * @package  DocPlanner\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Docplanner Integrations API
 *
 * Welcome to Docplanner Integrations [REST](https://en.wikipedia.org/wiki/Representational_state_transfer) API!  This API gives You the ability to build Your own application and integrate it with Docplanner services.
 *
 * OpenAPI spec version: 1.0.32
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.24
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocPlanner\Client\Model;

use \ArrayAccess;
use \DocPlanner\Client\ObjectSerializer;

/**
 * BookingMovedNotificationData Class Doc Comment
 *
 * @category Class
 * @package  DocPlanner\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BookingMovedNotificationData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BookingMovedNotification_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'facility' => '\DocPlanner\Client\Model\Facility',
'doctor' => '\DocPlanner\Client\Model\Doctor',
'address' => '\DocPlanner\Client\Model\Address',
'old_visit_booking' => '\DocPlanner\Client\Model\BookingNotification',
'new_visit_booking' => '\DocPlanner\Client\Model\BookingNotification'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'facility' => null,
'doctor' => null,
'address' => null,
'old_visit_booking' => null,
'new_visit_booking' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'facility' => 'facility',
'doctor' => 'doctor',
'address' => 'address',
'old_visit_booking' => 'old_visit_booking',
'new_visit_booking' => 'new_visit_booking'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'facility' => 'setFacility',
'doctor' => 'setDoctor',
'address' => 'setAddress',
'old_visit_booking' => 'setOldVisitBooking',
'new_visit_booking' => 'setNewVisitBooking'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'facility' => 'getFacility',
'doctor' => 'getDoctor',
'address' => 'getAddress',
'old_visit_booking' => 'getOldVisitBooking',
'new_visit_booking' => 'getNewVisitBooking'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['facility'] = isset($data['facility']) ? $data['facility'] : null;
        $this->container['doctor'] = isset($data['doctor']) ? $data['doctor'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['old_visit_booking'] = isset($data['old_visit_booking']) ? $data['old_visit_booking'] : null;
        $this->container['new_visit_booking'] = isset($data['new_visit_booking']) ? $data['new_visit_booking'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets facility
     *
     * @return \DocPlanner\Client\Model\Facility
     */
    public function getFacility()
    {
        return $this->container['facility'];
    }

    /**
     * Sets facility
     *
     * @param \DocPlanner\Client\Model\Facility $facility facility
     *
     * @return $this
     */
    public function setFacility($facility)
    {
        $this->container['facility'] = $facility;

        return $this;
    }

    /**
     * Gets doctor
     *
     * @return \DocPlanner\Client\Model\Doctor
     */
    public function getDoctor()
    {
        return $this->container['doctor'];
    }

    /**
     * Sets doctor
     *
     * @param \DocPlanner\Client\Model\Doctor $doctor doctor
     *
     * @return $this
     */
    public function setDoctor($doctor)
    {
        $this->container['doctor'] = $doctor;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \DocPlanner\Client\Model\Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \DocPlanner\Client\Model\Address $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets old_visit_booking
     *
     * @return \DocPlanner\Client\Model\BookingNotification
     */
    public function getOldVisitBooking()
    {
        return $this->container['old_visit_booking'];
    }

    /**
     * Sets old_visit_booking
     *
     * @param \DocPlanner\Client\Model\BookingNotification $old_visit_booking old_visit_booking
     *
     * @return $this
     */
    public function setOldVisitBooking($old_visit_booking)
    {
        $this->container['old_visit_booking'] = $old_visit_booking;

        return $this;
    }

    /**
     * Gets new_visit_booking
     *
     * @return \DocPlanner\Client\Model\BookingNotification
     */
    public function getNewVisitBooking()
    {
        return $this->container['new_visit_booking'];
    }

    /**
     * Sets new_visit_booking
     *
     * @param \DocPlanner\Client\Model\BookingNotification $new_visit_booking new_visit_booking
     *
     * @return $this
     */
    public function setNewVisitBooking($new_visit_booking)
    {
        $this->container['new_visit_booking'] = $new_visit_booking;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
