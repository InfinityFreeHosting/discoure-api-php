<?php
/**
 * InlineResponse20039TopicList
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
 * InlineResponse20039TopicList Class Doc Comment
 *
 * @category Class
 * @package  InfinityFree\DiscourseApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineResponse20039TopicList implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_39_topic_list';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'canCreateTopic' => 'bool',
        'draft' => 'mixed',
        'draftKey' => 'string',
        'draftSequence' => 'int',
        'perPage' => 'int',
        'topics' => '\InfinityFree\DiscourseApi\Model\InlineResponse20039TopicListTopics[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'canCreateTopic' => null,
        'draft' => null,
        'draftKey' => null,
        'draftSequence' => null,
        'perPage' => null,
        'topics' => null
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
        'canCreateTopic' => 'can_create_topic',
        'draft' => 'draft',
        'draftKey' => 'draft_key',
        'draftSequence' => 'draft_sequence',
        'perPage' => 'per_page',
        'topics' => 'topics'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'canCreateTopic' => 'setCanCreateTopic',
        'draft' => 'setDraft',
        'draftKey' => 'setDraftKey',
        'draftSequence' => 'setDraftSequence',
        'perPage' => 'setPerPage',
        'topics' => 'setTopics'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'canCreateTopic' => 'getCanCreateTopic',
        'draft' => 'getDraft',
        'draftKey' => 'getDraftKey',
        'draftSequence' => 'getDraftSequence',
        'perPage' => 'getPerPage',
        'topics' => 'getTopics'
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
        $this->container['canCreateTopic'] = $data['canCreateTopic'] ?? null;
        $this->container['draft'] = $data['draft'] ?? null;
        $this->container['draftKey'] = $data['draftKey'] ?? null;
        $this->container['draftSequence'] = $data['draftSequence'] ?? null;
        $this->container['perPage'] = $data['perPage'] ?? null;
        $this->container['topics'] = $data['topics'] ?? null;
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
     * Gets canCreateTopic
     *
     * @return bool|null
     */
    public function getCanCreateTopic()
    {
        return $this->container['canCreateTopic'];
    }

    /**
     * Sets canCreateTopic
     *
     * @param bool|null $canCreateTopic canCreateTopic
     *
     * @return self
     */
    public function setCanCreateTopic($canCreateTopic)
    {
        $this->container['canCreateTopic'] = $canCreateTopic;

        return $this;
    }

    /**
     * Gets draft
     *
     * @return mixed|null
     */
    public function getDraft()
    {
        return $this->container['draft'];
    }

    /**
     * Sets draft
     *
     * @param mixed|null $draft draft
     *
     * @return self
     */
    public function setDraft($draft)
    {
        $this->container['draft'] = $draft;

        return $this;
    }

    /**
     * Gets draftKey
     *
     * @return string|null
     */
    public function getDraftKey()
    {
        return $this->container['draftKey'];
    }

    /**
     * Sets draftKey
     *
     * @param string|null $draftKey draftKey
     *
     * @return self
     */
    public function setDraftKey($draftKey)
    {
        $this->container['draftKey'] = $draftKey;

        return $this;
    }

    /**
     * Gets draftSequence
     *
     * @return int|null
     */
    public function getDraftSequence()
    {
        return $this->container['draftSequence'];
    }

    /**
     * Sets draftSequence
     *
     * @param int|null $draftSequence draftSequence
     *
     * @return self
     */
    public function setDraftSequence($draftSequence)
    {
        $this->container['draftSequence'] = $draftSequence;

        return $this;
    }

    /**
     * Gets perPage
     *
     * @return int|null
     */
    public function getPerPage()
    {
        return $this->container['perPage'];
    }

    /**
     * Sets perPage
     *
     * @param int|null $perPage perPage
     *
     * @return self
     */
    public function setPerPage($perPage)
    {
        $this->container['perPage'] = $perPage;

        return $this;
    }

    /**
     * Gets topics
     *
     * @return \InfinityFree\DiscourseApi\Model\InlineResponse20039TopicListTopics[]|null
     */
    public function getTopics()
    {
        return $this->container['topics'];
    }

    /**
     * Sets topics
     *
     * @param \InfinityFree\DiscourseApi\Model\InlineResponse20039TopicListTopics[]|null $topics topics
     *
     * @return self
     */
    public function setTopics($topics)
    {
        $this->container['topics'] = $topics;

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


