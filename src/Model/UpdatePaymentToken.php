<?php
/**
 * UpdatePaymentToken
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
 * OpenAPI spec version: 6.12.0.20200605.001
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
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
 * UpdatePaymentToken Class Doc Comment
 *
 * @category Class
 * @description Use this model to Update payment token.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UpdatePaymentToken implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdatePaymentToken';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'value' => 'string',
        'reusable' => 'bool',
        'declineDuplicates' => 'bool',
        'paymentCard' => '\FirstData\FirstApi\Client\Model\PaymentCard'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'value' => null,
        'reusable' => null,
        'declineDuplicates' => null,
        'paymentCard' => null
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
        'value' => 'value',
        'reusable' => 'reusable',
        'declineDuplicates' => 'declineDuplicates',
        'paymentCard' => 'paymentCard'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'value' => 'setValue',
        'reusable' => 'setReusable',
        'declineDuplicates' => 'setDeclineDuplicates',
        'paymentCard' => 'setPaymentCard'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'value' => 'getValue',
        'reusable' => 'getReusable',
        'declineDuplicates' => 'getDeclineDuplicates',
        'paymentCard' => 'getPaymentCard'
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
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['reusable'] = isset($data['reusable']) ? $data['reusable'] : true;
        $this->container['declineDuplicates'] = isset($data['declineDuplicates']) ? $data['declineDuplicates'] : false;
        $this->container['paymentCard'] = isset($data['paymentCard']) ? $data['paymentCard'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['paymentCard'] === null) {
            $invalidProperties[] = "'paymentCard' can't be null";
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
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value Client-supplied payment token value.
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets reusable
     *
     * @return bool|null
     */
    public function getReusable()
    {
        return $this->container['reusable'];
    }

    /**
     * Sets reusable
     *
     * @param bool|null $reusable If the token is reusable.
     *
     * @return $this
     */
    public function setReusable($reusable)
    {
        $this->container['reusable'] = $reusable;

        return $this;
    }

    /**
     * Gets declineDuplicates
     *
     * @return bool|null
     */
    public function getDeclineDuplicates()
    {
        return $this->container['declineDuplicates'];
    }

    /**
     * Sets declineDuplicates
     *
     * @param bool|null $declineDuplicates Decline duplicate payment info if client token is supplied.
     *
     * @return $this
     */
    public function setDeclineDuplicates($declineDuplicates)
    {
        $this->container['declineDuplicates'] = $declineDuplicates;

        return $this;
    }

    /**
     * Gets paymentCard
     *
     * @return \FirstData\FirstApi\Client\Model\PaymentCard
     */
    public function getPaymentCard()
    {
        return $this->container['paymentCard'];
    }

    /**
     * Sets paymentCard
     *
     * @param \FirstData\FirstApi\Client\Model\PaymentCard $paymentCard paymentCard
     *
     * @return $this
     */
    public function setPaymentCard($paymentCard)
    {
        $this->container['paymentCard'] = $paymentCard;

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

