<?php
/**
 * PaymentDevicePreAuthTransactionAllOf
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
 * The version of the OpenAPI document: 6.14.0.20201015.001
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
 * PaymentDevicePreAuthTransactionAllOf Class Doc Comment
 *
 * @category Class
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentDevicePreAuthTransactionAllOf implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentDevicePreAuthTransaction_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'paymentMethod' => '\FirstData\FirstApi\Client\Model\PaymentDevicePaymentMethod',
        'createToken' => '\FirstData\FirstApi\Client\Model\CreatePaymentToken',
        'settlementSplit' => '\FirstData\FirstApi\Client\Model\SubMerchantSplit[]',
        'storedCredentials' => '\FirstData\FirstApi\Client\Model\StoredCredential',
        'splitShipment' => '\FirstData\FirstApi\Client\Model\SplitShipment',
        'decrementalFlag' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'paymentMethod' => null,
        'createToken' => null,
        'settlementSplit' => null,
        'storedCredentials' => null,
        'splitShipment' => null,
        'decrementalFlag' => null
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
        'paymentMethod' => 'paymentMethod',
        'createToken' => 'createToken',
        'settlementSplit' => 'settlementSplit',
        'storedCredentials' => 'storedCredentials',
        'splitShipment' => 'splitShipment',
        'decrementalFlag' => 'decrementalFlag'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'paymentMethod' => 'setPaymentMethod',
        'createToken' => 'setCreateToken',
        'settlementSplit' => 'setSettlementSplit',
        'storedCredentials' => 'setStoredCredentials',
        'splitShipment' => 'setSplitShipment',
        'decrementalFlag' => 'setDecrementalFlag'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'paymentMethod' => 'getPaymentMethod',
        'createToken' => 'getCreateToken',
        'settlementSplit' => 'getSettlementSplit',
        'storedCredentials' => 'getStoredCredentials',
        'splitShipment' => 'getSplitShipment',
        'decrementalFlag' => 'getDecrementalFlag'
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
        $this->container['paymentMethod'] = isset($data['paymentMethod']) ? $data['paymentMethod'] : null;
        $this->container['createToken'] = isset($data['createToken']) ? $data['createToken'] : null;
        $this->container['settlementSplit'] = isset($data['settlementSplit']) ? $data['settlementSplit'] : null;
        $this->container['storedCredentials'] = isset($data['storedCredentials']) ? $data['storedCredentials'] : null;
        $this->container['splitShipment'] = isset($data['splitShipment']) ? $data['splitShipment'] : null;
        $this->container['decrementalFlag'] = isset($data['decrementalFlag']) ? $data['decrementalFlag'] : false;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['paymentMethod'] === null) {
            $invalidProperties[] = "'paymentMethod' can't be null";
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
     * Gets paymentMethod
     *
     * @return \FirstData\FirstApi\Client\Model\PaymentDevicePaymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->container['paymentMethod'];
    }

    /**
     * Sets paymentMethod
     *
     * @param \FirstData\FirstApi\Client\Model\PaymentDevicePaymentMethod $paymentMethod paymentMethod
     *
     * @return $this
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->container['paymentMethod'] = $paymentMethod;

        return $this;
    }

    /**
     * Gets createToken
     *
     * @return \FirstData\FirstApi\Client\Model\CreatePaymentToken|null
     */
    public function getCreateToken()
    {
        return $this->container['createToken'];
    }

    /**
     * Sets createToken
     *
     * @param \FirstData\FirstApi\Client\Model\CreatePaymentToken|null $createToken createToken
     *
     * @return $this
     */
    public function setCreateToken($createToken)
    {
        $this->container['createToken'] = $createToken;

        return $this;
    }

    /**
     * Gets settlementSplit
     *
     * @return \FirstData\FirstApi\Client\Model\SubMerchantSplit[]|null
     */
    public function getSettlementSplit()
    {
        return $this->container['settlementSplit'];
    }

    /**
     * Sets settlementSplit
     *
     * @param \FirstData\FirstApi\Client\Model\SubMerchantSplit[]|null $settlementSplit Settle with multiple sub-merchants, sale and preAuth only.
     *
     * @return $this
     */
    public function setSettlementSplit($settlementSplit)
    {
        $this->container['settlementSplit'] = $settlementSplit;

        return $this;
    }

    /**
     * Gets storedCredentials
     *
     * @return \FirstData\FirstApi\Client\Model\StoredCredential|null
     */
    public function getStoredCredentials()
    {
        return $this->container['storedCredentials'];
    }

    /**
     * Sets storedCredentials
     *
     * @param \FirstData\FirstApi\Client\Model\StoredCredential|null $storedCredentials storedCredentials
     *
     * @return $this
     */
    public function setStoredCredentials($storedCredentials)
    {
        $this->container['storedCredentials'] = $storedCredentials;

        return $this;
    }

    /**
     * Gets splitShipment
     *
     * @return \FirstData\FirstApi\Client\Model\SplitShipment|null
     */
    public function getSplitShipment()
    {
        return $this->container['splitShipment'];
    }

    /**
     * Sets splitShipment
     *
     * @param \FirstData\FirstApi\Client\Model\SplitShipment|null $splitShipment splitShipment
     *
     * @return $this
     */
    public function setSplitShipment($splitShipment)
    {
        $this->container['splitShipment'] = $splitShipment;

        return $this;
    }

    /**
     * Gets decrementalFlag
     *
     * @return bool|null
     */
    public function getDecrementalFlag()
    {
        return $this->container['decrementalFlag'];
    }

    /**
     * Sets decrementalFlag
     *
     * @param bool|null $decrementalFlag This flag can only be used in a preAuth transaction that updates the amount of a previous preAuth transaction to either increase the preAuth amount (DecrementalPreAuthFlag = false) or decrease the preAuth amount (DecrementalPreAuthFlag = true).
     *
     * @return $this
     */
    public function setDecrementalFlag($decrementalFlag)
    {
        $this->container['decrementalFlag'] = $decrementalFlag;

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


