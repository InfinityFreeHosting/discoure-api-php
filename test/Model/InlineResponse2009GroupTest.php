<?php
/**
 * InlineResponse2009GroupTest
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
 * InlineResponse2009GroupTest Class Doc Comment
 *
 * @category    Class
 * @description InlineResponse2009Group
 * @package     InfinityFree\DiscourseApi
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class InlineResponse2009GroupTest extends TestCase
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
     * Test "InlineResponse2009Group"
     */
    public function testInlineResponse2009Group()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "id"
     */
    public function testPropertyId()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "automatic"
     */
    public function testPropertyAutomatic()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "name"
     */
    public function testPropertyName()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "userCount"
     */
    public function testPropertyUserCount()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "mentionableLevel"
     */
    public function testPropertyMentionableLevel()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "messageableLevel"
     */
    public function testPropertyMessageableLevel()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "visibilityLevel"
     */
    public function testPropertyVisibilityLevel()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "primaryGroup"
     */
    public function testPropertyPrimaryGroup()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "title"
     */
    public function testPropertyTitle()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "grantTrustLevel"
     */
    public function testPropertyGrantTrustLevel()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "incomingEmail"
     */
    public function testPropertyIncomingEmail()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "hasMessages"
     */
    public function testPropertyHasMessages()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "flairUrl"
     */
    public function testPropertyFlairUrl()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "flairBgColor"
     */
    public function testPropertyFlairBgColor()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "flairColor"
     */
    public function testPropertyFlairColor()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "bioRaw"
     */
    public function testPropertyBioRaw()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "bioCooked"
     */
    public function testPropertyBioCooked()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "bioExcerpt"
     */
    public function testPropertyBioExcerpt()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "publicAdmission"
     */
    public function testPropertyPublicAdmission()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "publicExit"
     */
    public function testPropertyPublicExit()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "allowMembershipRequests"
     */
    public function testPropertyAllowMembershipRequests()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "fullName"
     */
    public function testPropertyFullName()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "defaultNotificationLevel"
     */
    public function testPropertyDefaultNotificationLevel()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "membershipRequestTemplate"
     */
    public function testPropertyMembershipRequestTemplate()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "isGroupUser"
     */
    public function testPropertyIsGroupUser()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "membersVisibilityLevel"
     */
    public function testPropertyMembersVisibilityLevel()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "canSeeMembers"
     */
    public function testPropertyCanSeeMembers()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "canAdminGroup"
     */
    public function testPropertyCanAdminGroup()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "publishReadState"
     */
    public function testPropertyPublishReadState()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "isGroupOwnerDisplay"
     */
    public function testPropertyIsGroupOwnerDisplay()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "mentionable"
     */
    public function testPropertyMentionable()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "messageable"
     */
    public function testPropertyMessageable()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "automaticMembershipEmailDomains"
     */
    public function testPropertyAutomaticMembershipEmailDomains()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "smtpUpdatedAt"
     */
    public function testPropertySmtpUpdatedAt()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "smtpUpdatedBy"
     */
    public function testPropertySmtpUpdatedBy()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "smtpEnabled"
     */
    public function testPropertySmtpEnabled()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "smtpServer"
     */
    public function testPropertySmtpServer()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "smtpPort"
     */
    public function testPropertySmtpPort()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "smtpSsl"
     */
    public function testPropertySmtpSsl()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "imapEnabled"
     */
    public function testPropertyImapEnabled()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "imapUpdatedAt"
     */
    public function testPropertyImapUpdatedAt()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "imapUpdatedBy"
     */
    public function testPropertyImapUpdatedBy()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "imapServer"
     */
    public function testPropertyImapServer()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "imapPort"
     */
    public function testPropertyImapPort()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "imapSsl"
     */
    public function testPropertyImapSsl()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "imapMailboxName"
     */
    public function testPropertyImapMailboxName()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "imapMailboxes"
     */
    public function testPropertyImapMailboxes()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "emailUsername"
     */
    public function testPropertyEmailUsername()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "emailPassword"
     */
    public function testPropertyEmailPassword()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "imapLastError"
     */
    public function testPropertyImapLastError()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "imapOldEmails"
     */
    public function testPropertyImapOldEmails()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "imapNewEmails"
     */
    public function testPropertyImapNewEmails()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "messageCount"
     */
    public function testPropertyMessageCount()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "allowUnknownSenderTopicReplies"
     */
    public function testPropertyAllowUnknownSenderTopicReplies()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "watchingCategoryIds"
     */
    public function testPropertyWatchingCategoryIds()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "trackingCategoryIds"
     */
    public function testPropertyTrackingCategoryIds()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "watchingFirstPostCategoryIds"
     */
    public function testPropertyWatchingFirstPostCategoryIds()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "regularCategoryIds"
     */
    public function testPropertyRegularCategoryIds()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "mutedCategoryIds"
     */
    public function testPropertyMutedCategoryIds()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "watchingTags"
     */
    public function testPropertyWatchingTags()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "watchingFirstPostTags"
     */
    public function testPropertyWatchingFirstPostTags()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "trackingTags"
     */
    public function testPropertyTrackingTags()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "regularTags"
     */
    public function testPropertyRegularTags()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "mutedTags"
     */
    public function testPropertyMutedTags()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
