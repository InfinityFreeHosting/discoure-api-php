# InfinityFree\DiscourseApi\NotificationsApi

All URIs are relative to https://discourse.example.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getNotifications()**](NotificationsApi.md#getNotifications) | **GET** /notifications.json | Get the notifications that belong to the current user
[**markNotificationsAsRead()**](NotificationsApi.md#markNotificationsAsRead) | **PUT** /notifications/mark-read.json | Mark notifications as read


## `getNotifications()`

```php
getNotifications(): \InfinityFree\DiscourseApi\Model\InlineResponse20016
```

Get the notifications that belong to the current user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getNotifications();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getNotifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `markNotificationsAsRead()`

```php
markNotificationsAsRead($inlineObject10): \InfinityFree\DiscourseApi\Model\InlineResponse20017
```

Mark notifications as read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inlineObject10 = new \InfinityFree\DiscourseApi\Model\InlineObject10(); // \InfinityFree\DiscourseApi\Model\InlineObject10

try {
    $result = $apiInstance->markNotificationsAsRead($inlineObject10);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->markNotificationsAsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inlineObject10** | [**\InfinityFree\DiscourseApi\Model\InlineObject10**](../Model/InlineObject10.md)|  | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
