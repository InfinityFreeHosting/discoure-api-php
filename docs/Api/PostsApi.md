# InfinityFree\DiscourseApi\PostsApi

All URIs are relative to https://discourse.example.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTopicPostPM()**](PostsApi.md#createTopicPostPM) | **POST** /posts.json | Creates a new topic, a new post, or a private message
[**getPost()**](PostsApi.md#getPost) | **GET** /posts/{id}.json | Retrieve a single post
[**listPosts()**](PostsApi.md#listPosts) | **GET** /posts.json | List latest posts across topics
[**lockPost()**](PostsApi.md#lockPost) | **PUT** /posts/{id}/locked.json | Lock a post from being edited
[**performPostAction()**](PostsApi.md#performPostAction) | **POST** /post_actions.json | Like a post and other actions
[**updatePost()**](PostsApi.md#updatePost) | **PUT** /posts/{id}.json | Update a single post


## `createTopicPostPM()`

```php
createTopicPostPM($inlineObject11): \InfinityFree\DiscourseApi\Model\InlineResponse20019
```

Creates a new topic, a new post, or a private message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inlineObject11 = new \InfinityFree\DiscourseApi\Model\InlineObject11(); // \InfinityFree\DiscourseApi\Model\InlineObject11

try {
    $result = $apiInstance->createTopicPostPM($inlineObject11);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->createTopicPostPM: ', $e->getMessage(), PHP_EOL;
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

## `getPost()`

```php
getPost($apiKey, $apiUsername, $id): \InfinityFree\DiscourseApi\Model\InlineResponse20020
```

Retrieve a single post

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$apiKey = 'apiKey_example'; // string
$apiUsername = 'apiUsername_example'; // string
$id = 'id_example'; // string

try {
    $result = $apiInstance->getPost($apiKey, $apiUsername, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->getPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **apiUsername** | **string**|  |
 **id** | **string**|  |

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPosts()`

```php
listPosts($apiKey, $apiUsername): \InfinityFree\DiscourseApi\Model\InlineResponse20018
```

List latest posts across topics

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$apiKey = 'apiKey_example'; // string
$apiUsername = 'apiUsername_example'; // string

try {
    $result = $apiInstance->listPosts($apiKey, $apiUsername);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->listPosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **apiUsername** | **string**|  |

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lockPost()`

```php
lockPost($apiKey, $apiUsername, $id, $inlineObject13): \InfinityFree\DiscourseApi\Model\InlineResponse20022
```

Lock a post from being edited

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$apiKey = 'apiKey_example'; // string
$apiUsername = 'apiUsername_example'; // string
$id = 'id_example'; // string
$inlineObject13 = new \InfinityFree\DiscourseApi\Model\InlineObject13(); // \InfinityFree\DiscourseApi\Model\InlineObject13

try {
    $result = $apiInstance->lockPost($apiKey, $apiUsername, $id, $inlineObject13);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->lockPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **apiUsername** | **string**|  |
 **id** | **string**|  |
 **inlineObject13** | [**\InfinityFree\DiscourseApi\Model\InlineObject13**](../Model/InlineObject13.md)|  | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `performPostAction()`

```php
performPostAction($apiKey, $apiUsername, $inlineObject14): \InfinityFree\DiscourseApi\Model\InlineResponse20023
```

Like a post and other actions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$apiKey = 'apiKey_example'; // string
$apiUsername = 'apiUsername_example'; // string
$inlineObject14 = new \InfinityFree\DiscourseApi\Model\InlineObject14(); // \InfinityFree\DiscourseApi\Model\InlineObject14

try {
    $result = $apiInstance->performPostAction($apiKey, $apiUsername, $inlineObject14);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->performPostAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **apiUsername** | **string**|  |
 **inlineObject14** | [**\InfinityFree\DiscourseApi\Model\InlineObject14**](../Model/InlineObject14.md)|  | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePost()`

```php
updatePost($apiKey, $apiUsername, $id, $inlineObject12): \InfinityFree\DiscourseApi\Model\InlineResponse20021
```

Update a single post

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$apiKey = 'apiKey_example'; // string
$apiUsername = 'apiUsername_example'; // string
$id = 'id_example'; // string
$inlineObject12 = new \InfinityFree\DiscourseApi\Model\InlineObject12(); // \InfinityFree\DiscourseApi\Model\InlineObject12

try {
    $result = $apiInstance->updatePost($apiKey, $apiUsername, $id, $inlineObject12);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->updatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **apiUsername** | **string**|  |
 **id** | **string**|  |
 **inlineObject12** | [**\InfinityFree\DiscourseApi\Model\InlineObject12**](../Model/InlineObject12.md)|  | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
