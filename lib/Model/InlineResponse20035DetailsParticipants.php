<?php
/**
 * InlineResponse20035DetailsParticipants
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  InfinityFree\DiscourseApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Discourse API Documentation
 *
 * This page contains the documentation on how to use Discourse through API calls.  > Note: For any endpoints not listed you can follow the [reverse engineer the Discourse API](https://meta.discourse.org/t/-/20576) guide to figure out how to use an API endpoint.  ### Request Content-Type  The Content-Type for POST and PUT requests can be set to `application/x-www-form-urlencoded`, `multipart/form-data`, or `application/json`.  ### Endpoint Names and Response Content-Type  Most API endpoints provide the same content as their HTML counterparts. For example the URL `/categories` serves a list of categories, the `/categories.json` API provides the same information in JSON format.  Instead of sending API requests to `/categories.json` you may also send them to `/categories` and add an `Accept: application/json` header to the request to get the JSON response. Sending requests with the `Accept` header is necessary if you want to use URLs for related endpoints returned by the API, such as pagination URLs. These URLs are returned without the `.json` prefix so you need to add the header in order to get the correct response format.  ### Authentication  Some endpoints do not require any authentication, pretty much anything else will require you to be authenticated.  To become authenticated you will need to create an API Key from the admin panel.  Once you have your API Key you can pass it in along with your API Username as an HTTP header like this:  ``` curl -X GET \"http://127.0.0.1:3000/admin/users/list/active.json\" \\ -H \"Api-Key: 714552c6148e1617aeab526d0606184b94a80ec048fc09894ff1a72b740c5f19\" \\ -H \"Api-Username: system\" ```  and this is how POST requests will look:  ``` curl -X POST \"http://127.0.0.1:3000/categories\" \\ -H \"Content-Type: multipart/form-data;\" \\ -H \"Api-Key: 714552c6148e1617aeab526d0606184b94a80ec048fc09894ff1a72b740c5f19\" \\ -H \"Api-Username: system\" \\ -F \"name=89853c20-4409-e91a-a8ea-f6cdff96aaaa\" \\ -F \"color=49d9e9\" \\ -F \"text_color=f0fcfd\" ```  ### Boolean values  If an endpoint accepts a boolean be sure to specify it as a lowercase `true` or `false` value unless noted otherwise.
 *
 * The version of the OpenAPI document: latest
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace InfinityFree\DiscourseApi\Model;

use \ArrayAccess;
use \InfinityFree\DiscourseApi\ObjectSerializer;

/**
 * InlineResponse20035DetailsParticipants Class Doc Comment
 *
 * @category Class
 * @package  InfinityFree\DiscourseApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineResponse20035DetailsParticipants implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_35_details_participants';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'username' => 'string',
        'name' => 'string',
        'avatarTemplate' => 'string',
        'postCount' => 'int',
        'primaryGroupName' => 'mixed',
        'flairName' => 'mixed',
        'flairUrl' => 'mixed',
        'flairColor' => 'mixed',
        'flairBgColor' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'username' => null,
        'name' => null,
        'avatarTemplate' => null,
        'postCount' => null,
        'primaryGroupName' => null,
        'flairName' => null,
        'flairUrl' => null,
        'flairColor' => null,
        'flairBgColor' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'username' => 'username',
        'name' => 'name',
        'avatarTemplate' => 'avatar_template',
        'postCount' => 'post_count',
        'primaryGroupName' => 'primary_group_name',
        'flairName' => 'flair_name',
        'flairUrl' => 'flair_url',
        'flairColor' => 'flair_color',
        'flairBgColor' => 'flair_bg_color'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'username' => 'setUsername',
        'name' => 'setName',
        'avatarTemplate' => 'setAvatarTemplate',
        'postCount' => 'setPostCount',
        'primaryGroupName' => 'setPrimaryGroupName',
        'flairName' => 'setFlairName',
        'flairUrl' => 'setFlairUrl',
        'flairColor' => 'setFlairColor',
        'flairBgColor' => 'setFlairBgColor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'username' => 'getUsername',
        'name' => 'getName',
        'avatarTemplate' => 'getAvatarTemplate',
        'postCount' => 'getPostCount',
        'primaryGroupName' => 'getPrimaryGroupName',
        'flairName' => 'getFlairName',
        'flairUrl' => 'getFlairUrl',
        'flairColor' => 'getFlairColor',
        'flairBgColor' => 'getFlairBgColor'
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
        return self::$openAPIModelName;
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['username'] = $data['username'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['avatarTemplate'] = $data['avatarTemplate'] ?? null;
        $this->container['postCount'] = $data['postCount'] ?? null;
        $this->container['primaryGroupName'] = $data['primaryGroupName'] ?? null;
        $this->container['flairName'] = $data['flairName'] ?? null;
        $this->container['flairUrl'] = $data['flairUrl'] ?? null;
        $this->container['flairColor'] = $data['flairColor'] ?? null;
        $this->container['flairBgColor'] = $data['flairBgColor'] ?? null;
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
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string|null $username username
     *
     * @return self
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets avatarTemplate
     *
     * @return string|null
     */
    public function getAvatarTemplate()
    {
        return $this->container['avatarTemplate'];
    }

    /**
     * Sets avatarTemplate
     *
     * @param string|null $avatarTemplate avatarTemplate
     *
     * @return self
     */
    public function setAvatarTemplate($avatarTemplate)
    {
        $this->container['avatarTemplate'] = $avatarTemplate;

        return $this;
    }

    /**
     * Gets postCount
     *
     * @return int|null
     */
    public function getPostCount()
    {
        return $this->container['postCount'];
    }

    /**
     * Sets postCount
     *
     * @param int|null $postCount postCount
     *
     * @return self
     */
    public function setPostCount($postCount)
    {
        $this->container['postCount'] = $postCount;

        return $this;
    }

    /**
     * Gets primaryGroupName
     *
     * @return mixed|null
     */
    public function getPrimaryGroupName()
    {
        return $this->container['primaryGroupName'];
    }

    /**
     * Sets primaryGroupName
     *
     * @param mixed|null $primaryGroupName primaryGroupName
     *
     * @return self
     */
    public function setPrimaryGroupName($primaryGroupName)
    {
        $this->container['primaryGroupName'] = $primaryGroupName;

        return $this;
    }

    /**
     * Gets flairName
     *
     * @return mixed|null
     */
    public function getFlairName()
    {
        return $this->container['flairName'];
    }

    /**
     * Sets flairName
     *
     * @param mixed|null $flairName flairName
     *
     * @return self
     */
    public function setFlairName($flairName)
    {
        $this->container['flairName'] = $flairName;

        return $this;
    }

    /**
     * Gets flairUrl
     *
     * @return mixed|null
     */
    public function getFlairUrl()
    {
        return $this->container['flairUrl'];
    }

    /**
     * Sets flairUrl
     *
     * @param mixed|null $flairUrl flairUrl
     *
     * @return self
     */
    public function setFlairUrl($flairUrl)
    {
        $this->container['flairUrl'] = $flairUrl;

        return $this;
    }

    /**
     * Gets flairColor
     *
     * @return mixed|null
     */
    public function getFlairColor()
    {
        return $this->container['flairColor'];
    }

    /**
     * Sets flairColor
     *
     * @param mixed|null $flairColor flairColor
     *
     * @return self
     */
    public function setFlairColor($flairColor)
    {
        $this->container['flairColor'] = $flairColor;

        return $this;
    }

    /**
     * Gets flairBgColor
     *
     * @return mixed|null
     */
    public function getFlairBgColor()
    {
        return $this->container['flairBgColor'];
    }

    /**
     * Sets flairBgColor
     *
     * @param mixed|null $flairBgColor flairBgColor
     *
     * @return self
     */
    public function setFlairBgColor($flairBgColor)
    {
        $this->container['flairBgColor'] = $flairBgColor;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


