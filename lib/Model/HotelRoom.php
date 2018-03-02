<?php
/**
 * HotelRoom
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
 * HotelRoom Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class HotelRoom implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'HotelRoom';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'booking_code' => 'string',
        'room_type_code' => 'string',
        'rate_plan_code' => 'string',
        'total_amount' => '\Swagger\Client\Model\Amount',
        'rates' => '\Swagger\Client\Model\PeriodRate[]',
        'descriptions' => 'string[]',
        'room_type_info' => '\Swagger\Client\Model\RoomInfo',
        'rate_type_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'booking_code' => null,
        'room_type_code' => null,
        'rate_plan_code' => null,
        'total_amount' => null,
        'rates' => null,
        'descriptions' => null,
        'room_type_info' => null,
        'rate_type_code' => null
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
        'booking_code' => 'booking_code',
        'room_type_code' => 'room_type_code',
        'rate_plan_code' => 'rate_plan_code',
        'total_amount' => 'total_amount',
        'rates' => 'rates',
        'descriptions' => 'descriptions',
        'room_type_info' => 'room_type_info',
        'rate_type_code' => 'rate_type_code'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'booking_code' => 'setBookingCode',
        'room_type_code' => 'setRoomTypeCode',
        'rate_plan_code' => 'setRatePlanCode',
        'total_amount' => 'setTotalAmount',
        'rates' => 'setRates',
        'descriptions' => 'setDescriptions',
        'room_type_info' => 'setRoomTypeInfo',
        'rate_type_code' => 'setRateTypeCode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'booking_code' => 'getBookingCode',
        'room_type_code' => 'getRoomTypeCode',
        'rate_plan_code' => 'getRatePlanCode',
        'total_amount' => 'getTotalAmount',
        'rates' => 'getRates',
        'descriptions' => 'getDescriptions',
        'room_type_info' => 'getRoomTypeInfo',
        'rate_type_code' => 'getRateTypeCode'
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
        $this->container['booking_code'] = isset($data['booking_code']) ? $data['booking_code'] : null;
        $this->container['room_type_code'] = isset($data['room_type_code']) ? $data['room_type_code'] : null;
        $this->container['rate_plan_code'] = isset($data['rate_plan_code']) ? $data['rate_plan_code'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['rates'] = isset($data['rates']) ? $data['rates'] : null;
        $this->container['descriptions'] = isset($data['descriptions']) ? $data['descriptions'] : null;
        $this->container['room_type_info'] = isset($data['room_type_info']) ? $data['room_type_info'] : null;
        $this->container['rate_type_code'] = isset($data['rate_type_code']) ? $data['rate_type_code'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['booking_code'] === null) {
            $invalid_properties[] = "'booking_code' can't be null";
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

        if ($this->container['booking_code'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets booking_code
     * @return string
     */
    public function getBookingCode()
    {
        return $this->container['booking_code'];
    }

    /**
     * Sets booking_code
     * @param string $booking_code The booking code identifies a product at the hotel. It can be used to book a room.
     * @return $this
     */
    public function setBookingCode($booking_code)
    {
        $this->container['booking_code'] = $booking_code;

        return $this;
    }

    /**
     * Gets room_type_code
     * @return string
     */
    public function getRoomTypeCode()
    {
        return $this->container['room_type_code'];
    }

    /**
     * Sets room_type_code
     * @param string $room_type_code A 3-letter code to identify a specific room type.
     * @return $this
     */
    public function setRoomTypeCode($room_type_code)
    {
        $this->container['room_type_code'] = $room_type_code;

        return $this;
    }

    /**
     * Gets rate_plan_code
     * @return string
     */
    public function getRatePlanCode()
    {
        return $this->container['rate_plan_code'];
    }

    /**
     * Sets rate_plan_code
     * @param string $rate_plan_code A 3 letter code to designate different rates base on traveler type.
     * @return $this
     */
    public function setRatePlanCode($rate_plan_code)
    {
        $this->container['rate_plan_code'] = $rate_plan_code;

        return $this;
    }

    /**
     * Gets total_amount
     * @return \Swagger\Client\Model\Amount
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     * @param \Swagger\Client\Model\Amount $total_amount The total price of staying in this room from the given check-in date to the given check-out date
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets rates
     * @return \Swagger\Client\Model\PeriodRate[]
     */
    public function getRates()
    {
        return $this->container['rates'];
    }

    /**
     * Sets rates
     * @param \Swagger\Client\Model\PeriodRate[] $rates The total price of staying in this room from the given check-in date to the given check-out date
     * @return $this
     */
    public function setRates($rates)
    {
        $this->container['rates'] = $rates;

        return $this;
    }

    /**
     * Gets descriptions
     * @return string[]
     */
    public function getDescriptions()
    {
        return $this->container['descriptions'];
    }

    /**
     * Sets descriptions
     * @param string[] $descriptions An array of description strings describing room and rate types features
     * @return $this
     */
    public function setDescriptions($descriptions)
    {
        $this->container['descriptions'] = $descriptions;

        return $this;
    }

    /**
     * Gets room_type_info
     * @return \Swagger\Client\Model\RoomInfo
     */
    public function getRoomTypeInfo()
    {
        return $this->container['room_type_info'];
    }

    /**
     * Sets room_type_info
     * @param \Swagger\Client\Model\RoomInfo $room_type_info
     * @return $this
     */
    public function setRoomTypeInfo($room_type_info)
    {
        $this->container['room_type_info'] = $room_type_info;

        return $this;
    }

    /**
     * Gets rate_type_code
     * @return string
     */
    public function getRateTypeCode()
    {
        return $this->container['rate_type_code'];
    }

    /**
     * Sets rate_type_code
     * @param string $rate_type_code The unique rate code used by the hotel chain to price this room's rate
     * @return $this
     */
    public function setRateTypeCode($rate_type_code)
    {
        $this->container['rate_type_code'] = $rate_type_code;

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

