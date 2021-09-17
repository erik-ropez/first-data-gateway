<?php
/**
 * StoredCredential
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
 * StoredCredential Class Doc Comment
 *
 * @category Class
 * @description Object for sending stored credentials.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StoredCredential implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StoredCredential';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sequence' => 'string',
        'scheduled' => 'bool',
        'referencedSchemeTransactionId' => 'string',
        'initiator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'sequence' => null,
        'scheduled' => null,
        'referencedSchemeTransactionId' => null,
        'initiator' => null
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
        'sequence' => 'sequence',
        'scheduled' => 'scheduled',
        'referencedSchemeTransactionId' => 'referencedSchemeTransactionId',
        'initiator' => 'initiator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sequence' => 'setSequence',
        'scheduled' => 'setScheduled',
        'referencedSchemeTransactionId' => 'setReferencedSchemeTransactionId',
        'initiator' => 'setInitiator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sequence' => 'getSequence',
        'scheduled' => 'getScheduled',
        'referencedSchemeTransactionId' => 'getReferencedSchemeTransactionId',
        'initiator' => 'getInitiator'
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

    const SEQUENCE_FIRST = 'FIRST';
    const SEQUENCE_SUBSEQUENT = 'SUBSEQUENT';
    const INITIATOR_MERCHANT = 'MERCHANT';
    const INITIATOR_CARDHOLDER = 'CARDHOLDER';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSequenceAllowableValues()
    {
        return [
            self::SEQUENCE_FIRST,
            self::SEQUENCE_SUBSEQUENT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInitiatorAllowableValues()
    {
        return [
            self::INITIATOR_MERCHANT,
            self::INITIATOR_CARDHOLDER,
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
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['scheduled'] = isset($data['scheduled']) ? $data['scheduled'] : null;
        $this->container['referencedSchemeTransactionId'] = isset($data['referencedSchemeTransactionId']) ? $data['referencedSchemeTransactionId'] : null;
        $this->container['initiator'] = isset($data['initiator']) ? $data['initiator'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sequence'] === null) {
            $invalidProperties[] = "'sequence' can't be null";
        }
        $allowedValues = $this->getSequenceAllowableValues();
        if (!is_null($this->container['sequence']) && !in_array($this->container['sequence'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sequence', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['scheduled'] === null) {
            $invalidProperties[] = "'scheduled' can't be null";
        }
        if (!is_null($this->container['referencedSchemeTransactionId']) && (mb_strlen($this->container['referencedSchemeTransactionId']) > 50)) {
            $invalidProperties[] = "invalid value for 'referencedSchemeTransactionId', the character length must be smaller than or equal to 50.";
        }

        $allowedValues = $this->getInitiatorAllowableValues();
        if (!is_null($this->container['initiator']) && !in_array($this->container['initiator'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'initiator', must be one of '%s'",
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
     * Gets sequence
     *
     * @return string
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     *
     * @param string $sequence Indicates if the transaction is first or subsequent. Valid values are 'FIRST' and 'SUBSEQUENT'.
     *
     * @return $this
     */
    public function setSequence($sequence)
    {
        $allowedValues = $this->getSequenceAllowableValues();
        if (!in_array($sequence, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sequence', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sequence'] = $sequence;

        return $this;
    }

    /**
     * Gets scheduled
     *
     * @return bool
     */
    public function getScheduled()
    {
        return $this->container['scheduled'];
    }

    /**
     * Sets scheduled
     *
     * @param bool $scheduled Indicates if the transaction is scheduled or part of an installment.
     *
     * @return $this
     */
    public function setScheduled($scheduled)
    {
        $this->container['scheduled'] = $scheduled;

        return $this;
    }

    /**
     * Gets referencedSchemeTransactionId
     *
     * @return string|null
     */
    public function getReferencedSchemeTransactionId()
    {
        return $this->container['referencedSchemeTransactionId'];
    }

    /**
     * Sets referencedSchemeTransactionId
     *
     * @param string|null $referencedSchemeTransactionId The transaction ID received from schemes for the initial transaction. May be required if sequence is 'SUBSEQUENT'.
     *
     * @return $this
     */
    public function setReferencedSchemeTransactionId($referencedSchemeTransactionId)
    {
        if (!is_null($referencedSchemeTransactionId) && (mb_strlen($referencedSchemeTransactionId) > 50)) {
            throw new \InvalidArgumentException('invalid length for $referencedSchemeTransactionId when calling StoredCredential., must be smaller than or equal to 50.');
        }

        $this->container['referencedSchemeTransactionId'] = $referencedSchemeTransactionId;

        return $this;
    }

    /**
     * Gets initiator
     *
     * @return string|null
     */
    public function getInitiator()
    {
        return $this->container['initiator'];
    }

    /**
     * Sets initiator
     *
     * @param string|null $initiator Indicates whether it is a merchant-initiated or explicitly consented to by card holder. Valid values are 'MERCHANT' and 'CARDHOLDER'.
     *
     * @return $this
     */
    public function setInitiator($initiator)
    {
        $allowedValues = $this->getInitiatorAllowableValues();
        if (!is_null($initiator) && !in_array($initiator, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'initiator', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['initiator'] = $initiator;

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


