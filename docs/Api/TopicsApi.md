# InfinityFree\DiscourseApi\TopicsApi

All URIs are relative to https://discourse.example.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**bookmarkTopic()**](TopicsApi.md#bookmarkTopic) | **PUT** /t/{id}/bookmark.json | Bookmark topic
[**createTopicPostPM()**](TopicsApi.md#createTopicPostPM) | **POST** /posts.json | Creates a new topic, a new post, or a private message
[**createTopicTimer()**](TopicsApi.md#createTopicTimer) | **POST** /t/{id}/timer.json | Create topic timer
[**getSpecificPostsFromTopic()**](TopicsApi.md#getSpecificPostsFromTopic) | **GET** /t/{id}/posts.json | Get specific posts from a topic
[**getTopic()**](TopicsApi.md#getTopic) | **GET** /t/{id}.json | Get a single topic
[**inviteToTopic()**](TopicsApi.md#inviteToTopic) | **POST** /t/{id}/invite.json | Invite to topic
[**listLatestTopics()**](TopicsApi.md#listLatestTopics) | **GET** /latest.json | Get the latest topics
[**listTopTopics()**](TopicsApi.md#listTopTopics) | **GET** /top.json | Get the top topics filtered by period
[**removeTopic()**](TopicsApi.md#removeTopic) | **DELETE** /t/{id}.json | Remove a topic
[**setNotificationLevel()**](TopicsApi.md#setNotificationLevel) | **POST** /t/{id}/notifications.json | Set notification level
[**updateTopic()**](TopicsApi.md#updateTopic) | **PUT** /t/-/{id}.json | Update a topic
[**updateTopicStatus()**](TopicsApi.md#updateTopicStatus) | **PUT** /t/{id}/status.json | Update the status of a topic
[**updateTopicTimestamp()**](TopicsApi.md#updateTopicTimestamp) | **PUT** /t/{id}/change-timestamp.json | Update topic timestamp


## `bookmarkTopic()`

```php
bookmarkTopic($apiKey, $apiUsername, $id)
```

Bookmark topic

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\TopicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$apiKey = 'apiKey_example'; // string
$apiUsername = 'apiUsername_example'; // string
$id = 'id_example'; // string

try {
    $apiInstance->bookmarkTopic($apiKey, $apiUsername, $id);
} catch (Exception $e) {
    echo 'Exception when calling TopicsApi->bookmarkTopic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **apiUsername** | **string**|  |
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTopicPostPM()`

```php
createTopicPostPM($inlineObject11): \InfinityFree\DiscourseApi\Model\InlineResponse20019
```

Creates a new topic, a new post, or a private message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\TopicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inlineObject11 = new \InfinityFree\DiscourseApi\Model\InlineObject11(); // \InfinityFree\DiscourseApi\Model\InlineObject11

try {
    $result = $apiInstance->createTopicPostPM($inlineObject11);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopicsApi->createTopicPostPM: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inlineObject11** | [**\InfinityFree\DiscourseApi\Model\InlineObject11**](../Model/InlineObject11.md)|  | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTopicTimer()`

```php
createTopicTimer($apiKey, $apiUsername, $id, $inlineObject23): \InfinityFree\DiscourseApi\Model\InlineResponse20041
```

Create topic timer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\TopicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$apiKey = 'apiKey_example'; // string
$apiUsername = 'apiUsername_example'; // string
$id = 'id_example'; // string
$inlineObject23 = new \InfinityFree\DiscourseApi\Model\InlineObject23(); // \InfinityFree\DiscourseApi\Model\InlineObject23

try {
    $result = $apiInstance->createTopicTimer($apiKey, $apiUsername, $id, $inlineObject23);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopicsApi->createTopicTimer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **apiUsername** | **string**|  |
 **id** | **string**|  |
 **inlineObject23** | [**\InfinityFree\DiscourseApi\Model\InlineObject23**](../Model/InlineObject23.md)|  | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20041**](../Model/InlineResponse20041.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSpecificPostsFromTopic()`

```php
getSpecificPostsFromTopic($apiKey, $apiUsername, $id, $inlineObject17): \InfinityFree\DiscourseApi\Model\InlineResponse20034
```

Get specific posts from a topic

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\TopicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$apiKey = 'apiKey_example'; // string
$apiUsername = 'apiUsername_example'; // string
$id = 'id_example'; // string
$inlineObject17 = new \InfinityFree\DiscourseApi\Model\InlineObject17(); // \InfinityFree\DiscourseApi\Model\InlineObject17

try {
    $result = $apiInstance->getSpecificPostsFromTopic($apiKey, $apiUsername, $id, $inlineObject17);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopicsApi->getSpecificPostsFromTopic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **apiUsername** | **string**|  |
 **id** | **string**|  |
 **inlineObject17** | [**\InfinityFree\DiscourseApi\Model\InlineObject17**](../Model/InlineObject17.md)|  | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20034**](../Model/InlineResponse20034.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTopic()`

```php
getTopic($apiKey, $apiUsername, $id): \InfinityFree\DiscourseApi\Model\InlineResponse20035
```

Get a single topic

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\TopicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$apiKey = 'apiKey_example'; // string
$apiUsername = 'apiUsername_example'; // string
$id = 'id_example'; // string

try {
    $result = $apiInstance->getTopic($apiKey, $apiUsername, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopicsApi->getTopic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **apiUsername** | **string**|  |
 **id** | **string**|  |

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20035**](../Model/InlineResponse20035.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inviteToTopic()`

```php
inviteToTopic($apiKey, $apiUsername, $id, $inlineObject19): \InfinityFree\DiscourseApi\Model\InlineResponse20037
```

Invite to topic

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\TopicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$apiKey = 'apiKey_example'; // string
$apiUsername = 'apiUsername_example'; // string
$id = 'id_example'; // string
$inlineObject19 = new \InfinityFree\DiscourseApi\Model\InlineObject19(); // \InfinityFree\DiscourseApi\Model\InlineObject19

try {
    $result = $apiInstance->inviteToTopic($apiKey, $apiUsername, $id, $inlineObject19);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopicsApi->inviteToTopic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **apiUsername** | **string**|  |
 **id** | **string**|  |
 **inlineObject19** | [**\InfinityFree\DiscourseApi\Model\InlineObject19**](../Model/InlineObject19.md)|  | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLatestTopics()`

```php
listLatestTopics($apiKey, $apiUsername, $order, $ascending): \InfinityFree\DiscourseApi\Model\InlineResponse20039
```

Get the latest topics

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\TopicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$apiKey = 'apiKey_example'; // string
$apiUsername = 'apiUsername_example'; // string
$order = 'order_example'; // string | Enum: `default`, `created`, `activity`, `views`, `posts`, `category`, `likes`, `op_likes`, `posters`
$ascending = 'ascending_example'; // string | Defaults to `desc`, add `ascending=true` to sort asc

try {
    $result = $apiInstance->listLatestTopics($apiKey, $apiUsername, $order, $ascending);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopicsApi->listLatestTopics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **apiUsername** | **string**|  |
 **order** | **string**| Enum: &#x60;default&#x60;, &#x60;created&#x60;, &#x60;activity&#x60;, &#x60;views&#x60;, &#x60;posts&#x60;, &#x60;category&#x60;, &#x60;likes&#x60;, &#x60;op_likes&#x60;, &#x60;posters&#x60; | [optional]
 **ascending** | **string**| Defaults to &#x60;desc&#x60;, add &#x60;ascending&#x3D;true&#x60; to sort asc | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20039**](../Model/InlineResponse20039.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTopTopics()`

```php
listTopTopics($apiKey, $apiUsername, $period): \InfinityFree\DiscourseApi\Model\InlineResponse20040
```

Get the top topics filtered by period

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\TopicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$apiKey = 'apiKey_example'; // string
$apiUsername = 'apiUsername_example'; // string
$period = 'period_example'; // string | Enum: `all`, `yearly`, `quarterly`, `monthly`, `weekly`, `daily`

try {
    $result = $apiInstance->listTopTopics($apiKey, $apiUsername, $period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopicsApi->listTopTopics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **apiUsername** | **string**|  |
 **period** | **string**| Enum: &#x60;all&#x60;, &#x60;yearly&#x60;, &#x60;quarterly&#x60;, &#x60;monthly&#x60;, &#x60;weekly&#x60;, &#x60;daily&#x60; | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20040**](../Model/InlineResponse20040.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeTopic()`

```php
removeTopic($apiKey, $apiUsername, $id)
```

Remove a topic

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\TopicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$apiKey = 'apiKey_example'; // string
$apiUsername = 'apiUsername_example'; // string
$id = 'id_example'; // string

try {
    $apiInstance->removeTopic($apiKey, $apiUsername, $id);
} catch (Exception $e) {
    echo 'Exception when calling TopicsApi->removeTopic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **apiUsername** | **string**|  |
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setNotificationLevel()`

```php
setNotificationLevel($apiKey, $apiUsername, $id, $inlineObject21): \InfinityFree\DiscourseApi\Model\InlineResponse20010
```

Set notification level

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\TopicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$apiKey = 'apiKey_example'; // string
$apiUsername = 'apiUsername_example'; // string
$id = 'id_example'; // string
$inlineObject21 = new \InfinityFree\DiscourseApi\Model\InlineObject21(); // \InfinityFree\DiscourseApi\Model\InlineObject21

try {
    $result = $apiInstance->setNotificationLevel($apiKey, $apiUsername, $id, $inlineObject21);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopicsApi->setNotificationLevel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **apiUsername** | **string**|  |
 **id** | **string**|  |
 **inlineObject21** | [**\InfinityFree\DiscourseApi\Model\InlineObject21**](../Model/InlineObject21.md)|  | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTopic()`

```php
updateTopic($apiKey, $apiUsername, $id, $inlineObject18): \InfinityFree\DiscourseApi\Model\InlineResponse20036
```

Update a topic

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\TopicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$apiKey = 'apiKey_example'; // string
$apiUsername = 'apiUsername_example'; // string
$id = 'id_example'; // string
$inlineObject18 = new \InfinityFree\DiscourseApi\Model\InlineObject18(); // \InfinityFree\DiscourseApi\Model\InlineObject18

try {
    $result = $apiInstance->updateTopic($apiKey, $apiUsername, $id, $inlineObject18);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopicsApi->updateTopic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **apiUsername** | **string**|  |
 **id** | **string**|  |
 **inlineObject18** | [**\InfinityFree\DiscourseApi\Model\InlineObject18**](../Model/InlineObject18.md)|  | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20036**](../Model/InlineResponse20036.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTopicStatus()`

```php
updateTopicStatus($apiKey, $apiUsername, $id, $inlineObject20): \InfinityFree\DiscourseApi\Model\InlineResponse20038
```

Update the status of a topic

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\TopicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$apiKey = 'apiKey_example'; // string
$apiUsername = 'apiUsername_example'; // string
$id = 'id_example'; // string
$inlineObject20 = new \InfinityFree\DiscourseApi\Model\InlineObject20(); // \InfinityFree\DiscourseApi\Model\InlineObject20

try {
    $result = $apiInstance->updateTopicStatus($apiKey, $apiUsername, $id, $inlineObject20);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopicsApi->updateTopicStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **apiUsername** | **string**|  |
 **id** | **string**|  |
 **inlineObject20** | [**\InfinityFree\DiscourseApi\Model\InlineObject20**](../Model/InlineObject20.md)|  | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20038**](../Model/InlineResponse20038.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTopicTimestamp()`

```php
updateTopicTimestamp($apiKey, $apiUsername, $id, $inlineObject22): \InfinityFree\DiscourseApi\Model\InlineResponse20010
```

Update topic timestamp

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\TopicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$apiKey = 'apiKey_example'; // string
$apiUsername = 'apiUsername_example'; // string
$id = 'id_example'; // string
$inlineObject22 = new \InfinityFree\DiscourseApi\Model\InlineObject22(); // \InfinityFree\DiscourseApi\Model\InlineObject22

try {
    $result = $apiInstance->updateTopicTimestamp($apiKey, $apiUsername, $id, $inlineObject22);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TopicsApi->updateTopicTimestamp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **apiUsername** | **string**|  |
 **id** | **string**|  |
 **inlineObject22** | [**\InfinityFree\DiscourseApi\Model\InlineObject22**](../Model/InlineObject22.md)|  | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
