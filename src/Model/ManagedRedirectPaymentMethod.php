<?php
/**
 * ManagedRedirectPaymentMethod
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
 * ManagedRedirectPaymentMethod Class Doc Comment
 *
 * @category Class
 * @description Accomodate other Payment method that is not listed above
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ManagedRedirectPaymentMethod implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ManagedRedirectPaymentMethod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'paymentMethodType' => 'string',
        'paymentDetails' => '\FirstData\FirstApi\Client\Model\ManagedRedirectPaymentMethodPaymentDetails[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'paymentMethodType' => null,
        'paymentDetails' => null
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
        'paymentMethodType' => 'paymentMethodType',
        'paymentDetails' => 'paymentDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'paymentMethodType' => 'setPaymentMethodType',
        'paymentDetails' => 'setPaymentDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'paymentMethodType' => 'getPaymentMethodType',
        'paymentDetails' => 'getPaymentDetails'
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

    const PAYMENT_METHOD_TYPE_APPLEPAY = 'APPLEPAY';
    const PAYMENT_METHOD_TYPE_BCMC_APM = 'BCMC_APM';
    const PAYMENT_METHOD_TYPE_GOOGLEPAY = 'GOOGLEPAY';
    const PAYMENT_METHOD_TYPE_IDEAL = 'IDEAL';
    const PAYMENT_METHOD_TYPE_INDIAWALLET = 'INDIAWALLET';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentMethodTypeAllowableValues()
    {
        return [
            self::PAYMENT_METHOD_TYPE_APPLEPAY,
            self::PAYMENT_METHOD_TYPE_BCMC_APM,
            self::PAYMENT_METHOD_TYPE_GOOGLEPAY,
            self::PAYMENT_METHOD_TYPE_IDEAL,
            self::PAYMENT_METHOD_TYPE_INDIAWALLET,
        ];
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
        $this->container['paymentMethodType'] = isset($data['paymentMethodType']) ? $data['paymentMethodType'] : null;
        $this->container['paymentDetails'] = isset($data['paymentDetails']) ? $data['paymentDetails'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPaymentMethodTypeAllowableValues();
        if (!is_null($this->container['paymentMethodType']) && !in_array($this->container['paymentMethodType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'paymentMethodType', must be one of '%s'",
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
     * Gets paymentMethodType
     *
     * @return string|null
     */
    public function getPaymentMethodType()
    {
        return $this->container['paymentMethodType'];
    }

    /**
     * Sets paymentMethodType
     *
     * @param string|null $paymentMethodType Payment Method Type Enum
     *
     * @return $this
     */
    public function setPaymentMethodType($paymentMethodType)
    {
        $allowedValues = $this->getPaymentMethodTypeAllowableValues();
        if (!is_null($paymentMethodType) && !in_array($paymentMethodType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'paymentMethodType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['paymentMethodType'] = $paymentMethodType;

        return $this;
    }

    /**
     * Gets paymentDetails
     *
     * @return \FirstData\FirstApi\Client\Model\ManagedRedirectPaymentMethodPaymentDetails[]|null
     */
    public function getPaymentDetails()
    {
        return $this->container['paymentDetails'];
    }

    /**
     * Sets paymentDetails
     *
     * @param \FirstData\FirstApi\Client\Model\ManagedRedirectPaymentMethodPaymentDetails[]|null $paymentDetails Key Value pairs of Payment detail appropriate for the Payment Method Type
     *
     * @return $this
     */
    public function setPaymentDetails($paymentDetails)
    {
        $this->container['paymentDetails'] = $paymentDetails;

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


