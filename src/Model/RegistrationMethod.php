<?php
/**
 * RegistrationMethod
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
 * RegistrationMethod Class Doc Comment
 *
 * @category Class
 * @description A JSON object that holds info about the payment registration method.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RegistrationMethod implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RegistrationMethod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'methodType' => 'string',
        'methodId' => 'string',
        'userDefined' => 'object',
        'billingPhoneNumber' => 'string',
        'methodAlias' => 'string',
        'card' => '\FirstData\FirstApi\Client\Model\FraudRegistrationCard',
        'methodAddress' => '\FirstData\FirstApi\Client\Model\FraudAddress'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'methodType' => null,
        'methodId' => null,
        'userDefined' => null,
        'billingPhoneNumber' => null,
        'methodAlias' => null,
        'card' => null,
        'methodAddress' => null
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
        'methodType' => 'methodType',
        'methodId' => 'methodId',
        'userDefined' => 'userDefined',
        'billingPhoneNumber' => 'billingPhoneNumber',
        'methodAlias' => 'methodAlias',
        'card' => 'card',
        'methodAddress' => 'methodAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'methodType' => 'setMethodType',
        'methodId' => 'setMethodId',
        'userDefined' => 'setUserDefined',
        'billingPhoneNumber' => 'setBillingPhoneNumber',
        'methodAlias' => 'setMethodAlias',
        'card' => 'setCard',
        'methodAddress' => 'setMethodAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'methodType' => 'getMethodType',
        'methodId' => 'getMethodId',
        'userDefined' => 'getUserDefined',
        'billingPhoneNumber' => 'getBillingPhoneNumber',
        'methodAlias' => 'getMethodAlias',
        'card' => 'getCard',
        'methodAddress' => 'getMethodAddress'
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

    const METHOD_TYPE_CARD = 'method/card';
    const METHOD_TYPE_WALLET = 'method/wallet';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMethodTypeAllowableValues()
    {
        return [
            self::METHOD_TYPE_CARD,
            self::METHOD_TYPE_WALLET,
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
        $this->container['methodType'] = isset($data['methodType']) ? $data['methodType'] : null;
        $this->container['methodId'] = isset($data['methodId']) ? $data['methodId'] : null;
        $this->container['userDefined'] = isset($data['userDefined']) ? $data['userDefined'] : null;
        $this->container['billingPhoneNumber'] = isset($data['billingPhoneNumber']) ? $data['billingPhoneNumber'] : null;
        $this->container['methodAlias'] = isset($data['methodAlias']) ? $data['methodAlias'] : null;
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
        $this->container['methodAddress'] = isset($data['methodAddress']) ? $data['methodAddress'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['methodType'] === null) {
            $invalidProperties[] = "'methodType' can't be null";
        }
        $allowedValues = $this->getMethodTypeAllowableValues();
        if (!is_null($this->container['methodType']) && !in_array($this->container['methodType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'methodType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['card'] === null) {
            $invalidProperties[] = "'card' can't be null";
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
     * Gets methodType
     *
     * @return string
     */
    public function getMethodType()
    {
        return $this->container['methodType'];
    }

    /**
     * Sets methodType
     *
     * @param string $methodType Unique ID for the payment method type.
     *
     * @return $this
     */
    public function setMethodType($methodType)
    {
        $allowedValues = $this->getMethodTypeAllowableValues();
        if (!in_array($methodType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'methodType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['methodType'] = $methodType;

        return $this;
    }

    /**
     * Gets methodId
     *
     * @return string|null
     */
    public function getMethodId()
    {
        return $this->container['methodId'];
    }

    /**
     * Sets methodId
     *
     * @param string|null $methodId The unique ID of this payment method if it was previously registered with a registration/method or if it is currently being registered. Must be unique for the entire system (not just within a specific merchant or industry). Mandatory if being used inside a registration/method.
     *
     * @return $this
     */
    public function setMethodId($methodId)
    {
        $this->container['methodId'] = $methodId;

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
     * @param object|null $userDefined A JSON object that carries any additional information that might be helpful for fraud detection.
     *
     * @return $this
     */
    public function setUserDefined($userDefined)
    {
        $this->container['userDefined'] = $userDefined;

        return $this;
    }

    /**
     * Gets billingPhoneNumber
     *
     * @return string|null
     */
    public function getBillingPhoneNumber()
    {
        return $this->container['billingPhoneNumber'];
    }

    /**
     * Sets billingPhoneNumber
     *
     * @param string|null $billingPhoneNumber The address that should be used to send billing information for this payment method.
     *
     * @return $this
     */
    public function setBillingPhoneNumber($billingPhoneNumber)
    {
        $this->container['billingPhoneNumber'] = $billingPhoneNumber;

        return $this;
    }

    /**
     * Gets methodAlias
     *
     * @return string|null
     */
    public function getMethodAlias()
    {
        return $this->container['methodAlias'];
    }

    /**
     * Sets methodAlias
     *
     * @param string|null $methodAlias The address that should be used to send billing information for this payment method.
     *
     * @return $this
     */
    public function setMethodAlias($methodAlias)
    {
        $this->container['methodAlias'] = $methodAlias;

        return $this;
    }

    /**
     * Gets card
     *
     * @return \FirstData\FirstApi\Client\Model\FraudRegistrationCard
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     *
     * @param \FirstData\FirstApi\Client\Model\FraudRegistrationCard $card card
     *
     * @return $this
     */
    public function setCard($card)
    {
        $this->container['card'] = $card;

        return $this;
    }

    /**
     * Gets methodAddress
     *
     * @return \FirstData\FirstApi\Client\Model\FraudAddress|null
     */
    public function getMethodAddress()
    {
        return $this->container['methodAddress'];
    }

    /**
     * Sets methodAddress
     *
     * @param \FirstData\FirstApi\Client\Model\FraudAddress|null $methodAddress methodAddress
     *
     * @return $this
     */
    public function setMethodAddress($methodAddress)
    {
        $this->container['methodAddress'] = $methodAddress;

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


