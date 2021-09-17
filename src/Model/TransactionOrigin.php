<?php
/**
 * TransactionOrigin
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
use \FirstData\FirstApi\Client\ObjectSerializer;

/**
 * TransactionOrigin Class Doc Comment
 *
 * @category Class
 * @description The source of the transaction. The possible values are ECOM (if the order was received via email or Internet), MOTO (mail order, telephone order), MAIL, PHONE and RETAIL (face to face).
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TransactionOrigin
{
    /**
     * Possible values of this enum
     */
    const ECOM = 'ECOM';
    const MOTO = 'MOTO';
    const MAIL = 'MAIL';
    const PHONE = 'PHONE';
    const RETAIL = 'RETAIL';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ECOM,
            self::MOTO,
            self::MAIL,
            self::PHONE,
            self::RETAIL,
        ];
    }
}


