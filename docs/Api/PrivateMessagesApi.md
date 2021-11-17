# InfinityFree\DiscourseApi\PrivateMessagesApi

All URIs are relative to https://discourse.example.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTopicPostPM()**](PrivateMessagesApi.md#createTopicPostPM) | **POST** /posts.json | Creates a new topic, a new post, or a private message
[**getUserSentPrivateMessages()**](PrivateMessagesApi.md#getUserSentPrivateMessages) | **GET** /topics/private-messages-sent/{username}.json | Get a list of private messages sent for a user
[**listUserPrivateMessages()**](PrivateMessagesApi.md#listUserPrivateMessages) | **GET** /topics/private-messages/{username}.json | Get a list of private messages for a user


## `createTopicPostPM()`

```php
createTopicPostPM($inlineObject11): \InfinityFree\DiscourseApi\Model\InlineResponse20019
```

Creates a new topic, a new post, or a private message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\PrivateMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inlineObject11 = new \InfinityFree\DiscourseApi\Model\InlineObject11(); // \InfinityFree\DiscourseApi\Model\InlineObject11

try {
    $result = $apiInstance->createTopicPostPM($inlineObject11);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMessagesApi->createTopicPostPM: ', $e->getMessage(), PHP_EOL;
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

## `getUserSentPrivateMessages()`

```php
getUserSentPrivateMessages($username): \InfinityFree\DiscourseApi\Model\InlineResponse20025
```

Get a list of private messages sent for a user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\PrivateMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = 'username_example'; // string

try {
    $result = $apiInstance->getUserSentPrivateMessages($username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMessagesApi->getUserSentPrivateMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**|  |

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUserPrivateMessages()`

```php
listUserPrivateMessages($username): \InfinityFree\DiscourseApi\Model\InlineResponse20024
```

Get a list of private messages for a user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\PrivateMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = 'username_example'; // string

try {
    $result = $apiInstance->listUserPrivateMessages($username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateMessagesApi->listUserPrivateMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**|  |

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
