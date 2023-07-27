<?php
/**
 * UpdateOrCreateAddressInsuranceProviderRequest
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
 * UpdateOrCreateAddressInsuranceProviderRequest Class Doc Comment
 *
 * @category Class
 * @package  DocPlanner\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateOrCreateAddressInsuranceProviderRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateOrCreateAddressInsuranceProviderRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'insurance_provider_id' => 'string',
'insurance_plans' => '\DocPlanner\Client\Model\UpdateOrCreateAddressInsuranceProviderRequestInsurancePlans[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'insurance_provider_id' => null,
'insurance_plans' => null    ];

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
        'insurance_provider_id' => 'insurance_provider_id',
'insurance_plans' => 'insurance_plans'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'insurance_provider_id' => 'setInsuranceProviderId',
'insurance_plans' => 'setInsurancePlans'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'insurance_provider_id' => 'getInsuranceProviderId',
'insurance_plans' => 'getInsurancePlans'    ];

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
        $this->container['insurance_provider_id'] = isset($data['insurance_provider_id']) ? $data['insurance_provider_id'] : null;
        $this->container['insurance_plans'] = isset($data['insurance_plans']) ? $data['insurance_plans'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['insurance_provider_id'] === null) {
            $invalidProperties[] = "'insurance_provider_id' can't be null";
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
     * Gets insurance_provider_id
     *
     * @return string
     */
    public function getInsuranceProviderId()
    {
        return $this->container['insurance_provider_id'];
    }

    /**
     * Sets insurance_provider_id
     *
     * @param string $insurance_provider_id ID of an insurance provider from DP dictionary
     *
     * @return $this
     */
    public function setInsuranceProviderId($insurance_provider_id)
    {
        $this->container['insurance_provider_id'] = $insurance_provider_id;

        return $this;
    }

    /**
     * Gets insurance_plans
     *
     * @return \DocPlanner\Client\Model\UpdateOrCreateAddressInsuranceProviderRequestInsurancePlans[]
     */
    public function getInsurancePlans()
    {
        return $this->container['insurance_plans'];
    }

    /**
     * Sets insurance_plans
     *
     * @param \DocPlanner\Client\Model\UpdateOrCreateAddressInsuranceProviderRequestInsurancePlans[] $insurance_plans insurance_plans
     *
     * @return $this
     */
    public function setInsurancePlans($insurance_plans)
    {
        $this->container['insurance_plans'] = $insurance_plans;

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
