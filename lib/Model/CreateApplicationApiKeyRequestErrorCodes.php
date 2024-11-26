<?php
/**
 * CreateApplicationApiKeyRequestErrorCodes
 *
 * PHP version 5
 *
 * @category Class
 * @package  Terapi\Client
 * @author   Terapi team
 * @link     https://github.com/terapi-integrations
 */

/**
 * Terapi.Web.Api-v1
 *
 * No description provided (generated by Terapi https://github.com/terapi-integrations)
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/terapi-integrations.git
 * Terapi version: 3.0.64
 */
/**
 * NOTE: This class is auto generated by the Terapi code generator program.
 * https://github.com/terapi-integrations
 * Do not edit the class manually.
 */

namespace Terapi\Client\Model;
use \Terapi\Client\ObjectSerializer;

/**
 * CreateApplicationApiKeyRequestErrorCodes Class Doc Comment
 *
 * @category Class
 * @description 16999101 &#x3D; ApplicationNotFound  16999102 &#x3D; UnknownExceptionWhenCheckApplicationExistence  16999103 &#x3D; UnknownExceptionWhenGenerateApplicationApiKey
 * @package  Terapi\Client
 * @author   Terapi team
 * @link     https://github.com/terapi-integrations
 */
class CreateApplicationApiKeyRequestErrorCodes
{
    /**
     * Possible values of this enum
     */
    const 16999101 = 16999101;
    const 16999102 = 16999102;
    const 16999103 = 16999103;
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::16999101
            self::16999102
            self::16999103
        ];
    }
}
