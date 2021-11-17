<?php
/**
 * InlineResponse20039TopicListTopics
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
 * InlineResponse20039TopicListTopics Class Doc Comment
 *
 * @category Class
 * @package  InfinityFree\DiscourseApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineResponse20039TopicListTopics implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_39_topic_list_topics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'title' => 'string',
        'fancyTitle' => 'string',
        'slug' => 'string',
        'postsCount' => 'int',
        'replyCount' => 'int',
        'highestPostNumber' => 'int',
        'imageUrl' => 'string',
        'createdAt' => 'string',
        'lastPostedAt' => 'string',
        'bumped' => 'bool',
        'bumpedAt' => 'string',
        'archetype' => 'string',
        'unseen' => 'bool',
        'lastReadPostNumber' => 'int',
        'unreadPosts' => 'int',
        'pinned' => 'bool',
        'unpinned' => 'mixed',
        'visible' => 'bool',
        'closed' => 'bool',
        'archived' => 'bool',
        'notificationLevel' => 'int',
        'bookmarked' => 'bool',
        'liked' => 'bool',
        'views' => 'int',
        'likeCount' => 'int',
        'hasSummary' => 'bool',
        'lastPosterUsername' => 'string',
        'categoryId' => 'int',
        'opLikeCount' => 'int',
        'pinnedGlobally' => 'bool',
        'featuredLink' => 'mixed',
        'posters' => '\InfinityFree\DiscourseApi\Model\InlineResponse20024TopicListPosters[]'
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
        'title' => null,
        'fancyTitle' => null,
        'slug' => null,
        'postsCount' => null,
        'replyCount' => null,
        'highestPostNumber' => null,
        'imageUrl' => null,
        'createdAt' => null,
        'lastPostedAt' => null,
        'bumped' => null,
        'bumpedAt' => null,
        'archetype' => null,
        'unseen' => null,
        'lastReadPostNumber' => null,
        'unreadPosts' => null,
        'pinned' => null,
        'unpinned' => null,
        'visible' => null,
        'closed' => null,
        'archived' => null,
        'notificationLevel' => null,
        'bookmarked' => null,
        'liked' => null,
        'views' => null,
        'likeCount' => null,
        'hasSummary' => null,
        'lastPosterUsername' => null,
        'categoryId' => null,
        'opLikeCount' => null,
        'pinnedGlobally' => null,
        'featuredLink' => null,
        'posters' => null
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
        'title' => 'title',
        'fancyTitle' => 'fancy_title',
        'slug' => 'slug',
        'postsCount' => 'posts_count',
        'replyCount' => 'reply_count',
        'highestPostNumber' => 'highest_post_number',
        'imageUrl' => 'image_url',
        'createdAt' => 'created_at',
        'lastPostedAt' => 'last_posted_at',
        'bumped' => 'bumped',
        'bumpedAt' => 'bumped_at',
        'archetype' => 'archetype',
        'unseen' => 'unseen',
        'lastReadPostNumber' => 'last_read_post_number',
        'unreadPosts' => 'unread_posts',
        'pinned' => 'pinned',
        'unpinned' => 'unpinned',
        'visible' => 'visible',
        'closed' => 'closed',
        'archived' => 'archived',
        'notificationLevel' => 'notification_level',
        'bookmarked' => 'bookmarked',
        'liked' => 'liked',
        'views' => 'views',
        'likeCount' => 'like_count',
        'hasSummary' => 'has_summary',
        'lastPosterUsername' => 'last_poster_username',
        'categoryId' => 'category_id',
        'opLikeCount' => 'op_like_count',
        'pinnedGlobally' => 'pinned_globally',
        'featuredLink' => 'featured_link',
        'posters' => 'posters'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'fancyTitle' => 'setFancyTitle',
        'slug' => 'setSlug',
        'postsCount' => 'setPostsCount',
        'replyCount' => 'setReplyCount',
        'highestPostNumber' => 'setHighestPostNumber',
        'imageUrl' => 'setImageUrl',
        'createdAt' => 'setCreatedAt',
        'lastPostedAt' => 'setLastPostedAt',
        'bumped' => 'setBumped',
        'bumpedAt' => 'setBumpedAt',
        'archetype' => 'setArchetype',
        'unseen' => 'setUnseen',
        'lastReadPostNumber' => 'setLastReadPostNumber',
        'unreadPosts' => 'setUnreadPosts',
        'pinned' => 'setPinned',
        'unpinned' => 'setUnpinned',
        'visible' => 'setVisible',
        'closed' => 'setClosed',
        'archived' => 'setArchived',
        'notificationLevel' => 'setNotificationLevel',
        'bookmarked' => 'setBookmarked',
        'liked' => 'setLiked',
        'views' => 'setViews',
        'likeCount' => 'setLikeCount',
        'hasSummary' => 'setHasSummary',
        'lastPosterUsername' => 'setLastPosterUsername',
        'categoryId' => 'setCategoryId',
        'opLikeCount' => 'setOpLikeCount',
        'pinnedGlobally' => 'setPinnedGlobally',
        'featuredLink' => 'setFeaturedLink',
        'posters' => 'setPosters'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'fancyTitle' => 'getFancyTitle',
        'slug' => 'getSlug',
        'postsCount' => 'getPostsCount',
        'replyCount' => 'getReplyCount',
        'highestPostNumber' => 'getHighestPostNumber',
        'imageUrl' => 'getImageUrl',
        'createdAt' => 'getCreatedAt',
        'lastPostedAt' => 'getLastPostedAt',
        'bumped' => 'getBumped',
        'bumpedAt' => 'getBumpedAt',
        'archetype' => 'getArchetype',
        'unseen' => 'getUnseen',
        'lastReadPostNumber' => 'getLastReadPostNumber',
        'unreadPosts' => 'getUnreadPosts',
        'pinned' => 'getPinned',
        'unpinned' => 'getUnpinned',
        'visible' => 'getVisible',
        'closed' => 'getClosed',
        'archived' => 'getArchived',
        'notificationLevel' => 'getNotificationLevel',
        'bookmarked' => 'getBookmarked',
        'liked' => 'getLiked',
        'views' => 'getViews',
        'likeCount' => 'getLikeCount',
        'hasSummary' => 'getHasSummary',
        'lastPosterUsername' => 'getLastPosterUsername',
        'categoryId' => 'getCategoryId',
        'opLikeCount' => 'getOpLikeCount',
        'pinnedGlobally' => 'getPinnedGlobally',
        'featuredLink' => 'getFeaturedLink',
        'posters' => 'getPosters'
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
        $this->container['title'] = $data['title'] ?? null;
        $this->container['fancyTitle'] = $data['fancyTitle'] ?? null;
        $this->container['slug'] = $data['slug'] ?? null;
        $this->container['postsCount'] = $data['postsCount'] ?? null;
        $this->container['replyCount'] = $data['replyCount'] ?? null;
        $this->container['highestPostNumber'] = $data['highestPostNumber'] ?? null;
        $this->container['imageUrl'] = $data['imageUrl'] ?? null;
        $this->container['createdAt'] = $data['createdAt'] ?? null;
        $this->container['lastPostedAt'] = $data['lastPostedAt'] ?? null;
        $this->container['bumped'] = $data['bumped'] ?? null;
        $this->container['bumpedAt'] = $data['bumpedAt'] ?? null;
        $this->container['archetype'] = $data['archetype'] ?? null;
        $this->container['unseen'] = $data['unseen'] ?? null;
        $this->container['lastReadPostNumber'] = $data['lastReadPostNumber'] ?? null;
        $this->container['unreadPosts'] = $data['unreadPosts'] ?? null;
        $this->container['pinned'] = $data['pinned'] ?? null;
        $this->container['unpinned'] = $data['unpinned'] ?? null;
        $this->container['visible'] = $data['visible'] ?? null;
        $this->container['closed'] = $data['closed'] ?? null;
        $this->container['archived'] = $data['archived'] ?? null;
        $this->container['notificationLevel'] = $data['notificationLevel'] ?? null;
        $this->container['bookmarked'] = $data['bookmarked'] ?? null;
        $this->container['liked'] = $data['liked'] ?? null;
        $this->container['views'] = $data['views'] ?? null;
        $this->container['likeCount'] = $data['likeCount'] ?? null;
        $this->container['hasSummary'] = $data['hasSummary'] ?? null;
        $this->container['lastPosterUsername'] = $data['lastPosterUsername'] ?? null;
        $this->container['categoryId'] = $data['categoryId'] ?? null;
        $this->container['opLikeCount'] = $data['opLikeCount'] ?? null;
        $this->container['pinnedGlobally'] = $data['pinnedGlobally'] ?? null;
        $this->container['featuredLink'] = $data['featuredLink'] ?? null;
        $this->container['posters'] = $data['posters'] ?? null;
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
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets fancyTitle
     *
     * @return string|null
     */
    public function getFancyTitle()
    {
        return $this->container['fancyTitle'];
    }

    /**
     * Sets fancyTitle
     *
     * @param string|null $fancyTitle fancyTitle
     *
     * @return self
     */
    public function setFancyTitle($fancyTitle)
    {
        $this->container['fancyTitle'] = $fancyTitle;

        return $this;
    }

    /**
     * Gets slug
     *
     * @return string|null
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     *
     * @param string|null $slug slug
     *
     * @return self
     */
    public function setSlug($slug)
    {
        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets postsCount
     *
     * @return int|null
     */
    public function getPostsCount()
    {
        return $this->container['postsCount'];
    }

    /**
     * Sets postsCount
     *
     * @param int|null $postsCount postsCount
     *
     * @return self
     */
    public function setPostsCount($postsCount)
    {
        $this->container['postsCount'] = $postsCount;

        return $this;
    }

    /**
     * Gets replyCount
     *
     * @return int|null
     */
    public function getReplyCount()
    {
        return $this->container['replyCount'];
    }

    /**
     * Sets replyCount
     *
     * @param int|null $replyCount replyCount
     *
     * @return self
     */
    public function setReplyCount($replyCount)
    {
        $this->container['replyCount'] = $replyCount;

        return $this;
    }

    /**
     * Gets highestPostNumber
     *
     * @return int|null
     */
    public function getHighestPostNumber()
    {
        return $this->container['highestPostNumber'];
    }

    /**
     * Sets highestPostNumber
     *
     * @param int|null $highestPostNumber highestPostNumber
     *
     * @return self
     */
    public function setHighestPostNumber($highestPostNumber)
    {
        $this->container['highestPostNumber'] = $highestPostNumber;

        return $this;
    }

    /**
     * Gets imageUrl
     *
     * @return string|null
     */
    public function getImageUrl()
    {
        return $this->container['imageUrl'];
    }

    /**
     * Sets imageUrl
     *
     * @param string|null $imageUrl imageUrl
     *
     * @return self
     */
    public function setImageUrl($imageUrl)
    {
        $this->container['imageUrl'] = $imageUrl;

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
     * Gets lastPostedAt
     *
     * @return string|null
     */
    public function getLastPostedAt()
    {
        return $this->container['lastPostedAt'];
    }

    /**
     * Sets lastPostedAt
     *
     * @param string|null $lastPostedAt lastPostedAt
     *
     * @return self
     */
    public function setLastPostedAt($lastPostedAt)
    {
        $this->container['lastPostedAt'] = $lastPostedAt;

        return $this;
    }

    /**
     * Gets bumped
     *
     * @return bool|null
     */
    public function getBumped()
    {
        return $this->container['bumped'];
    }

    /**
     * Sets bumped
     *
     * @param bool|null $bumped bumped
     *
     * @return self
     */
    public function setBumped($bumped)
    {
        $this->container['bumped'] = $bumped;

        return $this;
    }

    /**
     * Gets bumpedAt
     *
     * @return string|null
     */
    public function getBumpedAt()
    {
        return $this->container['bumpedAt'];
    }

    /**
     * Sets bumpedAt
     *
     * @param string|null $bumpedAt bumpedAt
     *
     * @return self
     */
    public function setBumpedAt($bumpedAt)
    {
        $this->container['bumpedAt'] = $bumpedAt;

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
     * @param string|null $archetype archetype
     *
     * @return self
     */
    public function setArchetype($archetype)
    {
        $this->container['archetype'] = $archetype;

        return $this;
    }

    /**
     * Gets unseen
     *
     * @return bool|null
     */
    public function getUnseen()
    {
        return $this->container['unseen'];
    }

    /**
     * Sets unseen
     *
     * @param bool|null $unseen unseen
     *
     * @return self
     */
    public function setUnseen($unseen)
    {
        $this->container['unseen'] = $unseen;

        return $this;
    }

    /**
     * Gets lastReadPostNumber
     *
     * @return int|null
     */
    public function getLastReadPostNumber()
    {
        return $this->container['lastReadPostNumber'];
    }

    /**
     * Sets lastReadPostNumber
     *
     * @param int|null $lastReadPostNumber lastReadPostNumber
     *
     * @return self
     */
    public function setLastReadPostNumber($lastReadPostNumber)
    {
        $this->container['lastReadPostNumber'] = $lastReadPostNumber;

        return $this;
    }

    /**
     * Gets unreadPosts
     *
     * @return int|null
     */
    public function getUnreadPosts()
    {
        return $this->container['unreadPosts'];
    }

    /**
     * Sets unreadPosts
     *
     * @param int|null $unreadPosts unreadPosts
     *
     * @return self
     */
    public function setUnreadPosts($unreadPosts)
    {
        $this->container['unreadPosts'] = $unreadPosts;

        return $this;
    }

    /**
     * Gets pinned
     *
     * @return bool|null
     */
    public function getPinned()
    {
        return $this->container['pinned'];
    }

    /**
     * Sets pinned
     *
     * @param bool|null $pinned pinned
     *
     * @return self
     */
    public function setPinned($pinned)
    {
        $this->container['pinned'] = $pinned;

        return $this;
    }

    /**
     * Gets unpinned
     *
     * @return mixed|null
     */
    public function getUnpinned()
    {
        return $this->container['unpinned'];
    }

    /**
     * Sets unpinned
     *
     * @param mixed|null $unpinned unpinned
     *
     * @return self
     */
    public function setUnpinned($unpinned)
    {
        $this->container['unpinned'] = $unpinned;

        return $this;
    }

    /**
     * Gets visible
     *
     * @return bool|null
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
     * Sets visible
     *
     * @param bool|null $visible visible
     *
     * @return self
     */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;

        return $this;
    }

    /**
     * Gets closed
     *
     * @return bool|null
     */
    public function getClosed()
    {
        return $this->container['closed'];
    }

    /**
     * Sets closed
     *
     * @param bool|null $closed closed
     *
     * @return self
     */
    public function setClosed($closed)
    {
        $this->container['closed'] = $closed;

        return $this;
    }

    /**
     * Gets archived
     *
     * @return bool|null
     */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
     * Sets archived
     *
     * @param bool|null $archived archived
     *
     * @return self
     */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;

        return $this;
    }

    /**
     * Gets notificationLevel
     *
     * @return int|null
     */
    public function getNotificationLevel()
    {
        return $this->container['notificationLevel'];
    }

    /**
     * Sets notificationLevel
     *
     * @param int|null $notificationLevel notificationLevel
     *
     * @return self
     */
    public function setNotificationLevel($notificationLevel)
    {
        $this->container['notificationLevel'] = $notificationLevel;

        return $this;
    }

    /**
     * Gets bookmarked
     *
     * @return bool|null
     */
    public function getBookmarked()
    {
        return $this->container['bookmarked'];
    }

    /**
     * Sets bookmarked
     *
     * @param bool|null $bookmarked bookmarked
     *
     * @return self
     */
    public function setBookmarked($bookmarked)
    {
        $this->container['bookmarked'] = $bookmarked;

        return $this;
    }

    /**
     * Gets liked
     *
     * @return bool|null
     */
    public function getLiked()
    {
        return $this->container['liked'];
    }

    /**
     * Sets liked
     *
     * @param bool|null $liked liked
     *
     * @return self
     */
    public function setLiked($liked)
    {
        $this->container['liked'] = $liked;

        return $this;
    }

    /**
     * Gets views
     *
     * @return int|null
     */
    public function getViews()
    {
        return $this->container['views'];
    }

    /**
     * Sets views
     *
     * @param int|null $views views
     *
     * @return self
     */
    public function setViews($views)
    {
        $this->container['views'] = $views;

        return $this;
    }

    /**
     * Gets likeCount
     *
     * @return int|null
     */
    public function getLikeCount()
    {
        return $this->container['likeCount'];
    }

    /**
     * Sets likeCount
     *
     * @param int|null $likeCount likeCount
     *
     * @return self
     */
    public function setLikeCount($likeCount)
    {
        $this->container['likeCount'] = $likeCount;

        return $this;
    }

    /**
     * Gets hasSummary
     *
     * @return bool|null
     */
    public function getHasSummary()
    {
        return $this->container['hasSummary'];
    }

    /**
     * Sets hasSummary
     *
     * @param bool|null $hasSummary hasSummary
     *
     * @return self
     */
    public function setHasSummary($hasSummary)
    {
        $this->container['hasSummary'] = $hasSummary;

        return $this;
    }

    /**
     * Gets lastPosterUsername
     *
     * @return string|null
     */
    public function getLastPosterUsername()
    {
        return $this->container['lastPosterUsername'];
    }

    /**
     * Sets lastPosterUsername
     *
     * @param string|null $lastPosterUsername lastPosterUsername
     *
     * @return self
     */
    public function setLastPosterUsername($lastPosterUsername)
    {
        $this->container['lastPosterUsername'] = $lastPosterUsername;

        return $this;
    }

    /**
     * Gets categoryId
     *
     * @return int|null
     */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
     * Sets categoryId
     *
     * @param int|null $categoryId categoryId
     *
     * @return self
     */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;

        return $this;
    }

    /**
     * Gets opLikeCount
     *
     * @return int|null
     */
    public function getOpLikeCount()
    {
        return $this->container['opLikeCount'];
    }

    /**
     * Sets opLikeCount
     *
     * @param int|null $opLikeCount opLikeCount
     *
     * @return self
     */
    public function setOpLikeCount($opLikeCount)
    {
        $this->container['opLikeCount'] = $opLikeCount;

        return $this;
    }

    /**
     * Gets pinnedGlobally
     *
     * @return bool|null
     */
    public function getPinnedGlobally()
    {
        return $this->container['pinnedGlobally'];
    }

    /**
     * Sets pinnedGlobally
     *
     * @param bool|null $pinnedGlobally pinnedGlobally
     *
     * @return self
     */
    public function setPinnedGlobally($pinnedGlobally)
    {
        $this->container['pinnedGlobally'] = $pinnedGlobally;

        return $this;
    }

    /**
     * Gets featuredLink
     *
     * @return mixed|null
     */
    public function getFeaturedLink()
    {
        return $this->container['featuredLink'];
    }

    /**
     * Sets featuredLink
     *
     * @param mixed|null $featuredLink featuredLink
     *
     * @return self
     */
    public function setFeaturedLink($featuredLink)
    {
        $this->container['featuredLink'] = $featuredLink;

        return $this;
    }

    /**
     * Gets posters
     *
     * @return \InfinityFree\DiscourseApi\Model\InlineResponse20024TopicListPosters[]|null
     */
    public function getPosters()
    {
        return $this->container['posters'];
    }

    /**
     * Sets posters
     *
     * @param \InfinityFree\DiscourseApi\Model\InlineResponse20024TopicListPosters[]|null $posters posters
     *
     * @return self
     */
    public function setPosters($posters)
    {
        $this->container['posters'] = $posters;

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


