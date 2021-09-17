<?php
/**
 * Location
 *
 * PHP version 5
 *
 * @category Class
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Payment Gateway API Specification.
 *
 * The documentation here is designed to provide all of the technical guidance required to consume and integrate with our APIs for payment processing. To learn more about our APIs please visit https://docs.firstdata.com/org/gateway.
 *
 * The version of the OpenAPI document: 21.4.0.20210824.002
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FirstData\FirstApi\Client\Model;

use \ArrayAccess;
use \FirstData\FirstApi\Client\ObjectSerializer;

/**
 * Location Class Doc Comment
 *
 * @category Class
 * @description The specific location (e.g. store or station) where the transaction takes place.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Location implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Location';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'locationId' => 'string',
        'merchantAddress' => '\FirstData\FirstApi\Client\Model\FraudAddress',
        'hierarchy' => 'string',
        'timezoneOffset' => 'string',
        'userDefined' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'locationId' => null,
        'merchantAddress' => null,
        'hierarchy' => null,
        'timezoneOffset' => null,
        'userDefined' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'locationId' => 'locationId',
        'merchantAddress' => 'merchantAddress',
        'hierarchy' => 'hierarchy',
        'timezoneOffset' => 'timezoneOffset',
        'userDefined' => 'userDefined'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'locationId' => 'setLocationId',
        'merchantAddress' => 'setMerchantAddress',
        'hierarchy' => 'setHierarchy',
        'timezoneOffset' => 'setTimezoneOffset',
        'userDefined' => 'setUserDefined'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'locationId' => 'getLocationId',
        'merchantAddress' => 'getMerchantAddress',
        'hierarchy' => 'getHierarchy',
        'timezoneOffset' => 'getTimezoneOffset',
        'userDefined' => 'getUserDefined'
    ];

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
        return self::$openAPIModelName;
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
        $this->container['locationId'] = isset($data['locationId']) ? $data['locationId'] : null;
        $this->container['merchantAddress'] = isset($data['merchantAddress']) ? $data['merchantAddress'] : null;
        $this->container['hierarchy'] = isset($data['hierarchy']) ? $data['hierarchy'] : null;
        $this->container['timezoneOffset'] = isset($data['timezoneOffset']) ? $data['timezoneOffset'] : null;
        $this->container['userDefined'] = isset($data['userDefined']) ? $data['userDefined'] : null;
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
     * Gets locationId
     *
     * @return string|null
     */
    public function getLocationId()
    {
        return $this->container['locationId'];
    }

    /**
     * Sets locationId
     *
     * @param string|null $locationId The unique ID of this location.
     *
     * @return $this
     */
    public function setLocationId($locationId)
    {
        $this->container['locationId'] = $locationId;

        return $this;
    }

    /**
     * Gets merchantAddress
     *
     * @return \FirstData\FirstApi\Client\Model\FraudAddress|null
     */
    public function getMerchantAddress()
    {
        return $this->container['merchantAddress'];
    }

    /**
     * Sets merchantAddress
     *
     * @param \FirstData\FirstApi\Client\Model\FraudAddress|null $merchantAddress merchantAddress
     *
     * @return $this
     */
    public function setMerchantAddress($merchantAddress)
    {
        $this->container['merchantAddress'] = $merchantAddress;

        return $this;
    }

    /**
     * Gets hierarchy
     *
     * @return string|null
     */
    public function getHierarchy()
    {
        return $this->container['hierarchy'];
    }

    /**
     * Sets hierarchy
     *
     * @param string|null $hierarchy Free-text field to describe a hierarchy the merchant would like to provide.
     *
     * @return $this
     */
    public function setHierarchy($hierarchy)
    {
        $this->container['hierarchy'] = $hierarchy;

        return $this;
    }

    /**
     * Gets timezoneOffset
     *
     * @return string|null
     */
    public function getTimezoneOffset()
    {
        return $this->container['timezoneOffset'];
    }

    /**
     * Sets timezoneOffset
     *
     * @param string|null $timezoneOffset The timezone offset from UTC to the merchants timezone configuration, specified in the format +hh:mm.
     *
     * @return $this
     */
    public function setTimezoneOffset($timezoneOffset)
    {
        $this->container['timezoneOffset'] = $timezoneOffset;

        return $this;
    }

    /**
     * Gets userDefined
     *
     * @return object|null
     */
    public function getUserDefined()
    {
        return $this->container['userDefined'];
    }

    /**
     * Sets userDefined
     *
     * @param object|null $userDefined A JSON object that can carry any additional information about the location that might be helpful for fraud detection.
     *
     * @return $this
     */
    public function setUserDefined($userDefined)
    {
        $this->container['userDefined'] = $userDefined;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


