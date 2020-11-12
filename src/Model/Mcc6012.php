<?php
/**
 * Mcc6012
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
 * Mcc6012 Class Doc Comment
 *
 * @category Class
 * @description The group MCC (Merchant Category Code) 6012
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Mcc6012 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Mcc6012';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'dateOfBirth' => 'string',
        'accountFirst6' => 'string',
        'accountLast4' => 'string',
        'accountNum' => 'string',
        'postCode' => 'string',
        'surname' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'dateOfBirth' => null,
        'accountFirst6' => null,
        'accountLast4' => null,
        'accountNum' => null,
        'postCode' => null,
        'surname' => null
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
        'dateOfBirth' => 'dateOfBirth',
        'accountFirst6' => 'accountFirst6',
        'accountLast4' => 'accountLast4',
        'accountNum' => 'accountNum',
        'postCode' => 'postCode',
        'surname' => 'surname'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dateOfBirth' => 'setDateOfBirth',
        'accountFirst6' => 'setAccountFirst6',
        'accountLast4' => 'setAccountLast4',
        'accountNum' => 'setAccountNum',
        'postCode' => 'setPostCode',
        'surname' => 'setSurname'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dateOfBirth' => 'getDateOfBirth',
        'accountFirst6' => 'getAccountFirst6',
        'accountLast4' => 'getAccountLast4',
        'accountNum' => 'getAccountNum',
        'postCode' => 'getPostCode',
        'surname' => 'getSurname'
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
        $this->container['dateOfBirth'] = isset($data['dateOfBirth']) ? $data['dateOfBirth'] : null;
        $this->container['accountFirst6'] = isset($data['accountFirst6']) ? $data['accountFirst6'] : null;
        $this->container['accountLast4'] = isset($data['accountLast4']) ? $data['accountLast4'] : null;
        $this->container['accountNum'] = isset($data['accountNum']) ? $data['accountNum'] : null;
        $this->container['postCode'] = isset($data['postCode']) ? $data['postCode'] : null;
        $this->container['surname'] = isset($data['surname']) ? $data['surname'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['dateOfBirth']) && (mb_strlen($this->container['dateOfBirth']) > 8)) {
            $invalidProperties[] = "invalid value for 'dateOfBirth', the character length must be smaller than or equal to 8.";
        }

        if (!is_null($this->container['accountFirst6']) && (mb_strlen($this->container['accountFirst6']) > 6)) {
            $invalidProperties[] = "invalid value for 'accountFirst6', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['accountLast4']) && (mb_strlen($this->container['accountLast4']) > 4)) {
            $invalidProperties[] = "invalid value for 'accountLast4', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['accountNum']) && (mb_strlen($this->container['accountNum']) > 50)) {
            $invalidProperties[] = "invalid value for 'accountNum', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['postCode']) && (mb_strlen($this->container['postCode']) > 50)) {
            $invalidProperties[] = "invalid value for 'postCode', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['surname']) && (mb_strlen($this->container['surname']) > 100)) {
            $invalidProperties[] = "invalid value for 'surname', the character length must be smaller than or equal to 100.";
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
     * Gets dateOfBirth
     *
     * @return string|null
     */
    public function getDateOfBirth()
    {
        return $this->container['dateOfBirth'];
    }

    /**
     * Sets dateOfBirth
     *
     * @param string|null $dateOfBirth The date of birth of the cardholder (YYYYMMDD).
     *
     * @return $this
     */
    public function setDateOfBirth($dateOfBirth)
    {
        if (!is_null($dateOfBirth) && (mb_strlen($dateOfBirth) > 8)) {
            throw new \InvalidArgumentException('invalid length for $dateOfBirth when calling Mcc6012., must be smaller than or equal to 8.');
        }

        $this->container['dateOfBirth'] = $dateOfBirth;

        return $this;
    }

    /**
     * Gets accountFirst6
     *
     * @return string|null
     */
    public function getAccountFirst6()
    {
        return $this->container['accountFirst6'];
    }

    /**
     * Sets accountFirst6
     *
     * @param string|null $accountFirst6 The first six digits of the primary account number.
     *
     * @return $this
     */
    public function setAccountFirst6($accountFirst6)
    {
        if (!is_null($accountFirst6) && (mb_strlen($accountFirst6) > 6)) {
            throw new \InvalidArgumentException('invalid length for $accountFirst6 when calling Mcc6012., must be smaller than or equal to 6.');
        }

        $this->container['accountFirst6'] = $accountFirst6;

        return $this;
    }

    /**
     * Gets accountLast4
     *
     * @return string|null
     */
    public function getAccountLast4()
    {
        return $this->container['accountLast4'];
    }

    /**
     * Sets accountLast4
     *
     * @param string|null $accountLast4 The last four digits of the primary account number.
     *
     * @return $this
     */
    public function setAccountLast4($accountLast4)
    {
        if (!is_null($accountLast4) && (mb_strlen($accountLast4) > 4)) {
            throw new \InvalidArgumentException('invalid length for $accountLast4 when calling Mcc6012., must be smaller than or equal to 4.');
        }

        $this->container['accountLast4'] = $accountLast4;

        return $this;
    }

    /**
     * Gets accountNum
     *
     * @return string|null
     */
    public function getAccountNum()
    {
        return $this->container['accountNum'];
    }

    /**
     * Sets accountNum
     *
     * @param string|null $accountNum The account number where the primary account number is not a card.
     *
     * @return $this
     */
    public function setAccountNum($accountNum)
    {
        if (!is_null($accountNum) && (mb_strlen($accountNum) > 50)) {
            throw new \InvalidArgumentException('invalid length for $accountNum when calling Mcc6012., must be smaller than or equal to 50.');
        }

        $this->container['accountNum'] = $accountNum;

        return $this;
    }

    /**
     * Gets postCode
     *
     * @return string|null
     */
    public function getPostCode()
    {
        return $this->container['postCode'];
    }

    /**
     * Sets postCode
     *
     * @param string|null $postCode The postal code of the cardholder.
     *
     * @return $this
     */
    public function setPostCode($postCode)
    {
        if (!is_null($postCode) && (mb_strlen($postCode) > 50)) {
            throw new \InvalidArgumentException('invalid length for $postCode when calling Mcc6012., must be smaller than or equal to 50.');
        }

        $this->container['postCode'] = $postCode;

        return $this;
    }

    /**
     * Gets surname
     *
     * @return string|null
     */
    public function getSurname()
    {
        return $this->container['surname'];
    }

    /**
     * Sets surname
     *
     * @param string|null $surname Surname or last name of the card holder.
     *
     * @return $this
     */
    public function setSurname($surname)
    {
        if (!is_null($surname) && (mb_strlen($surname) > 100)) {
            throw new \InvalidArgumentException('invalid length for $surname when calling Mcc6012., must be smaller than or equal to 100.');
        }

        $this->container['surname'] = $surname;

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


