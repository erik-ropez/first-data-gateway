<?php
/**
 * EmailNotificationData
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
 * EmailNotificationData Class Doc Comment
 *
 * @category Class
 * @description Object that holds data to configure email notifications.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EmailNotificationData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmailNotificationData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'enableNotification' => 'bool',
        'merchantName' => 'string',
        'receiverEmail' => 'string',
        'senderEmail' => 'string',
        'locale' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'enableNotification' => null,
        'merchantName' => null,
        'receiverEmail' => null,
        'senderEmail' => null,
        'locale' => null
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
        'enableNotification' => 'enableNotification',
        'merchantName' => 'merchantName',
        'receiverEmail' => 'receiverEmail',
        'senderEmail' => 'senderEmail',
        'locale' => 'locale'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enableNotification' => 'setEnableNotification',
        'merchantName' => 'setMerchantName',
        'receiverEmail' => 'setReceiverEmail',
        'senderEmail' => 'setSenderEmail',
        'locale' => 'setLocale'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enableNotification' => 'getEnableNotification',
        'merchantName' => 'getMerchantName',
        'receiverEmail' => 'getReceiverEmail',
        'senderEmail' => 'getSenderEmail',
        'locale' => 'getLocale'
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
        $this->container['enableNotification'] = isset($data['enableNotification']) ? $data['enableNotification'] : null;
        $this->container['merchantName'] = isset($data['merchantName']) ? $data['merchantName'] : null;
        $this->container['receiverEmail'] = isset($data['receiverEmail']) ? $data['receiverEmail'] : null;
        $this->container['senderEmail'] = isset($data['senderEmail']) ? $data['senderEmail'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
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
     * Gets enableNotification
     *
     * @return bool|null
     */
    public function getEnableNotification()
    {
        return $this->container['enableNotification'];
    }

    /**
     * Sets enableNotification
     *
     * @param bool|null $enableNotification Use this to enable/disable email notifications.
     *
     * @return $this
     */
    public function setEnableNotification($enableNotification)
    {
        $this->container['enableNotification'] = $enableNotification;

        return $this;
    }

    /**
     * Gets merchantName
     *
     * @return string|null
     */
    public function getMerchantName()
    {
        return $this->container['merchantName'];
    }

    /**
     * Sets merchantName
     *
     * @param string|null $merchantName The merchant name to be displayed in the email to customer.
     *
     * @return $this
     */
    public function setMerchantName($merchantName)
    {
        $this->container['merchantName'] = $merchantName;

        return $this;
    }

    /**
     * Gets receiverEmail
     *
     * @return string|null
     */
    public function getReceiverEmail()
    {
        return $this->container['receiverEmail'];
    }

    /**
     * Sets receiverEmail
     *
     * @param string|null $receiverEmail The email address(es) for receiving transaction notifications.
     *
     * @return $this
     */
    public function setReceiverEmail($receiverEmail)
    {
        $this->container['receiverEmail'] = $receiverEmail;

        return $this;
    }

    /**
     * Gets senderEmail
     *
     * @return string|null
     */
    public function getSenderEmail()
    {
        return $this->container['senderEmail'];
    }

    /**
     * Sets senderEmail
     *
     * @param string|null $senderEmail The email address for sending transaction notifications to customer.
     *
     * @return $this
     */
    public function setSenderEmail($senderEmail)
    {
        $this->container['senderEmail'] = $senderEmail;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string|null $locale The locale for received notifications.
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

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

