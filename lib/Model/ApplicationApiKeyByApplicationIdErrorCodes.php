<?php
/**
 * ApplicationApiKeyByApplicationIdErrorCodes
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
 * ApplicationApiKeyByApplicationIdErrorCodes Class Doc Comment
 *
 * @category Class
 * @description 16995101 &#x3D; ApplicationApiKeyNotFound  16995102 &#x3D; UnknownExceptionWhenTryingFetchApplications
 * @package  Terapi\Client
 * @author   Terapi team
 * @link     https://github.com/terapi-integrations
 */
class ApplicationApiKeyByApplicationIdErrorCodes
{
    /**
     * Possible values of this enum
     */
    const 16995101 = 16995101;
    const 16995102 = 16995102;
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::16995101
            self::16995102
        ];
    }
}