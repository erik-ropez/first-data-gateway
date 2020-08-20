<?php
/**
 * TeleCheckAchPaymentMethodAchBillTo
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
 * TeleCheckAchPaymentMethodAchBillTo Class Doc Comment
 *
 * @category Class
 * @description Billing details for telecheck transactions.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TeleCheckAchPaymentMethodAchBillTo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TeleCheckAchPaymentMethod_achBillTo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'firstName' => 'string',
        'lastName' => 'string',
        'addressOne' => 'string',
        'addressTwo' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'countryCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'firstName' => null,
        'lastName' => null,
        'addressOne' => null,
        'addressTwo' => null,
        'city' => null,
        'state' => null,
        'zip' => null,
        'phone' => null,
        'email' => null,
        'countryCode' => null
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
        'firstName' => 'firstName',
        'lastName' => 'lastName',
        'addressOne' => 'addressOne',
        'addressTwo' => 'addressTwo',
        'city' => 'city',
        'state' => 'state',
        'zip' => 'zip',
        'phone' => 'phone',
        'email' => 'email',
        'countryCode' => 'countryCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName',
        'addressOne' => 'setAddressOne',
        'addressTwo' => 'setAddressTwo',
        'city' => 'setCity',
        'state' => 'setState',
        'zip' => 'setZip',
        'phone' => 'setPhone',
        'email' => 'setEmail',
        'countryCode' => 'setCountryCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName',
        'addressOne' => 'getAddressOne',
        'addressTwo' => 'getAddressTwo',
        'city' => 'getCity',
        'state' => 'getState',
        'zip' => 'getZip',
        'phone' => 'getPhone',
        'email' => 'getEmail',
        'countryCode' => 'getCountryCode'
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
        $this->container['firstName'] = isset($data['firstName']) ? $data['firstName'] : null;
        $this->container['lastName'] = isset($data['lastName']) ? $data['lastName'] : null;
        $this->container['addressOne'] = isset($data['addressOne']) ? $data['addressOne'] : null;
        $this->container['addressTwo'] = isset($data['addressTwo']) ? $data['addressTwo'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['zip'] = isset($data['zip']) ? $data['zip'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['countryCode'] = isset($data['countryCode']) ? $data['countryCode'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['firstName']) && (mb_strlen($this->container['firstName']) > 30)) {
            $invalidProperties[] = "invalid value for 'firstName', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['firstName']) && !preg_match("/(?=.*[^\\s])^[^|]+$/", $this->container['firstName'])) {
            $invalidProperties[] = "invalid value for 'firstName', must be conform to the pattern /(?=.*[^\\s])^[^|]+$/.";
        }

        if ($this->container['lastName'] === null) {
            $invalidProperties[] = "'lastName' can't be null";
        }
        if ((mb_strlen($this->container['lastName']) > 30)) {
            $invalidProperties[] = "invalid value for 'lastName', the character length must be smaller than or equal to 30.";
        }

        if (!preg_match("/(?=.*[^\\s])^[^|]+$/", $this->container['lastName'])) {
            $invalidProperties[] = "invalid value for 'lastName', must be conform to the pattern /(?=.*[^\\s])^[^|]+$/.";
        }

        if ($this->container['addressOne'] === null) {
            $invalidProperties[] = "'addressOne' can't be null";
        }
        if ((mb_strlen($this->container['addressOne']) > 50)) {
            $invalidProperties[] = "invalid value for 'addressOne', the character length must be smaller than or equal to 50.";
        }

        if (!preg_match("/(?=.*[^\\s])^[^|]+$/", $this->container['addressOne'])) {
            $invalidProperties[] = "invalid value for 'addressOne', must be conform to the pattern /(?=.*[^\\s])^[^|]+$/.";
        }

        if (!is_null($this->container['addressTwo']) && (mb_strlen($this->container['addressTwo']) > 30)) {
            $invalidProperties[] = "invalid value for 'addressTwo', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['addressTwo']) && !preg_match("/(?=.*[^\\s])^[^|]+$/", $this->container['addressTwo'])) {
            $invalidProperties[] = "invalid value for 'addressTwo', must be conform to the pattern /(?=.*[^\\s])^[^|]+$/.";
        }

        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ((mb_strlen($this->container['city']) > 30)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 30.";
        }

        if (!preg_match("/(?=.*[^\\s])^[^|]+$/", $this->container['city'])) {
            $invalidProperties[] = "invalid value for 'city', must be conform to the pattern /(?=.*[^\\s])^[^|]+$/.";
        }

        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ((mb_strlen($this->container['state']) > 2)) {
            $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 2.";
        }

        if (!preg_match("/^[A-Z]{2}$/", $this->container['state'])) {
            $invalidProperties[] = "invalid value for 'state', must be conform to the pattern /^[A-Z]{2}$/.";
        }

        if ($this->container['zip'] === null) {
            $invalidProperties[] = "'zip' can't be null";
        }
        if ((mb_strlen($this->container['zip']) > 11)) {
            $invalidProperties[] = "invalid value for 'zip', the character length must be smaller than or equal to 11.";
        }

        if (!preg_match("/(?=.*[^\\s])^[^|]+$/", $this->container['zip'])) {
            $invalidProperties[] = "invalid value for 'zip', must be conform to the pattern /(?=.*[^\\s])^[^|]+$/.";
        }

        if ($this->container['phone'] === null) {
            $invalidProperties[] = "'phone' can't be null";
        }
        if ((mb_strlen($this->container['phone']) > 10)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 10.";
        }

        if (!preg_match("/^[0-9]+$/", $this->container['phone'])) {
            $invalidProperties[] = "invalid value for 'phone', must be conform to the pattern /^[0-9]+$/.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 100)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['email']) && !preg_match("/(?=.*[^\\s])^[^|]+$/", $this->container['email'])) {
            $invalidProperties[] = "invalid value for 'email', must be conform to the pattern /(?=.*[^\\s])^[^|]+$/.";
        }

        if (!is_null($this->container['countryCode']) && (mb_strlen($this->container['countryCode']) > 2)) {
            $invalidProperties[] = "invalid value for 'countryCode', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['countryCode']) && !preg_match("/^[A-Z]{2}$/", $this->container['countryCode'])) {
            $invalidProperties[] = "invalid value for 'countryCode', must be conform to the pattern /^[A-Z]{2}$/.";
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
     * Gets firstName
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     *
     * @param string|null $firstName Customer billing first name.
     *
     * @return $this
     */
    public function setFirstName($firstName)
    {
        if (!is_null($firstName) && (mb_strlen($firstName) > 30)) {
            throw new \InvalidArgumentException('invalid length for $firstName when calling TeleCheckAchPaymentMethodAchBillTo., must be smaller than or equal to 30.');
        }
        if (!is_null($firstName) && (!preg_match("/(?=.*[^\\s])^[^|]+$/", $firstName))) {
            throw new \InvalidArgumentException("invalid value for $firstName when calling TeleCheckAchPaymentMethodAchBillTo., must conform to the pattern /(?=.*[^\\s])^[^|]+$/.");
        }

        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     *
     * @param string $lastName Customer billing last name.
     *
     * @return $this
     */
    public function setLastName($lastName)
    {
        if ((mb_strlen($lastName) > 30)) {
            throw new \InvalidArgumentException('invalid length for $lastName when calling TeleCheckAchPaymentMethodAchBillTo., must be smaller than or equal to 30.');
        }
        if ((!preg_match("/(?=.*[^\\s])^[^|]+$/", $lastName))) {
            throw new \InvalidArgumentException("invalid value for $lastName when calling TeleCheckAchPaymentMethodAchBillTo., must conform to the pattern /(?=.*[^\\s])^[^|]+$/.");
        }

        $this->container['lastName'] = $lastName;

        return $this;
    }

    /**
     * Gets addressOne
     *
     * @return string
     */
    public function getAddressOne()
    {
        return $this->container['addressOne'];
    }

    /**
     * Sets addressOne
     *
     * @param string $addressOne Customer billing address, first line.
     *
     * @return $this
     */
    public function setAddressOne($addressOne)
    {
        if ((mb_strlen($addressOne) > 50)) {
            throw new \InvalidArgumentException('invalid length for $addressOne when calling TeleCheckAchPaymentMethodAchBillTo., must be smaller than or equal to 50.');
        }
        if ((!preg_match("/(?=.*[^\\s])^[^|]+$/", $addressOne))) {
            throw new \InvalidArgumentException("invalid value for $addressOne when calling TeleCheckAchPaymentMethodAchBillTo., must conform to the pattern /(?=.*[^\\s])^[^|]+$/.");
        }

        $this->container['addressOne'] = $addressOne;

        return $this;
    }

    /**
     * Gets addressTwo
     *
     * @return string|null
     */
    public function getAddressTwo()
    {
        return $this->container['addressTwo'];
    }

    /**
     * Sets addressTwo
     *
     * @param string|null $addressTwo Customer billing address, second line.
     *
     * @return $this
     */
    public function setAddressTwo($addressTwo)
    {
        if (!is_null($addressTwo) && (mb_strlen($addressTwo) > 30)) {
            throw new \InvalidArgumentException('invalid length for $addressTwo when calling TeleCheckAchPaymentMethodAchBillTo., must be smaller than or equal to 30.');
        }
        if (!is_null($addressTwo) && (!preg_match("/(?=.*[^\\s])^[^|]+$/", $addressTwo))) {
            throw new \InvalidArgumentException("invalid value for $addressTwo when calling TeleCheckAchPaymentMethodAchBillTo., must conform to the pattern /(?=.*[^\\s])^[^|]+$/.");
        }

        $this->container['addressTwo'] = $addressTwo;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city Customer billing city.
     *
     * @return $this
     */
    public function setCity($city)
    {
        if ((mb_strlen($city) > 30)) {
            throw new \InvalidArgumentException('invalid length for $city when calling TeleCheckAchPaymentMethodAchBillTo., must be smaller than or equal to 30.');
        }
        if ((!preg_match("/(?=.*[^\\s])^[^|]+$/", $city))) {
            throw new \InvalidArgumentException("invalid value for $city when calling TeleCheckAchPaymentMethodAchBillTo., must conform to the pattern /(?=.*[^\\s])^[^|]+$/.");
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state Customer billing state.
     *
     * @return $this
     */
    public function setState($state)
    {
        if ((mb_strlen($state) > 2)) {
            throw new \InvalidArgumentException('invalid length for $state when calling TeleCheckAchPaymentMethodAchBillTo., must be smaller than or equal to 2.');
        }
        if ((!preg_match("/^[A-Z]{2}$/", $state))) {
            throw new \InvalidArgumentException("invalid value for $state when calling TeleCheckAchPaymentMethodAchBillTo., must conform to the pattern /^[A-Z]{2}$/.");
        }

        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param string $zip Customer billing zip code.
     *
     * @return $this
     */
    public function setZip($zip)
    {
        if ((mb_strlen($zip) > 11)) {
            throw new \InvalidArgumentException('invalid length for $zip when calling TeleCheckAchPaymentMethodAchBillTo., must be smaller than or equal to 11.');
        }
        if ((!preg_match("/(?=.*[^\\s])^[^|]+$/", $zip))) {
            throw new \InvalidArgumentException("invalid value for $zip when calling TeleCheckAchPaymentMethodAchBillTo., must conform to the pattern /(?=.*[^\\s])^[^|]+$/.");
        }

        $this->container['zip'] = $zip;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone Customer billing phone number.
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        if ((mb_strlen($phone) > 10)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling TeleCheckAchPaymentMethodAchBillTo., must be smaller than or equal to 10.');
        }
        if ((!preg_match("/^[0-9]+$/", $phone))) {
            throw new \InvalidArgumentException("invalid value for $phone when calling TeleCheckAchPaymentMethodAchBillTo., must conform to the pattern /^[0-9]+$/.");
        }

        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email Customer billing email. Required if performing an ICA transaction.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        if (!is_null($email) && (mb_strlen($email) > 100)) {
            throw new \InvalidArgumentException('invalid length for $email when calling TeleCheckAchPaymentMethodAchBillTo., must be smaller than or equal to 100.');
        }
        if (!is_null($email) && (!preg_match("/(?=.*[^\\s])^[^|]+$/", $email))) {
            throw new \InvalidArgumentException("invalid value for $email when calling TeleCheckAchPaymentMethodAchBillTo., must conform to the pattern /(?=.*[^\\s])^[^|]+$/.");
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets countryCode
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['countryCode'];
    }

    /**
     * Sets countryCode
     *
     * @param string|null $countryCode ISO country code. Required if performing an ICA transaction.
     *
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        if (!is_null($countryCode) && (mb_strlen($countryCode) > 2)) {
            throw new \InvalidArgumentException('invalid length for $countryCode when calling TeleCheckAchPaymentMethodAchBillTo., must be smaller than or equal to 2.');
        }
        if (!is_null($countryCode) && (!preg_match("/^[A-Z]{2}$/", $countryCode))) {
            throw new \InvalidArgumentException("invalid value for $countryCode when calling TeleCheckAchPaymentMethodAchBillTo., must conform to the pattern /^[A-Z]{2}$/.");
        }

        $this->container['countryCode'] = $countryCode;

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

