<?php
/**
 * CallActionErrorCodes
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
 * CallActionErrorCodes Class Doc Comment
 *
 * @category Class
 * @description 21997101 &#x3D; TenantNotFound  21997102 &#x3D; IntegrationNotFound  21997103 &#x3D; UnknownExceptionWhenCallingThirdPartyApi  21997104 &#x3D; UnknownExceptionWhenCallAction  21997105 &#x3D; IntegrationIsNotEnabled
 * @package  Terapi\Client
 * @author   Terapi team
 * @link     https://github.com/terapi-integrations
 */
class CallActionErrorCodes
{
    /**
     * Possible values of this enum
     */
    const 21997101 = 21997101;
    const 21997102 = 21997102;
    const 21997103 = 21997103;
    const 21997104 = 21997104;
    const 21997105 = 21997105;
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::21997101
            self::21997102
            self::21997103
            self::21997104
            self::21997105
        ];
    }
}
