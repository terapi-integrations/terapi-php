<?php
/**
 * UserTenantListRequestErrorCodes
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
 * UserTenantListRequestErrorCodes Class Doc Comment
 *
 * @category Class
 * @description 20999101 &#x3D; UnknownExceptionWhenTryingFetchTenants  20999102 &#x3D; UserNotFound  20999103 &#x3D; UnknownExceptionWhenInsertApplication
 * @package  Terapi\Client
 * @author   Terapi team
 * @link     https://github.com/terapi-integrations
 */
class UserTenantListRequestErrorCodes
{
    /**
     * Possible values of this enum
     */
    const 20999101 = 20999101;
    const 20999102 = 20999102;
    const 20999103 = 20999103;
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::20999101
            self::20999102
            self::20999103
        ];
    }
}
