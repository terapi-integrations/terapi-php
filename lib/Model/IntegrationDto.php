<?php
/**
 * IntegrationDto
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
 * IntegrationDto Class Doc Comment
 *
 * @category Class
 * @package  Terapi\Client
 * @author   Terapi team
 * @link     https://github.com/terapi-integrations
 */
class IntegrationDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $TerapiModelName = 'IntegrationDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $TerapiTypes = [
        'id' => 'string',
        'title' => 'string',
        'name_identifier' => 'string',
        'short_description' => 'string',
        'icon' => 'string',
        'release_status' => 'AllOfIntegrationDtoReleaseStatus',
        'launch_date' => '\DateTime',
        'documentation_url' => 'string',
        'Terapi_url' => 'string',
        'integration_endpoints' => '\Terapi\Client\Model\IntegrationEndpointDto[]',
        'integration_events' => '\Terapi\Client\Model\IntegrationEventDto[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $TerapiFormats = [
        'id' => 'uuid',
        'title' => null,
        'name_identifier' => null,
        'short_description' => null,
        'icon' => null,
        'release_status' => null,
        'launch_date' => 'date-time',
        'documentation_url' => null,
        'Terapi_url' => null,
        'integration_endpoints' => null,
        'integration_events' => null
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
        'id' => 'id',
        'title' => 'title',
        'name_identifier' => 'nameIdentifier',
        'short_description' => 'shortDescription',
        'icon' => 'icon',
        'release_status' => 'releaseStatus',
        'launch_date' => 'launchDate',
        'documentation_url' => 'documentationUrl',
        'Terapi_url' => 'TerapiUrl',
        'integration_endpoints' => 'integrationEndpoints',
        'integration_events' => 'integrationEvents'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'name_identifier' => 'setNameIdentifier',
        'short_description' => 'setShortDescription',
        'icon' => 'setIcon',
        'release_status' => 'setReleaseStatus',
        'launch_date' => 'setLaunchDate',
        'documentation_url' => 'setDocumentationUrl',
        'Terapi_url' => 'setTerapiUrl',
        'integration_endpoints' => 'setIntegrationEndpoints',
        'integration_events' => 'setIntegrationEvents'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'name_identifier' => 'getNameIdentifier',
        'short_description' => 'getShortDescription',
        'icon' => 'getIcon',
        'release_status' => 'getReleaseStatus',
        'launch_date' => 'getLaunchDate',
        'documentation_url' => 'getDocumentationUrl',
        'Terapi_url' => 'getTerapiUrl',
        'integration_endpoints' => 'getIntegrationEndpoints',
        'integration_events' => 'getIntegrationEvents'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['name_identifier'] = isset($data['name_identifier']) ? $data['name_identifier'] : null;
        $this->container['short_description'] = isset($data['short_description']) ? $data['short_description'] : null;
        $this->container['icon'] = isset($data['icon']) ? $data['icon'] : null;
        $this->container['release_status'] = isset($data['release_status']) ? $data['release_status'] : null;
        $this->container['launch_date'] = isset($data['launch_date']) ? $data['launch_date'] : null;
        $this->container['documentation_url'] = isset($data['documentation_url']) ? $data['documentation_url'] : null;
        $this->container['Terapi_url'] = isset($data['Terapi_url']) ? $data['Terapi_url'] : null;
        $this->container['integration_endpoints'] = isset($data['integration_endpoints']) ? $data['integration_endpoints'] : null;
        $this->container['integration_events'] = isset($data['integration_events']) ? $data['integration_events'] : null;
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets name_identifier
     *
     * @return string
     */
    public function getNameIdentifier()
    {
        return $this->container['name_identifier'];
    }

    /**
     * Sets name_identifier
     *
     * @param string $name_identifier name_identifier
     *
     * @return $this
     */
    public function setNameIdentifier($name_identifier)
    {
        $this->container['name_identifier'] = $name_identifier;

        return $this;
    }

    /**
     * Gets short_description
     *
     * @return string
     */
    public function getShortDescription()
    {
        return $this->container['short_description'];
    }

    /**
     * Sets short_description
     *
     * @param string $short_description short_description
     *
     * @return $this
     */
    public function setShortDescription($short_description)
    {
        $this->container['short_description'] = $short_description;

        return $this;
    }

    /**
     * Gets icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param string $icon icon
     *
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets release_status
     *
     * @return AllOfIntegrationDtoReleaseStatus
     */
    public function getReleaseStatus()
    {
        return $this->container['release_status'];
    }

    /**
     * Sets release_status
     *
     * @param AllOfIntegrationDtoReleaseStatus $release_status 0 = Released  1 = Pending  2 = NotPlanned
     *
     * @return $this
     */
    public function setReleaseStatus($release_status)
    {
        $this->container['release_status'] = $release_status;

        return $this;
    }

    /**
     * Gets launch_date
     *
     * @return \DateTime
     */
    public function getLaunchDate()
    {
        return $this->container['launch_date'];
    }

    /**
     * Sets launch_date
     *
     * @param \DateTime $launch_date launch_date
     *
     * @return $this
     */
    public function setLaunchDate($launch_date)
    {
        $this->container['launch_date'] = $launch_date;

        return $this;
    }

    /**
     * Gets documentation_url
     *
     * @return string
     */
    public function getDocumentationUrl()
    {
        return $this->container['documentation_url'];
    }

    /**
     * Sets documentation_url
     *
     * @param string $documentation_url documentation_url
     *
     * @return $this
     */
    public function setDocumentationUrl($documentation_url)
    {
        $this->container['documentation_url'] = $documentation_url;

        return $this;
    }

    /**
     * Gets Terapi_url
     *
     * @return string
     */
    public function getTerapiUrl()
    {
        return $this->container['Terapi_url'];
    }

    /**
     * Sets Terapi_url
     *
     * @param string $Terapi_url Terapi_url
     *
     * @return $this
     */
    public function setTerapiUrl($Terapi_url)
    {
        $this->container['Terapi_url'] = $Terapi_url;

        return $this;
    }

    /**
     * Gets integration_endpoints
     *
     * @return \Terapi\Client\Model\IntegrationEndpointDto[]
     */
    public function getIntegrationEndpoints()
    {
        return $this->container['integration_endpoints'];
    }

    /**
     * Sets integration_endpoints
     *
     * @param \Terapi\Client\Model\IntegrationEndpointDto[] $integration_endpoints integration_endpoints
     *
     * @return $this
     */
    public function setIntegrationEndpoints($integration_endpoints)
    {
        $this->container['integration_endpoints'] = $integration_endpoints;

        return $this;
    }

    /**
     * Gets integration_events
     *
     * @return \Terapi\Client\Model\IntegrationEventDto[]
     */
    public function getIntegrationEvents()
    {
        return $this->container['integration_events'];
    }

    /**
     * Sets integration_events
     *
     * @param \Terapi\Client\Model\IntegrationEventDto[] $integration_events integration_events
     *
     * @return $this
     */
    public function setIntegrationEvents($integration_events)
    {
        $this->container['integration_events'] = $integration_events;

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