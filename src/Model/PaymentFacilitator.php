<?php
/**
 * PaymentFacilitator
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
 * PaymentFacilitator Class Doc Comment
 *
 * @category Class
 * @description Payment facilitator details provided by the merchant.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentFacilitator implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentFacilitator';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'externalMerchantId' => 'string',
        'paymentFacilitatorId' => 'string',
        'saleOrganizationId' => 'string',
        'name' => 'string',
        'subMerchantData' => '\FirstData\FirstApi\Client\Model\SubMerchantData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'externalMerchantId' => null,
        'paymentFacilitatorId' => null,
        'saleOrganizationId' => null,
        'name' => null,
        'subMerchantData' => null
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
        'externalMerchantId' => 'externalMerchantId',
        'paymentFacilitatorId' => 'paymentFacilitatorId',
        'saleOrganizationId' => 'saleOrganizationId',
        'name' => 'name',
        'subMerchantData' => 'subMerchantData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'externalMerchantId' => 'setExternalMerchantId',
        'paymentFacilitatorId' => 'setPaymentFacilitatorId',
        'saleOrganizationId' => 'setSaleOrganizationId',
        'name' => 'setName',
        'subMerchantData' => 'setSubMerchantData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'externalMerchantId' => 'getExternalMerchantId',
        'paymentFacilitatorId' => 'getPaymentFacilitatorId',
        'saleOrganizationId' => 'getSaleOrganizationId',
        'name' => 'getName',
        'subMerchantData' => 'getSubMerchantData'
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
        $this->container['externalMerchantId'] = isset($data['externalMerchantId']) ? $data['externalMerchantId'] : null;
        $this->container['paymentFacilitatorId'] = isset($data['paymentFacilitatorId']) ? $data['paymentFacilitatorId'] : null;
        $this->container['saleOrganizationId'] = isset($data['saleOrganizationId']) ? $data['saleOrganizationId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['subMerchantData'] = isset($data['subMerchantData']) ? $data['subMerchantData'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['externalMerchantId'] === null) {
            $invalidProperties[] = "'externalMerchantId' can't be null";
        }
        if (!preg_match("/^(?!\\s*$).+/", $this->container['externalMerchantId'])) {
            $invalidProperties[] = "invalid value for 'externalMerchantId', must be conform to the pattern /^(?!\\s*$).+/.";
        }

        if ($this->container['paymentFacilitatorId'] === null) {
            $invalidProperties[] = "'paymentFacilitatorId' can't be null";
        }
        if (!preg_match("/\\d{1,11}/", $this->container['paymentFacilitatorId'])) {
            $invalidProperties[] = "invalid value for 'paymentFacilitatorId', must be conform to the pattern /\\d{1,11}/.";
        }

        if (!is_null($this->container['saleOrganizationId']) && !preg_match("/\\d{1,11}/", $this->container['saleOrganizationId'])) {
            $invalidProperties[] = "invalid value for 'saleOrganizationId', must be conform to the pattern /\\d{1,11}/.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 50)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
        }

        if (!preg_match("/^(?!\\s*$).+/", $this->container['name'])) {
            $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^(?!\\s*$).+/.";
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
     * Gets externalMerchantId
     *
     * @return string
     */
    public function getExternalMerchantId()
    {
        return $this->container['externalMerchantId'];
    }

    /**
     * Sets externalMerchantId
     *
     * @param string $externalMerchantId External merchant ID of the payment facilitator.
     *
     * @return $this
     */
    public function setExternalMerchantId($externalMerchantId)
    {

        if ((!preg_match("/^(?!\\s*$).+/", $externalMerchantId))) {
            throw new \InvalidArgumentException("invalid value for $externalMerchantId when calling PaymentFacilitator., must conform to the pattern /^(?!\\s*$).+/.");
        }

        $this->container['externalMerchantId'] = $externalMerchantId;

        return $this;
    }

    /**
     * Gets paymentFacilitatorId
     *
     * @return string
     */
    public function getPaymentFacilitatorId()
    {
        return $this->container['paymentFacilitatorId'];
    }

    /**
     * Sets paymentFacilitatorId
     *
     * @param string $paymentFacilitatorId Payment facilitator ID supplied during boarding.
     *
     * @return $this
     */
    public function setPaymentFacilitatorId($paymentFacilitatorId)
    {

        if ((!preg_match("/\\d{1,11}/", $paymentFacilitatorId))) {
            throw new \InvalidArgumentException("invalid value for $paymentFacilitatorId when calling PaymentFacilitator., must conform to the pattern /\\d{1,11}/.");
        }

        $this->container['paymentFacilitatorId'] = $paymentFacilitatorId;

        return $this;
    }

    /**
     * Gets saleOrganizationId
     *
     * @return string|null
     */
    public function getSaleOrganizationId()
    {
        return $this->container['saleOrganizationId'];
    }

    /**
     * Sets saleOrganizationId
     *
     * @param string|null $saleOrganizationId Independent sales organization (ISO) ID provided by Mastercard.
     *
     * @return $this
     */
    public function setSaleOrganizationId($saleOrganizationId)
    {

        if (!is_null($saleOrganizationId) && (!preg_match("/\\d{1,11}/", $saleOrganizationId))) {
            throw new \InvalidArgumentException("invalid value for $saleOrganizationId when calling PaymentFacilitator., must conform to the pattern /\\d{1,11}/.");
        }

        $this->container['saleOrganizationId'] = $saleOrganizationId;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Payment facilitator name.
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name when calling PaymentFacilitator., must be smaller than or equal to 50.');
        }
        if ((!preg_match("/^(?!\\s*$).+/", $name))) {
            throw new \InvalidArgumentException("invalid value for $name when calling PaymentFacilitator., must conform to the pattern /^(?!\\s*$).+/.");
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets subMerchantData
     *
     * @return \FirstData\FirstApi\Client\Model\SubMerchantData|null
     */
    public function getSubMerchantData()
    {
        return $this->container['subMerchantData'];
    }

    /**
     * Sets subMerchantData
     *
     * @param \FirstData\FirstApi\Client\Model\SubMerchantData|null $subMerchantData subMerchantData
     *
     * @return $this
     */
    public function setSubMerchantData($subMerchantData)
    {
        $this->container['subMerchantData'] = $subMerchantData;

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


