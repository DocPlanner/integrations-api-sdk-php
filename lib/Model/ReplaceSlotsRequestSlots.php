<?php
/**
 * ReplaceSlotsRequestSlots
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
 * OpenAPI spec version: 1.0.29
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
 * ReplaceSlotsRequestSlots Class Doc Comment
 *
 * @category Class
 * @package  DocPlanner\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReplaceSlotsRequestSlots implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReplaceSlotsRequest_slots';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address_services' => '\DocPlanner\Client\Model\ReplaceSlotsRequestAddressServices[]',
'start' => '\DateTime',
'end' => '\DateTime',
'insurance_accepted' => 'string',
'insurance_providers' => 'int[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address_services' => null,
'start' => 'date-time',
'end' => 'date-time',
'insurance_accepted' => null,
'insurance_providers' => null    ];

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
        'address_services' => 'address_services',
'start' => 'start',
'end' => 'end',
'insurance_accepted' => 'insurance_accepted',
'insurance_providers' => 'insurance_providers'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_services' => 'setAddressServices',
'start' => 'setStart',
'end' => 'setEnd',
'insurance_accepted' => 'setInsuranceAccepted',
'insurance_providers' => 'setInsuranceProviders'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_services' => 'getAddressServices',
'start' => 'getStart',
'end' => 'getEnd',
'insurance_accepted' => 'getInsuranceAccepted',
'insurance_providers' => 'getInsuranceProviders'    ];

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

    const INSURANCE_ACCEPTED_WITH_AND_WITHOUT_INSURANCE = 'with-and-without-insurance';
const INSURANCE_ACCEPTED_WITHOUT_INSURANCE_ONLY = 'without-insurance-only';
const INSURANCE_ACCEPTED_WITH_INSURANCE_ONLY = 'with-insurance-only';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInsuranceAcceptedAllowableValues()
    {
        return [
            self::INSURANCE_ACCEPTED_WITH_AND_WITHOUT_INSURANCE,
self::INSURANCE_ACCEPTED_WITHOUT_INSURANCE_ONLY,
self::INSURANCE_ACCEPTED_WITH_INSURANCE_ONLY,        ];
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
        $this->container['address_services'] = isset($data['address_services']) ? $data['address_services'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['insurance_accepted'] = isset($data['insurance_accepted']) ? $data['insurance_accepted'] : 'with-and-without-insurance';
        $this->container['insurance_providers'] = isset($data['insurance_providers']) ? $data['insurance_providers'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getInsuranceAcceptedAllowableValues();
        if (!is_null($this->container['insurance_accepted']) && !in_array($this->container['insurance_accepted'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'insurance_accepted', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets address_services
     *
     * @return \DocPlanner\Client\Model\ReplaceSlotsRequestAddressServices[]
     */
    public function getAddressServices()
    {
        return $this->container['address_services'];
    }

    /**
     * Sets address_services
     *
     * @param \DocPlanner\Client\Model\ReplaceSlotsRequestAddressServices[] $address_services address_services
     *
     * @return $this
     */
    public function setAddressServices($address_services)
    {
        $this->container['address_services'] = $address_services;

        return $this;
    }

    /**
     * Gets start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param \DateTime $start start
     *
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param \DateTime $end end
     *
     * @return $this
     */
    public function setEnd($end)
    {
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets insurance_accepted
     *
     * @return string
     */
    public function getInsuranceAccepted()
    {
        return $this->container['insurance_accepted'];
    }

    /**
     * Sets insurance_accepted
     *
     * @param string $insurance_accepted Accepted insurance configuration. If **with-insurance-only** is passed, **insurance_providers** field MUST NOT be empty. If **without-insurance-only** is passed, **insurance_providers** MUST be empty
     *
     * @return $this
     */
    public function setInsuranceAccepted($insurance_accepted)
    {
        $allowedValues = $this->getInsuranceAcceptedAllowableValues();
        if (!is_null($insurance_accepted) && !in_array($insurance_accepted, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'insurance_accepted', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['insurance_accepted'] = $insurance_accepted;

        return $this;
    }

    /**
     * Gets insurance_providers
     *
     * @return int[]
     */
    public function getInsuranceProviders()
    {
        return $this->container['insurance_providers'];
    }

    /**
     * Sets insurance_providers
     *
     * @param int[] $insurance_providers insurance_providers
     *
     * @return $this
     */
    public function setInsuranceProviders($insurance_providers)
    {
        $this->container['insurance_providers'] = $insurance_providers;

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
