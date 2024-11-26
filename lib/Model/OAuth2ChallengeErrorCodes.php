<?php
/**
 * OAuth2ChallengeErrorCodes
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
 * OAuth2ChallengeErrorCodes Class Doc Comment
 *
 * @category Class
 * @description 21999101 &#x3D; TenantNotFound  21999102 &#x3D; IntegrationNotFound  21999103 &#x3D; UnknownExceptionWhenOAuth2Challenge  21999104 &#x3D; IntegrationIsNotEnabled  21999105 &#x3D; UnknownExceptionWhenCheckIfIntegrationIsEnabled  21999106 &#x3D; UnknownExceptionWhenFetchTenant  21999107 &#x3D; UnknownExceptionWhenTryToGetTenantTokens  21999108 &#x3D; UnknownExceptionWhenReturnResponse  21999109 &#x3D; UnknownExceptionWhenAddingTenantInKeycloak  21999110 &#x3D; UnknownExceptionWhenAddingTenantInOrganization  21999111 &#x3D; UnknownExceptionWhenTryToCreateTenantUser  21999112 &#x3D; UnknownExceptionWhenTryToCheckIfTenantUserExists
 * @package  Terapi\Client
 * @author   Terapi team
 * @link     https://github.com/terapi-integrations
 */
class OAuth2ChallengeErrorCodes
{
    /**
     * Possible values of this enum
     */
    const 21999101 = 21999101;
    const 21999102 = 21999102;
    const 21999103 = 21999103;
    const 21999104 = 21999104;
    const 21999105 = 21999105;
    const 21999106 = 21999106;
    const 21999107 = 21999107;
    const 21999108 = 21999108;
    const 21999109 = 21999109;
    const 21999110 = 21999110;
    const 21999111 = 21999111;
    const 21999112 = 21999112;
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::21999101
            self::21999102
            self::21999103
            self::21999104
            self::21999105
            self::21999106
            self::21999107
            self::21999108
            self::21999109
            self::21999110
            self::21999111
            self::21999112
        ];
    }
}
