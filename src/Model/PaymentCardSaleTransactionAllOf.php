<?php
/**
 * PaymentCardSaleTransactionAllOf
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
 * PaymentCardSaleTransactionAllOf Class Doc Comment
 *
 * @category Class
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentCardSaleTransactionAllOf implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentCardSaleTransaction_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'paymentMethod' => '\FirstData\FirstApi\Client\Model\PaymentCardPaymentMethod',
        'storedCredentials' => '\FirstData\FirstApi\Client\Model\StoredCredential',
        'settlementSplit' => '\FirstData\FirstApi\Client\Model\SubMerchantSplit[]',
        'createToken' => '\FirstData\FirstApi\Client\Model\CreatePaymentToken',
        'currencyConversion' => '\FirstData\FirstApi\Client\Model\CurrencyConversion',
        'authenticationRequest' => '\FirstData\FirstApi\Client\Model\AuthenticationRequest',
        'authenticationResult' => '\FirstData\FirstApi\Client\Model\AuthenticationResult'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'paymentMethod' => null,
        'storedCredentials' => null,
        'settlementSplit' => null,
        'createToken' => null,
        'currencyConversion' => null,
        'authenticationRequest' => null,
        'authenticationResult' => null
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
        'storedCredentials' => 'storedCredentials',
        'settlementSplit' => 'settlementSplit',
        'createToken' => 'createToken',
        'currencyConversion' => 'currencyConversion',
        'authenticationRequest' => 'authenticationRequest',
        'authenticationResult' => 'authenticationResult'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'paymentMethod' => 'setPaymentMethod',
        'storedCredentials' => 'setStoredCredentials',
        'settlementSplit' => 'setSettlementSplit',
        'createToken' => 'setCreateToken',
        'currencyConversion' => 'setCurrencyConversion',
        'authenticationRequest' => 'setAuthenticationRequest',
        'authenticationResult' => 'setAuthenticationResult'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'paymentMethod' => 'getPaymentMethod',
        'storedCredentials' => 'getStoredCredentials',
        'settlementSplit' => 'getSettlementSplit',
        'createToken' => 'getCreateToken',
        'currencyConversion' => 'getCurrencyConversion',
        'authenticationRequest' => 'getAuthenticationRequest',
        'authenticationResult' => 'getAuthenticationResult'
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
        $this->container['storedCredentials'] = isset($data['storedCredentials']) ? $data['storedCredentials'] : null;
        $this->container['settlementSplit'] = isset($data['settlementSplit']) ? $data['settlementSplit'] : null;
        $this->container['createToken'] = isset($data['createToken']) ? $data['createToken'] : null;
        $this->container['currencyConversion'] = isset($data['currencyConversion']) ? $data['currencyConversion'] : null;
        $this->container['authenticationRequest'] = isset($data['authenticationRequest']) ? $data['authenticationRequest'] : null;
        $this->container['authenticationResult'] = isset($data['authenticationResult']) ? $data['authenticationResult'] : null;
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
     * Gets paymentMethod
     *
     * @return \FirstData\FirstApi\Client\Model\PaymentCardPaymentMethod|null
     */
    public function getPaymentMethod()
    {
        return $this->container['paymentMethod'];
    }

    /**
     * Sets paymentMethod
     *
     * @param \FirstData\FirstApi\Client\Model\PaymentCardPaymentMethod|null $paymentMethod paymentMethod
     *
     * @return $this
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->container['paymentMethod'] = $paymentMethod;

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
     * Gets currencyConversion
     *
     * @return \FirstData\FirstApi\Client\Model\CurrencyConversion|null
     */
    public function getCurrencyConversion()
    {
        return $this->container['currencyConversion'];
    }

    /**
     * Sets currencyConversion
     *
     * @param \FirstData\FirstApi\Client\Model\CurrencyConversion|null $currencyConversion currencyConversion
     *
     * @return $this
     */
    public function setCurrencyConversion($currencyConversion)
    {
        $this->container['currencyConversion'] = $currencyConversion;

        return $this;
    }

    /**
     * Gets authenticationRequest
     *
     * @return \FirstData\FirstApi\Client\Model\AuthenticationRequest|null
     */
    public function getAuthenticationRequest()
    {
        return $this->container['authenticationRequest'];
    }

    /**
     * Sets authenticationRequest
     *
     * @param \FirstData\FirstApi\Client\Model\AuthenticationRequest|null $authenticationRequest authenticationRequest
     *
     * @return $this
     */
    public function setAuthenticationRequest($authenticationRequest)
    {
        $this->container['authenticationRequest'] = $authenticationRequest;

        return $this;
    }

    /**
     * Gets authenticationResult
     *
     * @return \FirstData\FirstApi\Client\Model\AuthenticationResult|null
     */
    public function getAuthenticationResult()
    {
        return $this->container['authenticationResult'];
    }

    /**
     * Sets authenticationResult
     *
     * @param \FirstData\FirstApi\Client\Model\AuthenticationResult|null $authenticationResult authenticationResult
     *
     * @return $this
     */
    public function setAuthenticationResult($authenticationResult)
    {
        $this->container['authenticationResult'] = $authenticationResult;

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


