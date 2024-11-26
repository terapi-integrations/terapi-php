<?php
/**
 * AddIntegrationToApplicationRequest
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
 * AddIntegrationToApplicationRequest Class Doc Comment
 *
 * @category Class
 * @package  Terapi\Client
 * @author   Terapi team
 * @link     https://github.com/terapi-integrations
 */
class AddIntegrationToApplicationRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $TerapiModelName = 'AddIntegrationToApplicationRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $TerapiTypes = [
        'dto' => 'AllOfAddIntegrationToApplicationRequestDto'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $TerapiFormats = [
        'dto' => null
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
        'dto' => 'dto'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dto' => 'setDto'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dto' => 'getDto'
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
        $this->container['dto'] = isset($data['dto']) ? $data['dto'] : null;
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
     * Gets dto
     *
     * @return AllOfAddIntegrationToApplicationRequestDto
     */
    public function getDto()
    {
        return $this->container['dto'];
    }

    /**
     * Sets dto
     *
     * @param AllOfAddIntegrationToApplicationRequestDto $dto dto
     *
     * @return $this
     */
    public function setDto($dto)
    {
        $this->container['dto'] = $dto;

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
