# Discourse API client in PHP

This page contains the documentation on how to use Discourse through API calls.

> Note: For any endpoints not listed you can follow the
[reverse engineer the Discourse API](https://meta.discourse.org/t/-/20576)
guide to figure out how to use an API endpoint.

### Request Content-Type

The Content-Type for POST and PUT requests can be set to `application/x-www-form-urlencoded`,
`multipart/form-data`, or `application/json`.

### Endpoint Names and Response Content-Type

Most API endpoints provide the same content as their HTML counterparts. For example
the URL `/categories` serves a list of categories, the `/categories.json` API provides the
same information in JSON format.

Instead of sending API requests to `/categories.json` you may also send them to `/categories`
and add an `Accept: application/json` header to the request to get the JSON response.
Sending requests with the `Accept` header is necessary if you want to use URLs
for related endpoints returned by the API, such as pagination URLs.
These URLs are returned without the `.json` prefix so you need to add the header in
order to get the correct response format.

### Boolean values

If an endpoint accepts a boolean be sure to specify it as a lowercase
`true` or `false` value unless noted otherwise.

## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "require": {
    "infinityfree/discourse-api": "0.1.0"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/discourse-api/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new InfinityFree\DiscourseApi\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->adminGetUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->adminGetUser: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://discourse.example.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdminApi* | [**adminGetUser**](docs/Api/AdminApi.md#admingetuser) | **GET** /admin/users/{id}.json | Get a user by id
*AdminApi* | [**adminListUsers**](docs/Api/AdminApi.md#adminlistusers) | **GET** /admin/users/list/{flag}.json | Get a list of users
*AdminApi* | [**anonymizeUser**](docs/Api/AdminApi.md#anonymizeuser) | **PUT** /admin/users/{id}/anonymize.json | Anonymize a user
*AdminApi* | [**deleteUser**](docs/Api/AdminApi.md#deleteuser) | **DELETE** /admin/users/{id}.json | Delete a user
*AdminApi* | [**logOutUser**](docs/Api/AdminApi.md#logoutuser) | **POST** /admin/users/{id}/log_out.json | Log a user out
*AdminApi* | [**refreshGravatar**](docs/Api/AdminApi.md#refreshgravatar) | **POST** /user_avatar/{username}/refresh_gravatar.json | Refresh gravatar
*AdminApi* | [**suspendUser**](docs/Api/AdminApi.md#suspenduser) | **PUT** /admin/users/{id}/suspend.json | Suspend a user
*BackupsApi* | [**createBackup**](docs/Api/BackupsApi.md#createbackup) | **POST** /admin/backups.json | Create backup
*BackupsApi* | [**downloadBackup**](docs/Api/BackupsApi.md#downloadbackup) | **GET** /admin/backups/{filename} | Download backup
*BackupsApi* | [**getBackups**](docs/Api/BackupsApi.md#getbackups) | **GET** /admin/backups.json | List backups
*BackupsApi* | [**sendDownloadBackupEmail**](docs/Api/BackupsApi.md#senddownloadbackupemail) | **PUT** /admin/backups/{filename} | Send download backup email
*BadgesApi* | [**adminListBadges**](docs/Api/BadgesApi.md#adminlistbadges) | **GET** /admin/badges.json | List badges
*BadgesApi* | [**createBadge**](docs/Api/BadgesApi.md#createbadge) | **POST** /admin/badges.json | Create badge
*BadgesApi* | [**deleteBadge**](docs/Api/BadgesApi.md#deletebadge) | **DELETE** /admin/badges/{id}.json | Delete badge
*BadgesApi* | [**listUserBadges**](docs/Api/BadgesApi.md#listuserbadges) | **GET** /user-badges/{username}.json | List badges for a user
*BadgesApi* | [**updateBadge**](docs/Api/BadgesApi.md#updatebadge) | **PUT** /admin/badges/{id}.json | Update badge
*CategoriesApi* | [**createCategory**](docs/Api/CategoriesApi.md#createcategory) | **POST** /categories.json | Creates a category
*CategoriesApi* | [**getCategory**](docs/Api/CategoriesApi.md#getcategory) | **GET** /c/{id}/show.json | Show category
*CategoriesApi* | [**getSite**](docs/Api/CategoriesApi.md#getsite) | **GET** /site.json | Get site info
*CategoriesApi* | [**listCategories**](docs/Api/CategoriesApi.md#listcategories) | **GET** /categories.json | Retrieves a list of categories
*CategoriesApi* | [**listCategoryTopics**](docs/Api/CategoriesApi.md#listcategorytopics) | **GET** /c/{slug}/{id}.json | List topics
*CategoriesApi* | [**updateCategory**](docs/Api/CategoriesApi.md#updatecategory) | **PUT** /categories/{id}.json | Updates a category
*GroupsApi* | [**addGroupMembers**](docs/Api/GroupsApi.md#addgroupmembers) | **PUT** /groups/{id}/members.json | Add group members
*GroupsApi* | [**createGroup**](docs/Api/GroupsApi.md#creategroup) | **POST** /admin/groups.json | Creates a group
*GroupsApi* | [**deleteGroup**](docs/Api/GroupsApi.md#deletegroup) | **DELETE** /admin/groups/{id}.json | Delete a group
*GroupsApi* | [**getGroup**](docs/Api/GroupsApi.md#getgroup) | **GET** /groups/{id}.json | Get a group
*GroupsApi* | [**listGroupMembers**](docs/Api/GroupsApi.md#listgroupmembers) | **GET** /groups/{id}/members.json | List group members
*GroupsApi* | [**listGroups**](docs/Api/GroupsApi.md#listgroups) | **GET** /groups.json | List groups
*GroupsApi* | [**removeGroupMembers**](docs/Api/GroupsApi.md#removegroupmembers) | **DELETE** /groups/{id}/members.json | Remove group members
*GroupsApi* | [**updateGroup**](docs/Api/GroupsApi.md#updategroup) | **PUT** /groups/{id}.json | Update a group
*InvitesApi* | [**createInvite**](docs/Api/InvitesApi.md#createinvite) | **POST** /invites.json | Create an invite
*InvitesApi* | [**inviteToTopic**](docs/Api/InvitesApi.md#invitetotopic) | **POST** /t/{id}/invite.json | Invite to topic
*NotificationsApi* | [**getNotifications**](docs/Api/NotificationsApi.md#getnotifications) | **GET** /notifications.json | Get the notifications that belong to the current user
*NotificationsApi* | [**markNotificationsAsRead**](docs/Api/NotificationsApi.md#marknotificationsasread) | **PUT** /notifications/mark-read.json | Mark notifications as read
*PostsApi* | [**createTopicPostPM**](docs/Api/PostsApi.md#createtopicpostpm) | **POST** /posts.json | Creates a new topic, a new post, or a private message
*PostsApi* | [**getPost**](docs/Api/PostsApi.md#getpost) | **GET** /posts/{id}.json | Retrieve a single post
*PostsApi* | [**listPosts**](docs/Api/PostsApi.md#listposts) | **GET** /posts.json | List latest posts across topics
*PostsApi* | [**lockPost**](docs/Api/PostsApi.md#lockpost) | **PUT** /posts/{id}/locked.json | Lock a post from being edited
*PostsApi* | [**performPostAction**](docs/Api/PostsApi.md#performpostaction) | **POST** /post_actions.json | Like a post and other actions
*PostsApi* | [**updatePost**](docs/Api/PostsApi.md#updatepost) | **PUT** /posts/{id}.json | Update a single post
*PrivateMessagesApi* | [**createTopicPostPM**](docs/Api/PrivateMessagesApi.md#createtopicpostpm) | **POST** /posts.json | Creates a new topic, a new post, or a private message
*PrivateMessagesApi* | [**getUserSentPrivateMessages**](docs/Api/PrivateMessagesApi.md#getusersentprivatemessages) | **GET** /topics/private-messages-sent/{username}.json | Get a list of private messages sent for a user
*PrivateMessagesApi* | [**listUserPrivateMessages**](docs/Api/PrivateMessagesApi.md#listuserprivatemessages) | **GET** /topics/private-messages/{username}.json | Get a list of private messages for a user
*SearchApi* | [**search**](docs/Api/SearchApi.md#search) | **GET** /search.json | Search for a term
*SiteApi* | [**getSite**](docs/Api/SiteApi.md#getsite) | **GET** /site.json | Get site info
*TagsApi* | [**createTagGroup**](docs/Api/TagsApi.md#createtaggroup) | **POST** /tag_groups.json | Creates a tag group
*TagsApi* | [**getTag**](docs/Api/TagsApi.md#gettag) | **GET** /tag/{name}.json | Get a specific tag
*TagsApi* | [**getTagGroup**](docs/Api/TagsApi.md#gettaggroup) | **GET** /tag_groups/{id}.json | Get a single tag group
*TagsApi* | [**listTagGroups**](docs/Api/TagsApi.md#listtaggroups) | **GET** /tag_groups.json | Get a list of tag groups
*TagsApi* | [**listTags**](docs/Api/TagsApi.md#listtags) | **GET** /tags.json | Get a list of tags
*TagsApi* | [**updateTagGroup**](docs/Api/TagsApi.md#updatetaggroup) | **PUT** /tag_groups/{id}.json | Update tag group
*TopicsApi* | [**bookmarkTopic**](docs/Api/TopicsApi.md#bookmarktopic) | **PUT** /t/{id}/bookmark.json | Bookmark topic
*TopicsApi* | [**createTopicPostPM**](docs/Api/TopicsApi.md#createtopicpostpm) | **POST** /posts.json | Creates a new topic, a new post, or a private message
*TopicsApi* | [**createTopicTimer**](docs/Api/TopicsApi.md#createtopictimer) | **POST** /t/{id}/timer.json | Create topic timer
*TopicsApi* | [**getSpecificPostsFromTopic**](docs/Api/TopicsApi.md#getspecificpostsfromtopic) | **GET** /t/{id}/posts.json | Get specific posts from a topic
*TopicsApi* | [**getTopic**](docs/Api/TopicsApi.md#gettopic) | **GET** /t/{id}.json | Get a single topic
*TopicsApi* | [**inviteToTopic**](docs/Api/TopicsApi.md#invitetotopic) | **POST** /t/{id}/invite.json | Invite to topic
*TopicsApi* | [**listLatestTopics**](docs/Api/TopicsApi.md#listlatesttopics) | **GET** /latest.json | Get the latest topics
*TopicsApi* | [**listTopTopics**](docs/Api/TopicsApi.md#listtoptopics) | **GET** /top.json | Get the top topics filtered by period
*TopicsApi* | [**removeTopic**](docs/Api/TopicsApi.md#removetopic) | **DELETE** /t/{id}.json | Remove a topic
*TopicsApi* | [**setNotificationLevel**](docs/Api/TopicsApi.md#setnotificationlevel) | **POST** /t/{id}/notifications.json | Set notification level
*TopicsApi* | [**updateTopic**](docs/Api/TopicsApi.md#updatetopic) | **PUT** /t/-/{id}.json | Update a topic
*TopicsApi* | [**updateTopicStatus**](docs/Api/TopicsApi.md#updatetopicstatus) | **PUT** /t/{id}/status.json | Update the status of a topic
*TopicsApi* | [**updateTopicTimestamp**](docs/Api/TopicsApi.md#updatetopictimestamp) | **PUT** /t/{id}/change-timestamp.json | Update topic timestamp
*UploadsApi* | [**createUpload**](docs/Api/UploadsApi.md#createupload) | **POST** /uploads.json | Creates an upload
*UsersApi* | [**adminGetUser**](docs/Api/UsersApi.md#admingetuser) | **GET** /admin/users/{id}.json | Get a user by id
*UsersApi* | [**adminListUsers**](docs/Api/UsersApi.md#adminlistusers) | **GET** /admin/users/list/{flag}.json | Get a list of users
*UsersApi* | [**anonymizeUser**](docs/Api/UsersApi.md#anonymizeuser) | **PUT** /admin/users/{id}/anonymize.json | Anonymize a user
*UsersApi* | [**changePassword**](docs/Api/UsersApi.md#changepassword) | **PUT** /users/password-reset/{token}.json | Change password
*UsersApi* | [**createUser**](docs/Api/UsersApi.md#createuser) | **POST** /users.json | Creates a user
*UsersApi* | [**deleteUser**](docs/Api/UsersApi.md#deleteuser) | **DELETE** /admin/users/{id}.json | Delete a user
*UsersApi* | [**getUser**](docs/Api/UsersApi.md#getuser) | **GET** /u/{username}.json | Get a single user by username
*UsersApi* | [**getUserExternalId**](docs/Api/UsersApi.md#getuserexternalid) | **GET** /u/by-external/{external_id}.json | Get a user by external_id
*UsersApi* | [**getUserIdentiyProviderExternalId**](docs/Api/UsersApi.md#getuseridentiyproviderexternalid) | **GET** /u/by-external/{provider}/{external_id}.json | Get a user by identity provider external ID
*UsersApi* | [**listUserActions**](docs/Api/UsersApi.md#listuseractions) | **GET** /user_actions.json | Get a list of user actions
*UsersApi* | [**listUserBadges**](docs/Api/UsersApi.md#listuserbadges) | **GET** /user-badges/{username}.json | List badges for a user
*UsersApi* | [**listUsersPublic**](docs/Api/UsersApi.md#listuserspublic) | **GET** /directory_items.json | Get a public list of users
*UsersApi* | [**logOutUser**](docs/Api/UsersApi.md#logoutuser) | **POST** /admin/users/{id}/log_out.json | Log a user out
*UsersApi* | [**refreshGravatar**](docs/Api/UsersApi.md#refreshgravatar) | **POST** /user_avatar/{username}/refresh_gravatar.json | Refresh gravatar
*UsersApi* | [**sendPasswordResetEmail**](docs/Api/UsersApi.md#sendpasswordresetemail) | **POST** /session/forgot_password.json | Send password reset email
*UsersApi* | [**suspendUser**](docs/Api/UsersApi.md#suspenduser) | **PUT** /admin/users/{id}/suspend.json | Suspend a user
*UsersApi* | [**updateAvatar**](docs/Api/UsersApi.md#updateavatar) | **PUT** /u/{username}/preferences/avatar/pick.json | Update avatar
*UsersApi* | [**updateEmail**](docs/Api/UsersApi.md#updateemail) | **PUT** /u/{username}/preferences/email.json | Update email

## Models

- [AdminGroupsJsonGroup](docs/Model/AdminGroupsJsonGroup.md)
- [InlineObject](docs/Model/InlineObject.md)
- [InlineObject1](docs/Model/InlineObject1.md)
- [InlineObject10](docs/Model/InlineObject10.md)
- [InlineObject11](docs/Model/InlineObject11.md)
- [InlineObject12](docs/Model/InlineObject12.md)
- [InlineObject13](docs/Model/InlineObject13.md)
- [InlineObject14](docs/Model/InlineObject14.md)
- [InlineObject15](docs/Model/InlineObject15.md)
- [InlineObject16](docs/Model/InlineObject16.md)
- [InlineObject17](docs/Model/InlineObject17.md)
- [InlineObject18](docs/Model/InlineObject18.md)
- [InlineObject19](docs/Model/InlineObject19.md)
- [InlineObject2](docs/Model/InlineObject2.md)
- [InlineObject20](docs/Model/InlineObject20.md)
- [InlineObject21](docs/Model/InlineObject21.md)
- [InlineObject22](docs/Model/InlineObject22.md)
- [InlineObject23](docs/Model/InlineObject23.md)
- [InlineObject25](docs/Model/InlineObject25.md)
- [InlineObject26](docs/Model/InlineObject26.md)
- [InlineObject27](docs/Model/InlineObject27.md)
- [InlineObject28](docs/Model/InlineObject28.md)
- [InlineObject29](docs/Model/InlineObject29.md)
- [InlineObject3](docs/Model/InlineObject3.md)
- [InlineObject30](docs/Model/InlineObject30.md)
- [InlineObject31](docs/Model/InlineObject31.md)
- [InlineObject4](docs/Model/InlineObject4.md)
- [InlineObject5](docs/Model/InlineObject5.md)
- [InlineObject6](docs/Model/InlineObject6.md)
- [InlineObject7](docs/Model/InlineObject7.md)
- [InlineObject8](docs/Model/InlineObject8.md)
- [InlineObject9](docs/Model/InlineObject9.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [InlineResponse2001](docs/Model/InlineResponse2001.md)
- [InlineResponse20010](docs/Model/InlineResponse20010.md)
- [InlineResponse20011](docs/Model/InlineResponse20011.md)
- [InlineResponse20011Meta](docs/Model/InlineResponse20011Meta.md)
- [InlineResponse20012](docs/Model/InlineResponse20012.md)
- [InlineResponse20013](docs/Model/InlineResponse20013.md)
- [InlineResponse20014](docs/Model/InlineResponse20014.md)
- [InlineResponse20014Extras](docs/Model/InlineResponse20014Extras.md)
- [InlineResponse20015](docs/Model/InlineResponse20015.md)
- [InlineResponse20016](docs/Model/InlineResponse20016.md)
- [InlineResponse20016Data](docs/Model/InlineResponse20016Data.md)
- [InlineResponse20016Notifications](docs/Model/InlineResponse20016Notifications.md)
- [InlineResponse20017](docs/Model/InlineResponse20017.md)
- [InlineResponse20018](docs/Model/InlineResponse20018.md)
- [InlineResponse20018ActionsSummary](docs/Model/InlineResponse20018ActionsSummary.md)
- [InlineResponse20018LatestPosts](docs/Model/InlineResponse20018LatestPosts.md)
- [InlineResponse20019](docs/Model/InlineResponse20019.md)
- [InlineResponse2002](docs/Model/InlineResponse2002.md)
- [InlineResponse20020](docs/Model/InlineResponse20020.md)
- [InlineResponse20021](docs/Model/InlineResponse20021.md)
- [InlineResponse20021Post](docs/Model/InlineResponse20021Post.md)
- [InlineResponse20022](docs/Model/InlineResponse20022.md)
- [InlineResponse20023](docs/Model/InlineResponse20023.md)
- [InlineResponse20023ActionsSummary](docs/Model/InlineResponse20023ActionsSummary.md)
- [InlineResponse20024](docs/Model/InlineResponse20024.md)
- [InlineResponse20024TopicList](docs/Model/InlineResponse20024TopicList.md)
- [InlineResponse20024TopicListParticipants](docs/Model/InlineResponse20024TopicListParticipants.md)
- [InlineResponse20024TopicListPosters](docs/Model/InlineResponse20024TopicListPosters.md)
- [InlineResponse20024TopicListTopics](docs/Model/InlineResponse20024TopicListTopics.md)
- [InlineResponse20024Users](docs/Model/InlineResponse20024Users.md)
- [InlineResponse20025](docs/Model/InlineResponse20025.md)
- [InlineResponse20025TopicList](docs/Model/InlineResponse20025TopicList.md)
- [InlineResponse20025TopicListTopics](docs/Model/InlineResponse20025TopicListTopics.md)
- [InlineResponse20025Users](docs/Model/InlineResponse20025Users.md)
- [InlineResponse20026](docs/Model/InlineResponse20026.md)
- [InlineResponse20026GroupedSearchResult](docs/Model/InlineResponse20026GroupedSearchResult.md)
- [InlineResponse20027](docs/Model/InlineResponse20027.md)
- [InlineResponse20027NotificationTypes](docs/Model/InlineResponse20027NotificationTypes.md)
- [InlineResponse20027PostTypes](docs/Model/InlineResponse20027PostTypes.md)
- [InlineResponse20027TrustLevels](docs/Model/InlineResponse20027TrustLevels.md)
- [InlineResponse20028](docs/Model/InlineResponse20028.md)
- [InlineResponse20028Permissions](docs/Model/InlineResponse20028Permissions.md)
- [InlineResponse20028TagGroups](docs/Model/InlineResponse20028TagGroups.md)
- [InlineResponse20029](docs/Model/InlineResponse20029.md)
- [InlineResponse20029TagGroup](docs/Model/InlineResponse20029TagGroup.md)
- [InlineResponse2002AdminBadges](docs/Model/InlineResponse2002AdminBadges.md)
- [InlineResponse2002AdminBadgesTriggers](docs/Model/InlineResponse2002AdminBadgesTriggers.md)
- [InlineResponse2003](docs/Model/InlineResponse2003.md)
- [InlineResponse20030](docs/Model/InlineResponse20030.md)
- [InlineResponse20030TagGroup](docs/Model/InlineResponse20030TagGroup.md)
- [InlineResponse20030TagGroupPermissions](docs/Model/InlineResponse20030TagGroupPermissions.md)
- [InlineResponse20031](docs/Model/InlineResponse20031.md)
- [InlineResponse20032](docs/Model/InlineResponse20032.md)
- [InlineResponse20032Extras](docs/Model/InlineResponse20032Extras.md)
- [InlineResponse20032Tags](docs/Model/InlineResponse20032Tags.md)
- [InlineResponse20033](docs/Model/InlineResponse20033.md)
- [InlineResponse20033TopicList](docs/Model/InlineResponse20033TopicList.md)
- [InlineResponse20033TopicListTags](docs/Model/InlineResponse20033TopicListTags.md)
- [InlineResponse20033TopicListTopics](docs/Model/InlineResponse20033TopicListTopics.md)
- [InlineResponse20034](docs/Model/InlineResponse20034.md)
- [InlineResponse20034PostStream](docs/Model/InlineResponse20034PostStream.md)
- [InlineResponse20034PostStreamPosts](docs/Model/InlineResponse20034PostStreamPosts.md)
- [InlineResponse20035](docs/Model/InlineResponse20035.md)
- [InlineResponse20035ActionsSummary](docs/Model/InlineResponse20035ActionsSummary.md)
- [InlineResponse20035Details](docs/Model/InlineResponse20035Details.md)
- [InlineResponse20035DetailsParticipants](docs/Model/InlineResponse20035DetailsParticipants.md)
- [InlineResponse20035PostStream](docs/Model/InlineResponse20035PostStream.md)
- [InlineResponse20035PostStreamLinkCounts](docs/Model/InlineResponse20035PostStreamLinkCounts.md)
- [InlineResponse20035PostStreamPosts](docs/Model/InlineResponse20035PostStreamPosts.md)
- [InlineResponse20035Posters](docs/Model/InlineResponse20035Posters.md)
- [InlineResponse20035SuggestedTopics](docs/Model/InlineResponse20035SuggestedTopics.md)
- [InlineResponse20036](docs/Model/InlineResponse20036.md)
- [InlineResponse20036BasicTopic](docs/Model/InlineResponse20036BasicTopic.md)
- [InlineResponse20037](docs/Model/InlineResponse20037.md)
- [InlineResponse20038](docs/Model/InlineResponse20038.md)
- [InlineResponse20039](docs/Model/InlineResponse20039.md)
- [InlineResponse20039TopicList](docs/Model/InlineResponse20039TopicList.md)
- [InlineResponse20039TopicListTopics](docs/Model/InlineResponse20039TopicListTopics.md)
- [InlineResponse2003Badge](docs/Model/InlineResponse2003Badge.md)
- [InlineResponse2004](docs/Model/InlineResponse2004.md)
- [InlineResponse20040](docs/Model/InlineResponse20040.md)
- [InlineResponse20040TopicList](docs/Model/InlineResponse20040TopicList.md)
- [InlineResponse20040TopicListPosters](docs/Model/InlineResponse20040TopicListPosters.md)
- [InlineResponse20040TopicListTopics](docs/Model/InlineResponse20040TopicListTopics.md)
- [InlineResponse20041](docs/Model/InlineResponse20041.md)
- [InlineResponse20042](docs/Model/InlineResponse20042.md)
- [InlineResponse20043](docs/Model/InlineResponse20043.md)
- [InlineResponse20044](docs/Model/InlineResponse20044.md)
- [InlineResponse20045](docs/Model/InlineResponse20045.md)
- [InlineResponse20045User](docs/Model/InlineResponse20045User.md)
- [InlineResponse20045UserCustomFields](docs/Model/InlineResponse20045UserCustomFields.md)
- [InlineResponse20045UserUserFields](docs/Model/InlineResponse20045UserUserFields.md)
- [InlineResponse20045UserUserNotificationSchedule](docs/Model/InlineResponse20045UserUserNotificationSchedule.md)
- [InlineResponse20045UserUserOption](docs/Model/InlineResponse20045UserUserOption.md)
- [InlineResponse20046](docs/Model/InlineResponse20046.md)
- [InlineResponse20046Meta](docs/Model/InlineResponse20046Meta.md)
- [InlineResponse20047](docs/Model/InlineResponse20047.md)
- [InlineResponse20047ApprovedBy](docs/Model/InlineResponse20047ApprovedBy.md)
- [InlineResponse20047PenaltyCounts](docs/Model/InlineResponse20047PenaltyCounts.md)
- [InlineResponse20047Tl3Requirements](docs/Model/InlineResponse20047Tl3Requirements.md)
- [InlineResponse20047Tl3RequirementsPenaltyCounts](docs/Model/InlineResponse20047Tl3RequirementsPenaltyCounts.md)
- [InlineResponse20048](docs/Model/InlineResponse20048.md)
- [InlineResponse20049](docs/Model/InlineResponse20049.md)
- [InlineResponse20049Suspension](docs/Model/InlineResponse20049Suspension.md)
- [InlineResponse2004CategoryList](docs/Model/InlineResponse2004CategoryList.md)
- [InlineResponse2005](docs/Model/InlineResponse2005.md)
- [InlineResponse20050](docs/Model/InlineResponse20050.md)
- [InlineResponse20051](docs/Model/InlineResponse20051.md)
- [InlineResponse20052](docs/Model/InlineResponse20052.md)
- [InlineResponse20053](docs/Model/InlineResponse20053.md)
- [InlineResponse20054](docs/Model/InlineResponse20054.md)
- [InlineResponse2005Category](docs/Model/InlineResponse2005Category.md)
- [InlineResponse2006](docs/Model/InlineResponse2006.md)
- [InlineResponse2007](docs/Model/InlineResponse2007.md)
- [InlineResponse2007TopicList](docs/Model/InlineResponse2007TopicList.md)
- [InlineResponse2008](docs/Model/InlineResponse2008.md)
- [InlineResponse2008BasicGroup](docs/Model/InlineResponse2008BasicGroup.md)
- [InlineResponse2009](docs/Model/InlineResponse2009.md)
- [InlineResponse2009Extras](docs/Model/InlineResponse2009Extras.md)
- [InlineResponse2009Group](docs/Model/InlineResponse2009Group.md)
- [PostsIdJsonPost](docs/Model/PostsIdJsonPost.md)
- [TIdJsonTopic](docs/Model/TIdJsonTopic.md)

## Authentication

Some endpoints do not require any authentication, pretty much anything else will
require you to be authenticated.

To become authenticated you will need to create an API Key from the admin panel.

Once you have your API Key you can pass it in along with your API Username
as an HTTP header like this:

```
curl -X GET \"http://127.0.0.1:3000/admin/users/list/active.json\" \\
-H \"Api-Key: 714552c6148e1617aeab526d0606184b94a80ec048fc09894ff1a72b740c5f19\" \\
-H \"Api-Username: system\"
```

and this is how POST requests will look:

```
curl -X POST \"http://127.0.0.1:3000/categories\" \\
-H \"Content-Type: multipart/form-data;\" \\
-H \"Api-Key: 714552c6148e1617aeab526d0606184b94a80ec048fc09894ff1a72b740c5f19\" \\
-H \"Api-Username: system\" \\
-F \"name=89853c20-4409-e91a-a8ea-f6cdff96aaaa\" \\
-F \"color=49d9e9\" \\
-F \"text_color=f0fcfd\"
```

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

Original API specification: Civilized Discourse Construction Kit, Inc.

API client: InfinityFree

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `latest`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
