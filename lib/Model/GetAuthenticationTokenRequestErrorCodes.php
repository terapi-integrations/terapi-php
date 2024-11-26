<?php
/**
 * GetAuthenticationTokenRequestErrorCodes
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
 * GetAuthenticationTokenRequestErrorCodes Class Doc Comment
 *
 * @category Class
 * @description 23999101 &#x3D; UnknownExceptionWhenTryingFetchApplicationApiKey  23999102 &#x3D; FailedToFindApplicationApiKey  23999103 &#x3D; UnknownExceptionWhenTryingToGetUserAuthenticationToken
 * @package  Terapi\Client
 * @author   Terapi team
 * @link     https://github.com/terapi-integrations
 */
class GetAuthenticationTokenRequestErrorCodes
{
    /**
     * Possible values of this enum
     */
    const 23999101 = 23999101;
    const 23999102 = 23999102;
    const 23999103 = 23999103;
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::23999101
            self::23999102
            self::23999103
        ];
    }
}
