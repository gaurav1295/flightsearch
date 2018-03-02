<?php
/**
 * RestrictedRate
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Amadeus Travel Innovation Sandbox
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * RestrictedRate Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RestrictedRate implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RestrictedRate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'rate_code' => 'string',
        'rate_name' => 'string',
        'restrictions' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'rate_code' => null,
        'rate_name' => null,
        'restrictions' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'rate_code' => 'rate_code',
        'rate_name' => 'rate_name',
        'restrictions' => 'restrictions'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'rate_code' => 'setRateCode',
        'rate_name' => 'setRateName',
        'restrictions' => 'setRestrictions'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'rate_code' => 'getRateCode',
        'rate_name' => 'getRateName',
        'restrictions' => 'getRestrictions'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['rate_code'] = isset($data['rate_code']) ? $data['rate_code'] : null;
        $this->container['rate_name'] = isset($data['rate_name']) ? $data['rate_name'] : null;
        $this->container['restrictions'] = isset($data['restrictions']) ? $data['restrictions'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['rate_code'] === null) {
            $invalid_properties[] = "'rate_code' can't be null";
        }
        if ($this->container['rate_name'] === null) {
            $invalid_properties[] = "'rate_name' can't be null";
        }
        if ($this->container['restrictions'] === null) {
            $invalid_properties[] = "'restrictions' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['rate_code'] === null) {
            return false;
        }
        if ($this->container['rate_name'] === null) {
            return false;
        }
        if ($this->container['restrictions'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets rate_code
     * @return string
     */
    public function getRateCode()
    {
        return $this->container['rate_code'];
    }

    /**
     * Sets rate_code
     * @param string $rate_code The unique identifier of this rate.
     * @return $this
     */
    public function setRateCode($rate_code)
    {
        $this->container['rate_code'] = $rate_code;

        return $this;
    }

    /**
     * Gets rate_name
     * @return string
     */
    public function getRateName()
    {
        return $this->container['rate_name'];
    }

    /**
     * Sets rate_name
     * @param string $rate_name The name used by the company to describe this rate.
     * @return $this
     */
    public function setRateName($rate_name)
    {
        $this->container['rate_name'] = $rate_name;

        return $this;
    }

    /**
     * Gets restrictions
     * @return string
     */
    public function getRestrictions()
    {
        return $this->container['restrictions'];
    }

    /**
     * Sets restrictions
     * @param string $restrictions An enumeration of the type of restrictions associated with this rate.
     * @return $this
     */
    public function setRestrictions($restrictions)
    {
        $this->container['restrictions'] = $restrictions;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


