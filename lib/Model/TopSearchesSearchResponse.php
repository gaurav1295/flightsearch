<?php
/**
 * TopSearchesSearchResponse
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
 * TopSearchesSearchResponse Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TopSearchesSearchResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TopSearchesSearchResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'market' => 'string',
        'period' => 'string',
        'origin' => 'string',
        'destination' => 'string',
        'results' => '\Swagger\Client\Model\TopSearchesSearchResult[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'market' => null,
        'period' => null,
        'origin' => null,
        'destination' => null,
        'results' => null
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
        'market' => 'market',
        'period' => 'period',
        'origin' => 'origin',
        'destination' => 'destination',
        'results' => 'results'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'market' => 'setMarket',
        'period' => 'setPeriod',
        'origin' => 'setOrigin',
        'destination' => 'setDestination',
        'results' => 'setResults'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'market' => 'getMarket',
        'period' => 'getPeriod',
        'origin' => 'getOrigin',
        'destination' => 'getDestination',
        'results' => 'getResults'
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
        $this->container['market'] = isset($data['market']) ? $data['market'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['results'] = isset($data['results']) ? $data['results'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['market'] === null) {
            $invalid_properties[] = "'market' can't be null";
        }
        if ($this->container['period'] === null) {
            $invalid_properties[] = "'period' can't be null";
        }
        if ($this->container['origin'] === null) {
            $invalid_properties[] = "'origin' can't be null";
        }
        if ($this->container['destination'] === null) {
            $invalid_properties[] = "'destination' can't be null";
        }
        if ($this->container['results'] === null) {
            $invalid_properties[] = "'results' can't be null";
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

        if ($this->container['market'] === null) {
            return false;
        }
        if ($this->container['period'] === null) {
            return false;
        }
        if ($this->container['origin'] === null) {
            return false;
        }
        if ($this->container['destination'] === null) {
            return false;
        }
        if ($this->container['results'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets market
     * @return string
     */
    public function getMarket()
    {
        return $this->container['market'];
    }

    /**
     * Sets market
     * @param string $market Country code
     * @return $this
     */
    public function setMarket($market)
    {
        $this->container['market'] = $market;

        return $this;
    }

    /**
     * Gets period
     * @return string
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     * @param string $period The date period, in <a href=\"https://en.wikipedia.org/wiki/ISO_8601\">ISO 8601</a> date format YYYY-MM or YYYY
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets origin
     * @return string
     */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
     * Sets origin
     * @param string $origin <a href=\"https://en.wikipedia.org/wiki/International_Air_Transport_Association_airport_code\">IATA code</a>
     * @return $this
     */
    public function setOrigin($origin)
    {
        $this->container['origin'] = $origin;

        return $this;
    }

    /**
     * Gets destination
     * @return string
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     * @param string $destination <a href=\"https://en.wikipedia.org/wiki/International_Air_Transport_Association_airport_code\">IATA code</a>
     * @return $this
     */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;

        return $this;
    }

    /**
     * Gets results
     * @return \Swagger\Client\Model\TopSearchesSearchResult[]
     */
    public function getResults()
    {
        return $this->container['results'];
    }

    /**
     * Sets results
     * @param \Swagger\Client\Model\TopSearchesSearchResult[] $results
     * @return $this
     */
    public function setResults($results)
    {
        $this->container['results'] = $results;

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


