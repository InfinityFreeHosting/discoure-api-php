<?php
/**
 * InlineResponse20047Tl3RequirementsTest
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
 * Please update the test case below to test the model.
 */

namespace InfinityFree\DiscourseApi\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * InlineResponse20047Tl3RequirementsTest Class Doc Comment
 *
 * @category    Class
 * @description InlineResponse20047Tl3Requirements
 * @package     InfinityFree\DiscourseApi
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class InlineResponse20047Tl3RequirementsTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "InlineResponse20047Tl3Requirements"
     */
    public function testInlineResponse20047Tl3Requirements()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "timePeriod"
     */
    public function testPropertyTimePeriod()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "requirementsMet"
     */
    public function testPropertyRequirementsMet()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "requirementsLost"
     */
    public function testPropertyRequirementsLost()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "trustLevelLocked"
     */
    public function testPropertyTrustLevelLocked()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "onGracePeriod"
     */
    public function testPropertyOnGracePeriod()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "daysVisited"
     */
    public function testPropertyDaysVisited()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "minDaysVisited"
     */
    public function testPropertyMinDaysVisited()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "numTopicsRepliedTo"
     */
    public function testPropertyNumTopicsRepliedTo()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "minTopicsRepliedTo"
     */
    public function testPropertyMinTopicsRepliedTo()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "topicsViewed"
     */
    public function testPropertyTopicsViewed()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "minTopicsViewed"
     */
    public function testPropertyMinTopicsViewed()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "postsRead"
     */
    public function testPropertyPostsRead()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "minPostsRead"
     */
    public function testPropertyMinPostsRead()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "topicsViewedAllTime"
     */
    public function testPropertyTopicsViewedAllTime()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "minTopicsViewedAllTime"
     */
    public function testPropertyMinTopicsViewedAllTime()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "postsReadAllTime"
     */
    public function testPropertyPostsReadAllTime()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "minPostsReadAllTime"
     */
    public function testPropertyMinPostsReadAllTime()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "numFlaggedPosts"
     */
    public function testPropertyNumFlaggedPosts()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "maxFlaggedPosts"
     */
    public function testPropertyMaxFlaggedPosts()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "numFlaggedByUsers"
     */
    public function testPropertyNumFlaggedByUsers()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "maxFlaggedByUsers"
     */
    public function testPropertyMaxFlaggedByUsers()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "numLikesGiven"
     */
    public function testPropertyNumLikesGiven()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "minLikesGiven"
     */
    public function testPropertyMinLikesGiven()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "numLikesReceived"
     */
    public function testPropertyNumLikesReceived()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "minLikesReceived"
     */
    public function testPropertyMinLikesReceived()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "numLikesReceivedDays"
     */
    public function testPropertyNumLikesReceivedDays()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "minLikesReceivedDays"
     */
    public function testPropertyMinLikesReceivedDays()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "numLikesReceivedUsers"
     */
    public function testPropertyNumLikesReceivedUsers()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "minLikesReceivedUsers"
     */
    public function testPropertyMinLikesReceivedUsers()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "penaltyCounts"
     */
    public function testPropertyPenaltyCounts()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
