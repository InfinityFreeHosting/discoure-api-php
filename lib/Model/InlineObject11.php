<?php
/**
 * InlineObject11
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
 * InlineObject11 Class Doc Comment
 *
 * @category Class
 * @package  InfinityFree\DiscourseApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineObject11 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_11';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'title' => 'string',
        'raw' => 'string',
        'topicId' => 'int',
        'category' => 'int',
        'targetRecipients' => 'string',
        'targetUsernames' => 'string',
        'archetype' => 'string',
        'createdAt' => 'string',
        'embedUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'title' => null,
        'raw' => null,
        'topicId' => null,
        'category' => null,
        'targetRecipients' => null,
        'targetUsernames' => null,
        'archetype' => null,
        'createdAt' => null,
        'embedUrl' => null
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
        'title' => 'title',
        'raw' => 'raw',
        'topicId' => 'topic_id',
        'category' => 'category',
        'targetRecipients' => 'target_recipients',
        'targetUsernames' => 'target_usernames',
        'archetype' => 'archetype',
        'createdAt' => 'created_at',
        'embedUrl' => 'embed_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'raw' => 'setRaw',
        'topicId' => 'setTopicId',
        'category' => 'setCategory',
        'targetRecipients' => 'setTargetRecipients',
        'targetUsernames' => 'setTargetUsernames',
        'archetype' => 'setArchetype',
        'createdAt' => 'setCreatedAt',
        'embedUrl' => 'setEmbedUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'raw' => 'getRaw',
        'topicId' => 'getTopicId',
        'category' => 'getCategory',
        'targetRecipients' => 'getTargetRecipients',
        'targetUsernames' => 'getTargetUsernames',
        'archetype' => 'getArchetype',
        'createdAt' => 'getCreatedAt',
        'embedUrl' => 'getEmbedUrl'
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
        $this->container['title'] = $data['title'] ?? null;
        $this->container['raw'] = $data['raw'] ?? null;
        $this->container['topicId'] = $data['topicId'] ?? null;
        $this->container['category'] = $data['category'] ?? null;
        $this->container['targetRecipients'] = $data['targetRecipients'] ?? null;
        $this->container['targetUsernames'] = $data['targetUsernames'] ?? null;
        $this->container['archetype'] = $data['archetype'] ?? null;
        $this->container['createdAt'] = $data['createdAt'] ?? null;
        $this->container['embedUrl'] = $data['embedUrl'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['raw'] === null) {
            $invalidProperties[] = "'raw' can't be null";
        }
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
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title Required if creating a new topic or new private message.
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets raw
     *
     * @return string
     */
    public function getRaw()
    {
        return $this->container['raw'];
    }

    /**
     * Sets raw
     *
     * @param string $raw raw
     *
     * @return self
     */
    public function setRaw($raw)
    {
        $this->container['raw'] = $raw;

        return $this;
    }

    /**
     * Gets topicId
     *
     * @return int|null
     */
    public function getTopicId()
    {
        return $this->container['topicId'];
    }

    /**
     * Sets topicId
     *
     * @param int|null $topicId Required if creating a new post.
     *
     * @return self
     */
    public function setTopicId($topicId)
    {
        $this->container['topicId'] = $topicId;

        return $this;
    }

    /**
     * Gets category
     *
     * @return int|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param int|null $category Optional if creating a new topic, and ignored if creating a new post.
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets targetRecipients
     *
     * @return string|null
     */
    public function getTargetRecipients()
    {
        return $this->container['targetRecipients'];
    }

    /**
     * Sets targetRecipients
     *
     * @param string|null $targetRecipients Required for private message, comma separated.
     *
     * @return self
     */
    public function setTargetRecipients($targetRecipients)
    {
        $this->container['targetRecipients'] = $targetRecipients;

        return $this;
    }

    /**
     * Gets targetUsernames
     *
     * @return string|null
     * @deprecated
     */
    public function getTargetUsernames()
    {
        return $this->container['targetUsernames'];
    }

    /**
     * Sets targetUsernames
     *
     * @param string|null $targetUsernames Deprecated. Use target_recipients instead.
     *
     * @return self
     * @deprecated
     */
    public function setTargetUsernames($targetUsernames)
    {
        $this->container['targetUsernames'] = $targetUsernames;

        return $this;
    }

    /**
     * Gets archetype
     *
     * @return string|null
     */
    public function getArchetype()
    {
        return $this->container['archetype'];
    }

    /**
     * Sets archetype
     *
     * @param string|null $archetype Required for new private message.
     *
     * @return self
     */
    public function setArchetype($archetype)
    {
        $this->container['archetype'] = $archetype;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param string|null $createdAt createdAt
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets embedUrl
     *
     * @return string|null
     */
    public function getEmbedUrl()
    {
        return $this->container['embedUrl'];
    }

    /**
     * Sets embedUrl
     *
     * @param string|null $embedUrl Provide a URL from a remote system to associate a forum topic with that URL, typically for using Discourse as a comments system for an external blog.
     *
     * @return self
     */
    public function setEmbedUrl($embedUrl)
    {
        $this->container['embedUrl'] = $embedUrl;

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


