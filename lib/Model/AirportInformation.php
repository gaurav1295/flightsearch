<?php
/**
 * AirportInformation
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
 * AirportInformation Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AirportInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AirportInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'name' => 'string',
        'city_code' => 'string',
        'city_name' => 'string',
        'state' => 'string',
        'country' => 'string',
        'location' => '\Swagger\Client\Model\Geolocation',
        'aircraft_movements' => 'int',
        'timezone' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'name' => null,
        'city_code' => null,
        'city_name' => null,
        'state' => null,
        'country' => null,
        'location' => null,
        'aircraft_movements' => null,
        'timezone' => null
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
        'code' => 'code',
        'name' => 'name',
        'city_code' => 'city_code',
        'city_name' => 'city_name',
        'state' => 'state',
        'country' => 'country',
        'location' => 'location',
        'aircraft_movements' => 'aircraft_movements',
        'timezone' => 'timezone'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'name' => 'setName',
        'city_code' => 'setCityCode',
        'city_name' => 'setCityName',
        'state' => 'setState',
        'country' => 'setCountry',
        'location' => 'setLocation',
        'aircraft_movements' => 'setAircraftMovements',
        'timezone' => 'setTimezone'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'name' => 'getName',
        'city_code' => 'getCityCode',
        'city_name' => 'getCityName',
        'state' => 'getState',
        'country' => 'getCountry',
        'location' => 'getLocation',
        'aircraft_movements' => 'getAircraftMovements',
        'timezone' => 'getTimezone'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['city_code'] = isset($data['city_code']) ? $data['city_code'] : null;
        $this->container['city_name'] = isset($data['city_name']) ? $data['city_name'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['aircraft_movements'] = isset($data['aircraft_movements']) ? $data['aircraft_movements'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['code'] === null) {
            $invalid_properties[] = "'code' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['city_code'] === null) {
            $invalid_properties[] = "'city_code' can't be null";
        }
        if ($this->container['city_name'] === null) {
            $invalid_properties[] = "'city_name' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalid_properties[] = "'country' can't be null";
        }
        if ($this->container['location'] === null) {
            $invalid_properties[] = "'location' can't be null";
        }
        if ($this->container['timezone'] === null) {
            $invalid_properties[] = "'timezone' can't be null";
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

        if ($this->container['code'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['city_code'] === null) {
            return false;
        }
        if ($this->container['city_name'] === null) {
            return false;
        }
        if ($this->container['country'] === null) {
            return false;
        }
        if ($this->container['location'] === null) {
            return false;
        }
        if ($this->container['timezone'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code The 3 letter IATA airport code of this given airport. You can use this as an input parameter for a low-fare flight search, to get more specific results than the city code, but inspiration search works best using the city code.
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name The name of this airport, in UTF-8 format
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets city_code
     * @return string
     */
    public function getCityCode()
    {
        return $this->container['city_code'];
    }

    /**
     * Sets city_code
     * @param string $city_code The three letter <a href=\"https://en.wikipedia.org/wiki/International_Air_Transport_Association_airport_code\">IATA code</a> of the city of the city in which this airport is located.
     * @return $this
     */
    public function setCityCode($city_code)
    {
        $this->container['city_code'] = $city_code;

        return $this;
    }

    /**
     * Gets city_name
     * @return string
     */
    public function getCityName()
    {
        return $this->container['city_name'];
    }

    /**
     * Sets city_name
     * @param string $city_name The English name of the city in which this airport is located
     * @return $this
     */
    public function setCityName($city_name)
    {
        $this->container['city_name'] = $city_name;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state The state code of this city, if applicable
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     * @param string $country The <a href=\"http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2\">ISO 3166-1 alpha-2 country code</a> in which this city can be found.
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets location
     * @return \Swagger\Client\Model\Geolocation
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     * @param \Swagger\Client\Model\Geolocation $location An object containing the longitude and latitude of the given airport.
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets aircraft_movements
     * @return int
     */
    public function getAircraftMovements()
    {
        return $this->container['aircraft_movements'];
    }

    /**
     * Sets aircraft_movements
     * @param int $aircraft_movements The annual number of aircraft movements at that airport.
     * @return $this
     */
    public function setAircraftMovements($aircraft_movements)
    {
        $this->container['aircraft_movements'] = $aircraft_movements;

        return $this;
    }

    /**
     * Gets timezone
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     * @param string $timezone The <a href=\"http://en.wikipedia.org/wiki/List_of_tz_database_time_zones\">Olson format</a> name of the timezone in which this airport is located
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

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


