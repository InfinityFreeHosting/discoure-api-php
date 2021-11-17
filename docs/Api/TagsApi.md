# InfinityFree\DiscourseApi\TagsApi

All URIs are relative to https://discourse.example.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTagGroup()**](TagsApi.md#createTagGroup) | **POST** /tag_groups.json | Creates a tag group
[**getTag()**](TagsApi.md#getTag) | **GET** /tag/{name}.json | Get a specific tag
[**getTagGroup()**](TagsApi.md#getTagGroup) | **GET** /tag_groups/{id}.json | Get a single tag group
[**listTagGroups()**](TagsApi.md#listTagGroups) | **GET** /tag_groups.json | Get a list of tag groups
[**listTags()**](TagsApi.md#listTags) | **GET** /tags.json | Get a list of tags
[**updateTagGroup()**](TagsApi.md#updateTagGroup) | **PUT** /tag_groups/{id}.json | Update tag group


## `createTagGroup()`

```php
createTagGroup($inlineObject15): \InfinityFree\DiscourseApi\Model\InlineResponse20029
```

Creates a tag group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inlineObject15 = new \InfinityFree\DiscourseApi\Model\InlineObject15(); // \InfinityFree\DiscourseApi\Model\InlineObject15

try {
    $result = $apiInstance->createTagGroup($inlineObject15);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->createTagGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inlineObject15** | [**\InfinityFree\DiscourseApi\Model\InlineObject15**](../Model/InlineObject15.md)|  | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20029**](../Model/InlineResponse20029.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTag()`

```php
getTag($name): \InfinityFree\DiscourseApi\Model\InlineResponse20033
```

Get a specific tag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string

try {
    $result = $apiInstance->getTag($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->getTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20033**](../Model/InlineResponse20033.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTagGroup()`

```php
getTagGroup($id): \InfinityFree\DiscourseApi\Model\InlineResponse20030
```

Get a single tag group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getTagGroup($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->getTagGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTagGroups()`

```php
listTagGroups(): \InfinityFree\DiscourseApi\Model\InlineResponse20028
```

Get a list of tag groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listTagGroups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->listTagGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTags()`

```php
listTags(): \InfinityFree\DiscourseApi\Model\InlineResponse20032
```

Get a list of tags

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listTags();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->listTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20032**](../Model/InlineResponse20032.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTagGroup()`

```php
updateTagGroup($id, $inlineObject16): \InfinityFree\DiscourseApi\Model\InlineResponse20031
```

Update tag group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$inlineObject16 = new \InfinityFree\DiscourseApi\Model\InlineObject16(); // \InfinityFree\DiscourseApi\Model\InlineObject16

try {
    $result = $apiInstance->updateTagGroup($id, $inlineObject16);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->updateTagGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **inlineObject16** | [**\InfinityFree\DiscourseApi\Model\InlineObject16**](../Model/InlineObject16.md)|  | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20031**](../Model/InlineResponse20031.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
