<?php
/**
 * CreateApplicationRequestDto
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

use \ArrayAccess;
use \Terapi\Client\ObjectSerializer;

/**
 * CreateApplicationRequestDto Class Doc Comment
 *
 * @category Class
 * @package  Terapi\Client
 * @author   Terapi team
 * @link     https://github.com/terapi-integrations
 */
class CreateApplicationRequestDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $TerapiModelName = 'CreateApplicationRequestDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $TerapiTypes = [
        'name' => 'string',
        'description' => 'string',
        'category' => 'string',
        'official_landing_url' => 'string',
        'redirect_base_url' => 'string',
        'privacy_policy_url' => 'string',
        'end_user_license_agreement_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $TerapiFormats = [
        'name' => null,
        'description' => null,
        'category' => null,
        'official_landing_url' => null,
        'redirect_base_url' => null,
        'privacy_policy_url' => null,
        'end_user_license_agreement_url' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function TerapiTypes()
    {
        return self::$TerapiTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function TerapiFormats()
    {
        return self::$TerapiFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'description' => 'description',
        'category' => 'category',
        'official_landing_url' => 'officialLandingUrl',
        'redirect_base_url' => 'redirectBaseUrl',
        'privacy_policy_url' => 'privacyPolicyUrl',
        'end_user_license_agreement_url' => 'endUserLicenseAgreementUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'category' => 'setCategory',
        'official_landing_url' => 'setOfficialLandingUrl',
        'redirect_base_url' => 'setRedirectBaseUrl',
        'privacy_policy_url' => 'setPrivacyPolicyUrl',
        'end_user_license_agreement_url' => 'setEndUserLicenseAgreementUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'category' => 'getCategory',
        'official_landing_url' => 'getOfficialLandingUrl',
        'redirect_base_url' => 'getRedirectBaseUrl',
        'privacy_policy_url' => 'getPrivacyPolicyUrl',
        'end_user_license_agreement_url' => 'getEndUserLicenseAgreementUrl'
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
        return self::$TerapiModelName;
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['official_landing_url'] = isset($data['official_landing_url']) ? $data['official_landing_url'] : null;
        $this->container['redirect_base_url'] = isset($data['redirect_base_url']) ? $data['redirect_base_url'] : null;
        $this->container['privacy_policy_url'] = isset($data['privacy_policy_url']) ? $data['privacy_policy_url'] : null;
        $this->container['end_user_license_agreement_url'] = isset($data['end_user_license_agreement_url']) ? $data['end_user_license_agreement_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets official_landing_url
     *
     * @return string
     */
    public function getOfficialLandingUrl()
    {
        return $this->container['official_landing_url'];
    }

    /**
     * Sets official_landing_url
     *
     * @param string $official_landing_url official_landing_url
     *
     * @return $this
     */
    public function setOfficialLandingUrl($official_landing_url)
    {
        $this->container['official_landing_url'] = $official_landing_url;

        return $this;
    }

    /**
     * Gets redirect_base_url
     *
     * @return string
     */
    public function getRedirectBaseUrl()
    {
        return $this->container['redirect_base_url'];
    }

    /**
     * Sets redirect_base_url
     *
     * @param string $redirect_base_url redirect_base_url
     *
     * @return $this
     */
    public function setRedirectBaseUrl($redirect_base_url)
    {
        $this->container['redirect_base_url'] = $redirect_base_url;

        return $this;
    }

    /**
     * Gets privacy_policy_url
     *
     * @return string
     */
    public function getPrivacyPolicyUrl()
    {
        return $this->container['privacy_policy_url'];
    }

    /**
     * Sets privacy_policy_url
     *
     * @param string $privacy_policy_url privacy_policy_url
     *
     * @return $this
     */
    public function setPrivacyPolicyUrl($privacy_policy_url)
    {
        $this->container['privacy_policy_url'] = $privacy_policy_url;

        return $this;
    }

    /**
     * Gets end_user_license_agreement_url
     *
     * @return string
     */
    public function getEndUserLicenseAgreementUrl()
    {
        return $this->container['end_user_license_agreement_url'];
    }

    /**
     * Sets end_user_license_agreement_url
     *
     * @param string $end_user_license_agreement_url end_user_license_agreement_url
     *
     * @return $this
     */
    public function setEndUserLicenseAgreementUrl($end_user_license_agreement_url)
    {
        $this->container['end_user_license_agreement_url'] = $end_user_license_agreement_url;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}