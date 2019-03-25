<?php
/**
 * TransactionResponse
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
 * Payment Gateway API for payment processing. Version 6.4.0.20181018.001
 *
 * OpenAPI spec version: 6.4.0.20181018.001
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
use \FirstData\FirstApi\Client\ObjectSerializer;

/**
 * TransactionResponse Class Doc Comment
 *
 * @category Class
 * @description This is the common object for primary and secondary payment request responses.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TransactionResponse extends BasicResponse 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ipgTransactionId' => 'string',
        'orderId' => 'string',
        'transactionType' => '\FirstData\FirstApi\Client\Model\TransactionType',
        'paymentToken' => '\FirstData\FirstApi\Client\Model\PaymentTokenization',
        'transactionOrigin' => '\FirstData\FirstApi\Client\Model\TransactionOrigin',
        'paymentMethod' => '\FirstData\FirstApi\Client\Model\PaymentMethod',
        'country' => 'string',
        'terminalId' => 'string',
        'merchantTransactionId' => 'string',
        'transactionTime' => 'int',
        'approvedAmount' => '\FirstData\FirstApi\Client\Model\Amount',
        'transactionStatus' => 'string',
        'transactionState' => 'string',
        'secure3dResponse' => '\FirstData\FirstApi\Client\Model\Secure3dResponse',
        'redirectURL' => 'string',
        'authenticationRedirect' => 'object',
        'schemeTransactionId' => 'string',
        'processor' => '\FirstData\FirstApi\Client\Model\ProcessorData',
        'additionalDetails' => '\FirstData\FirstApi\Client\Model\AdditionalTransactionDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'ipgTransactionId' => null,
        'orderId' => null,
        'transactionType' => null,
        'paymentToken' => null,
        'transactionOrigin' => null,
        'paymentMethod' => null,
        'country' => null,
        'terminalId' => null,
        'merchantTransactionId' => null,
        'transactionTime' => 'int64',
        'approvedAmount' => null,
        'transactionStatus' => null,
        'transactionState' => null,
        'secure3dResponse' => null,
        'redirectURL' => null,
        'authenticationRedirect' => null,
        'schemeTransactionId' => null,
        'processor' => null,
        'additionalDetails' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'ipgTransactionId' => 'ipgTransactionId',
        'orderId' => 'orderId',
        'transactionType' => 'transactionType',
        'paymentToken' => 'paymentToken',
        'transactionOrigin' => 'transactionOrigin',
        'paymentMethod' => 'paymentMethod',
        'country' => 'country',
        'terminalId' => 'terminalId',
        'merchantTransactionId' => 'merchantTransactionId',
        'transactionTime' => 'transactionTime',
        'approvedAmount' => 'approvedAmount',
        'transactionStatus' => 'transactionStatus',
        'transactionState' => 'transactionState',
        'secure3dResponse' => 'secure3dResponse',
        'redirectURL' => 'redirectURL',
        'authenticationRedirect' => 'authenticationRedirect',
        'schemeTransactionId' => 'schemeTransactionId',
        'processor' => 'processor',
        'additionalDetails' => 'additionalDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ipgTransactionId' => 'setIpgTransactionId',
        'orderId' => 'setOrderId',
        'transactionType' => 'setTransactionType',
        'paymentToken' => 'setPaymentToken',
        'transactionOrigin' => 'setTransactionOrigin',
        'paymentMethod' => 'setPaymentMethod',
        'country' => 'setCountry',
        'terminalId' => 'setTerminalId',
        'merchantTransactionId' => 'setMerchantTransactionId',
        'transactionTime' => 'setTransactionTime',
        'approvedAmount' => 'setApprovedAmount',
        'transactionStatus' => 'setTransactionStatus',
        'transactionState' => 'setTransactionState',
        'secure3dResponse' => 'setSecure3dResponse',
        'redirectURL' => 'setRedirectURL',
        'authenticationRedirect' => 'setAuthenticationRedirect',
        'schemeTransactionId' => 'setSchemeTransactionId',
        'processor' => 'setProcessor',
        'additionalDetails' => 'setAdditionalDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ipgTransactionId' => 'getIpgTransactionId',
        'orderId' => 'getOrderId',
        'transactionType' => 'getTransactionType',
        'paymentToken' => 'getPaymentToken',
        'transactionOrigin' => 'getTransactionOrigin',
        'paymentMethod' => 'getPaymentMethod',
        'country' => 'getCountry',
        'terminalId' => 'getTerminalId',
        'merchantTransactionId' => 'getMerchantTransactionId',
        'transactionTime' => 'getTransactionTime',
        'approvedAmount' => 'getApprovedAmount',
        'transactionStatus' => 'getTransactionStatus',
        'transactionState' => 'getTransactionState',
        'secure3dResponse' => 'getSecure3dResponse',
        'redirectURL' => 'getRedirectURL',
        'authenticationRedirect' => 'getAuthenticationRedirect',
        'schemeTransactionId' => 'getSchemeTransactionId',
        'processor' => 'getProcessor',
        'additionalDetails' => 'getAdditionalDetails'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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

    const TRANSACTION_STATUS_APPROVED = 'APPROVED';
    const TRANSACTION_STATUS_WAITING = 'WAITING';
    const TRANSACTION_STATUS_VALIDATION_FAILED = 'VALIDATION_FAILED';
    const TRANSACTION_STATUS_PROCESSING_FAILED = 'PROCESSING_FAILED';
    const TRANSACTION_STATUS_DECLINED = 'DECLINED';
    const TRANSACTION_STATE_AUTHORIZED = 'AUTHORIZED';
    const TRANSACTION_STATE_CAPTURED = 'CAPTURED';
    const TRANSACTION_STATE_DECLINED = 'DECLINED';
    const TRANSACTION_STATE_CHECKED = 'CHECKED';
    const TRANSACTION_STATE_INITIALIZED = 'INITIALIZED';
    const TRANSACTION_STATE_PENDING = 'PENDING';
    const TRANSACTION_STATE_READY = 'READY';
    const TRANSACTION_STATE_SETTLED = 'SETTLED';
    const TRANSACTION_STATE_VOIDED = 'VOIDED';
    const TRANSACTION_STATE_WAITING = 'WAITING';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransactionStatusAllowableValues()
    {
        return [
            self::TRANSACTION_STATUS_APPROVED,
            self::TRANSACTION_STATUS_WAITING,
            self::TRANSACTION_STATUS_VALIDATION_FAILED,
            self::TRANSACTION_STATUS_PROCESSING_FAILED,
            self::TRANSACTION_STATUS_DECLINED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransactionStateAllowableValues()
    {
        return [
            self::TRANSACTION_STATE_AUTHORIZED,
            self::TRANSACTION_STATE_CAPTURED,
            self::TRANSACTION_STATE_DECLINED,
            self::TRANSACTION_STATE_CHECKED,
            self::TRANSACTION_STATE_INITIALIZED,
            self::TRANSACTION_STATE_PENDING,
            self::TRANSACTION_STATE_READY,
            self::TRANSACTION_STATE_SETTLED,
            self::TRANSACTION_STATE_VOIDED,
            self::TRANSACTION_STATE_WAITING,
        ];
    }
    


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['ipgTransactionId'] = isset($data['ipgTransactionId']) ? $data['ipgTransactionId'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['transactionType'] = isset($data['transactionType']) ? $data['transactionType'] : null;
        $this->container['paymentToken'] = isset($data['paymentToken']) ? $data['paymentToken'] : null;
        $this->container['transactionOrigin'] = isset($data['transactionOrigin']) ? $data['transactionOrigin'] : null;
        $this->container['paymentMethod'] = isset($data['paymentMethod']) ? $data['paymentMethod'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['terminalId'] = isset($data['terminalId']) ? $data['terminalId'] : null;
        $this->container['merchantTransactionId'] = isset($data['merchantTransactionId']) ? $data['merchantTransactionId'] : null;
        $this->container['transactionTime'] = isset($data['transactionTime']) ? $data['transactionTime'] : null;
        $this->container['approvedAmount'] = isset($data['approvedAmount']) ? $data['approvedAmount'] : null;
        $this->container['transactionStatus'] = isset($data['transactionStatus']) ? $data['transactionStatus'] : null;
        $this->container['transactionState'] = isset($data['transactionState']) ? $data['transactionState'] : null;
        $this->container['secure3dResponse'] = isset($data['secure3dResponse']) ? $data['secure3dResponse'] : null;
        $this->container['redirectURL'] = isset($data['redirectURL']) ? $data['redirectURL'] : null;
        $this->container['authenticationRedirect'] = isset($data['authenticationRedirect']) ? $data['authenticationRedirect'] : null;
        $this->container['schemeTransactionId'] = isset($data['schemeTransactionId']) ? $data['schemeTransactionId'] : null;
        $this->container['processor'] = isset($data['processor']) ? $data['processor'] : null;
        $this->container['additionalDetails'] = isset($data['additionalDetails']) ? $data['additionalDetails'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if (!is_null($this->container['merchantTransactionId']) && (mb_strlen($this->container['merchantTransactionId']) > 40)) {
            $invalidProperties[] = "invalid value for 'merchantTransactionId', the character length must be smaller than or equal to 40.";
        }

        $allowedValues = $this->getTransactionStatusAllowableValues();
        if (!is_null($this->container['transactionStatus']) && !in_array($this->container['transactionStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'transactionStatus', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTransactionStateAllowableValues();
        if (!is_null($this->container['transactionState']) && !in_array($this->container['transactionState'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'transactionState', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['schemeTransactionId']) && (mb_strlen($this->container['schemeTransactionId']) > 40)) {
            $invalidProperties[] = "invalid value for 'schemeTransactionId', the character length must be smaller than or equal to 40.";
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
     * Gets ipgTransactionId
     *
     * @return string|null
     */
    public function getIpgTransactionId()
    {
        return $this->container['ipgTransactionId'];
    }

    /**
     * Sets ipgTransactionId
     *
     * @param string|null $ipgTransactionId The Response Transaction ID
     *
     * @return $this
     */
    public function setIpgTransactionId($ipgTransactionId)
    {
        $this->container['ipgTransactionId'] = $ipgTransactionId;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string|null $orderId Client Order ID if supplied by client, otherwise the Order ID
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets transactionType
     *
     * @return \FirstData\FirstApi\Client\Model\TransactionType|null
     */
    public function getTransactionType()
    {
        return $this->container['transactionType'];
    }

    /**
     * Sets transactionType
     *
     * @param \FirstData\FirstApi\Client\Model\TransactionType|null $transactionType transactionType
     *
     * @return $this
     */
    public function setTransactionType($transactionType)
    {
        $this->container['transactionType'] = $transactionType;

        return $this;
    }

    /**
     * Gets paymentToken
     *
     * @return \FirstData\FirstApi\Client\Model\PaymentTokenization|null
     */
    public function getPaymentToken()
    {
        return $this->container['paymentToken'];
    }

    /**
     * Sets paymentToken
     *
     * @param \FirstData\FirstApi\Client\Model\PaymentTokenization|null $paymentToken paymentToken
     *
     * @return $this
     */
    public function setPaymentToken($paymentToken)
    {
        $this->container['paymentToken'] = $paymentToken;

        return $this;
    }

    /**
     * Gets transactionOrigin
     *
     * @return \FirstData\FirstApi\Client\Model\TransactionOrigin|null
     */
    public function getTransactionOrigin()
    {
        return $this->container['transactionOrigin'];
    }

    /**
     * Sets transactionOrigin
     *
     * @param \FirstData\FirstApi\Client\Model\TransactionOrigin|null $transactionOrigin transactionOrigin
     *
     * @return $this
     */
    public function setTransactionOrigin($transactionOrigin)
    {
        $this->container['transactionOrigin'] = $transactionOrigin;

        return $this;
    }

    /**
     * Gets paymentMethod
     *
     * @return \FirstData\FirstApi\Client\Model\PaymentMethod|null
     */
    public function getPaymentMethod()
    {
        return $this->container['paymentMethod'];
    }

    /**
     * Sets paymentMethod
     *
     * @param \FirstData\FirstApi\Client\Model\PaymentMethod|null $paymentMethod paymentMethod
     *
     * @return $this
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->container['paymentMethod'] = $paymentMethod;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country Country of the card issuer
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets terminalId
     *
     * @return string|null
     */
    public function getTerminalId()
    {
        return $this->container['terminalId'];
    }

    /**
     * Sets terminalId
     *
     * @param string|null $terminalId The terminal that is processing the transaction
     *
     * @return $this
     */
    public function setTerminalId($terminalId)
    {
        $this->container['terminalId'] = $terminalId;

        return $this;
    }

    /**
     * Gets merchantTransactionId
     *
     * @return string|null
     */
    public function getMerchantTransactionId()
    {
        return $this->container['merchantTransactionId'];
    }

    /**
     * Sets merchantTransactionId
     *
     * @param string|null $merchantTransactionId The unique merchant Transaction ID from the Request header, if supplied
     *
     * @return $this
     */
    public function setMerchantTransactionId($merchantTransactionId)
    {
        if (!is_null($merchantTransactionId) && (mb_strlen($merchantTransactionId) > 40)) {
            throw new \InvalidArgumentException('invalid length for $merchantTransactionId when calling TransactionResponse., must be smaller than or equal to 40.');
        }

        $this->container['merchantTransactionId'] = $merchantTransactionId;

        return $this;
    }

    /**
     * Gets transactionTime
     *
     * @return int|null
     */
    public function getTransactionTime()
    {
        return $this->container['transactionTime'];
    }

    /**
     * Sets transactionTime
     *
     * @param int|null $transactionTime The transaction time in seconds since Epoch
     *
     * @return $this
     */
    public function setTransactionTime($transactionTime)
    {
        $this->container['transactionTime'] = $transactionTime;

        return $this;
    }

    /**
     * Gets approvedAmount
     *
     * @return \FirstData\FirstApi\Client\Model\Amount|null
     */
    public function getApprovedAmount()
    {
        return $this->container['approvedAmount'];
    }

    /**
     * Sets approvedAmount
     *
     * @param \FirstData\FirstApi\Client\Model\Amount|null $approvedAmount approvedAmount
     *
     * @return $this
     */
    public function setApprovedAmount($approvedAmount)
    {
        $this->container['approvedAmount'] = $approvedAmount;

        return $this;
    }

    /**
     * Gets transactionStatus
     *
     * @return string|null
     */
    public function getTransactionStatus()
    {
        return $this->container['transactionStatus'];
    }

    /**
     * Sets transactionStatus
     *
     * @param string|null $transactionStatus The status of the transaction. APPROVED/WAITING are returned by the endpoints.  VALIDATION_FAILED/DECLINED are errors. See ErrorResponse object for details.
     *
     * @return $this
     */
    public function setTransactionStatus($transactionStatus)
    {
        $allowedValues = $this->getTransactionStatusAllowableValues();
        if (!is_null($transactionStatus) && !in_array($transactionStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'transactionStatus', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transactionStatus'] = $transactionStatus;

        return $this;
    }

    /**
     * Gets transactionState
     *
     * @return string|null
     */
    public function getTransactionState()
    {
        return $this->container['transactionState'];
    }

    /**
     * Sets transactionState
     *
     * @param string|null $transactionState The state of the transaction.
     *
     * @return $this
     */
    public function setTransactionState($transactionState)
    {
        $allowedValues = $this->getTransactionStateAllowableValues();
        if (!is_null($transactionState) && !in_array($transactionState, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'transactionState', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transactionState'] = $transactionState;

        return $this;
    }

    /**
     * Gets secure3dResponse
     *
     * @return \FirstData\FirstApi\Client\Model\Secure3dResponse|null
     */
    public function getSecure3dResponse()
    {
        return $this->container['secure3dResponse'];
    }

    /**
     * Sets secure3dResponse
     *
     * @param \FirstData\FirstApi\Client\Model\Secure3dResponse|null $secure3dResponse secure3dResponse
     *
     * @return $this
     */
    public function setSecure3dResponse($secure3dResponse)
    {
        $this->container['secure3dResponse'] = $secure3dResponse;

        return $this;
    }

    /**
     * Gets redirectURL
     *
     * @return string|null
     */
    public function getRedirectURL()
    {
        return $this->container['redirectURL'];
    }

    /**
     * Sets redirectURL
     *
     * @param string|null $redirectURL The endpoint redirection URL.
     *
     * @return $this
     */
    public function setRedirectURL($redirectURL)
    {
        $this->container['redirectURL'] = $redirectURL;

        return $this;
    }

    /**
     * Gets authenticationRedirect
     *
     * @return object|null
     */
    public function getAuthenticationRedirect()
    {
        return $this->container['authenticationRedirect'];
    }

    /**
     * Sets authenticationRedirect
     *
     * @param object|null $authenticationRedirect authenticationRedirect
     *
     * @return $this
     */
    public function setAuthenticationRedirect($authenticationRedirect)
    {
        $this->container['authenticationRedirect'] = $authenticationRedirect;

        return $this;
    }

    /**
     * Gets schemeTransactionId
     *
     * @return string|null
     */
    public function getSchemeTransactionId()
    {
        return $this->container['schemeTransactionId'];
    }

    /**
     * Sets schemeTransactionId
     *
     * @param string|null $schemeTransactionId The transaction ID received from schemes for the initial transaction of card on file flows.
     *
     * @return $this
     */
    public function setSchemeTransactionId($schemeTransactionId)
    {
        if (!is_null($schemeTransactionId) && (mb_strlen($schemeTransactionId) > 40)) {
            throw new \InvalidArgumentException('invalid length for $schemeTransactionId when calling TransactionResponse., must be smaller than or equal to 40.');
        }

        $this->container['schemeTransactionId'] = $schemeTransactionId;

        return $this;
    }

    /**
     * Gets processor
     *
     * @return \FirstData\FirstApi\Client\Model\ProcessorData|null
     */
    public function getProcessor()
    {
        return $this->container['processor'];
    }

    /**
     * Sets processor
     *
     * @param \FirstData\FirstApi\Client\Model\ProcessorData|null $processor processor
     *
     * @return $this
     */
    public function setProcessor($processor)
    {
        $this->container['processor'] = $processor;

        return $this;
    }

    /**
     * Gets additionalDetails
     *
     * @return \FirstData\FirstApi\Client\Model\AdditionalTransactionDetails|null
     */
    public function getAdditionalDetails()
    {
        return $this->container['additionalDetails'];
    }

    /**
     * Sets additionalDetails
     *
     * @param \FirstData\FirstApi\Client\Model\AdditionalTransactionDetails|null $additionalDetails additionalDetails
     *
     * @return $this
     */
    public function setAdditionalDetails($additionalDetails)
    {
        $this->container['additionalDetails'] = $additionalDetails;

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


