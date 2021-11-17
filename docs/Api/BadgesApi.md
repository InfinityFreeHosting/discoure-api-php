# InfinityFree\DiscourseApi\BadgesApi

All URIs are relative to https://discourse.example.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminListBadges()**](BadgesApi.md#adminListBadges) | **GET** /admin/badges.json | List badges
[**createBadge()**](BadgesApi.md#createBadge) | **POST** /admin/badges.json | Create badge
[**deleteBadge()**](BadgesApi.md#deleteBadge) | **DELETE** /admin/badges/{id}.json | Delete badge
[**listUserBadges()**](BadgesApi.md#listUserBadges) | **GET** /user-badges/{username}.json | List badges for a user
[**updateBadge()**](BadgesApi.md#updateBadge) | **PUT** /admin/badges/{id}.json | Update badge


## `adminListBadges()`

```php
adminListBadges(): \InfinityFree\DiscourseApi\Model\InlineResponse2002
```

List badges

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\BadgesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->adminListBadges();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BadgesApi->adminListBadges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBadge()`

```php
createBadge($inlineObject1): \InfinityFree\DiscourseApi\Model\InlineResponse2003
```

Create badge

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\BadgesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inlineObject1 = new \InfinityFree\DiscourseApi\Model\InlineObject1(); // \InfinityFree\DiscourseApi\Model\InlineObject1

try {
    $result = $apiInstance->createBadge($inlineObject1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BadgesApi->createBadge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inlineObject1** | [**\InfinityFree\DiscourseApi\Model\InlineObject1**](../Model/InlineObject1.md)|  | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBadge()`

```php
deleteBadge($id)
```

Delete badge

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\BadgesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $apiInstance->deleteBadge($id);
} catch (Exception $e) {
    echo 'Exception when calling BadgesApi->deleteBadge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

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

## `listUserBadges()`

```php
listUserBadges($username): \InfinityFree\DiscourseApi\Model\InlineResponse20043
```

List badges for a user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\BadgesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = 'username_example'; // string

try {
    $result = $apiInstance->listUserBadges($username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BadgesApi->listUserBadges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**|  |

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20043**](../Model/InlineResponse20043.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBadge()`

```php
updateBadge($id, $inlineObject2): \InfinityFree\DiscourseApi\Model\InlineResponse2003
```

Update badge

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\BadgesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$inlineObject2 = new \InfinityFree\DiscourseApi\Model\InlineObject2(); // \InfinityFree\DiscourseApi\Model\InlineObject2

try {
    $result = $apiInstance->updateBadge($id, $inlineObject2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BadgesApi->updateBadge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **inlineObject2** | [**\InfinityFree\DiscourseApi\Model\InlineObject2**](../Model/InlineObject2.md)|  | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
