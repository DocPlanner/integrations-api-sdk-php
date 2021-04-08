<?php
/**
 * BookSlotRequest
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
 * OpenAPI spec version: 1.0.6
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
 * BookSlotRequest Class Doc Comment
 *
 * @category Class
 * @package  DocPlanner\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BookSlotRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BookSlotRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address_service_id' => 'string',
'is_returning' => 'bool',
'patient' => '\DocPlanner\Client\Model\Patient',
'duration' => 'int',
'send_notifications' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address_service_id' => null,
'is_returning' => null,
'patient' => null,
'duration' => null,
'send_notifications' => null    ];

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
        'address_service_id' => 'address_service_id',
'is_returning' => 'is_returning',
'patient' => 'patient',
'duration' => 'duration',
'send_notifications' => 'send_notifications'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_service_id' => 'setAddressServiceId',
'is_returning' => 'setIsReturning',
'patient' => 'setPatient',
'duration' => 'setDuration',
'send_notifications' => 'setSendNotifications'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_service_id' => 'getAddressServiceId',
'is_returning' => 'getIsReturning',
'patient' => 'getPatient',
'duration' => 'getDuration',
'send_notifications' => 'getSendNotifications'    ];

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
        $this->container['address_service_id'] = isset($data['address_service_id']) ? $data['address_service_id'] : null;
        $this->container['is_returning'] = isset($data['is_returning']) ? $data['is_returning'] : null;
        $this->container['patient'] = isset($data['patient']) ? $data['patient'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['send_notifications'] = isset($data['send_notifications']) ? $data['send_notifications'] : true;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['address_service_id'] === null) {
            $invalidProperties[] = "'address_service_id' can't be null";
        }
        if ($this->container['patient'] === null) {
            $invalidProperties[] = "'patient' can't be null";
        }
        if ($this->container['duration'] === null) {
            $invalidProperties[] = "'duration' can't be null";
        }
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
     * Gets address_service_id
     *
     * @return string
     */
    public function getAddressServiceId()
    {
        return $this->container['address_service_id'];
    }

    /**
     * Sets address_service_id
     *
     * @param string $address_service_id address_service_id
     *
     * @return $this
     */
    public function setAddressServiceId($address_service_id)
    {
        $this->container['address_service_id'] = $address_service_id;

        return $this;
    }

    /**
     * Gets is_returning
     *
     * @return bool
     */
    public function getIsReturning()
    {
        return $this->container['is_returning'];
    }

    /**
     * Sets is_returning
     *
     * @param bool $is_returning is_returning
     *
     * @return $this
     */
    public function setIsReturning($is_returning)
    {
        $this->container['is_returning'] = $is_returning;

        return $this;
    }

    /**
     * Gets patient
     *
     * @return \DocPlanner\Client\Model\Patient
     */
    public function getPatient()
    {
        return $this->container['patient'];
    }

    /**
     * Sets patient
     *
     * @param \DocPlanner\Client\Model\Patient $patient patient
     *
     * @return $this
     */
    public function setPatient($patient)
    {
        $this->container['patient'] = $patient;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets send_notifications
     *
     * @return bool
     */
    public function getSendNotifications()
    {
        return $this->container['send_notifications'];
    }

    /**
     * Sets send_notifications
     *
     * @param bool $send_notifications Whether we should send visit notificatications
     *
     * @return $this
     */
    public function setSendNotifications($send_notifications)
    {
        $this->container['send_notifications'] = $send_notifications;

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
