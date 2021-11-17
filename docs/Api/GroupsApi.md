# InfinityFree\DiscourseApi\GroupsApi

All URIs are relative to https://discourse.example.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addGroupMembers()**](GroupsApi.md#addGroupMembers) | **PUT** /groups/{id}/members.json | Add group members
[**createGroup()**](GroupsApi.md#createGroup) | **POST** /admin/groups.json | Creates a group
[**deleteGroup()**](GroupsApi.md#deleteGroup) | **DELETE** /admin/groups/{id}.json | Delete a group
[**getGroup()**](GroupsApi.md#getGroup) | **GET** /groups/{id}.json | Get a group
[**listGroupMembers()**](GroupsApi.md#listGroupMembers) | **GET** /groups/{id}/members.json | List group members
[**listGroups()**](GroupsApi.md#listGroups) | **GET** /groups.json | List groups
[**removeGroupMembers()**](GroupsApi.md#removeGroupMembers) | **DELETE** /groups/{id}/members.json | Remove group members
[**updateGroup()**](GroupsApi.md#updateGroup) | **PUT** /groups/{id}.json | Update a group


## `addGroupMembers()`

```php
addGroupMembers($id, $inlineObject7): \InfinityFree\DiscourseApi\Model\InlineResponse20012
```

Add group members

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$inlineObject7 = new \InfinityFree\DiscourseApi\Model\InlineObject7(); // \InfinityFree\DiscourseApi\Model\InlineObject7

try {
    $result = $apiInstance->addGroupMembers($id, $inlineObject7);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->addGroupMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **inlineObject7** | [**\InfinityFree\DiscourseApi\Model\InlineObject7**](../Model/InlineObject7.md)|  | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createGroup()`

```php
createGroup($inlineObject5): \InfinityFree\DiscourseApi\Model\InlineResponse2008
```

Creates a group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inlineObject5 = new \InfinityFree\DiscourseApi\Model\InlineObject5(); // \InfinityFree\DiscourseApi\Model\InlineObject5

try {
    $result = $apiInstance->createGroup($inlineObject5);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->createGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inlineObject5** | [**\InfinityFree\DiscourseApi\Model\InlineObject5**](../Model/InlineObject5.md)|  | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGroup()`

```php
deleteGroup($id): \InfinityFree\DiscourseApi\Model\InlineResponse2001
```

Delete a group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->deleteGroup($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->deleteGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroup()`

```php
getGroup($id): \InfinityFree\DiscourseApi\Model\InlineResponse2009
```

Get a group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = name; // string | Use group name instead of id

try {
    $result = $apiInstance->getGroup($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use group name instead of id |

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGroupMembers()`

```php
listGroupMembers($id): \InfinityFree\DiscourseApi\Model\InlineResponse20011
```

List group members

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = name; // string | Use group name instead of id

try {
    $result = $apiInstance->listGroupMembers($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->listGroupMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Use group name instead of id |

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGroups()`

```php
listGroups(): \InfinityFree\DiscourseApi\Model\InlineResponse20014
```

List groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listGroups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->listGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeGroupMembers()`

```php
removeGroupMembers($id, $inlineObject8): \InfinityFree\DiscourseApi\Model\InlineResponse20013
```

Remove group members

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$inlineObject8 = new \InfinityFree\DiscourseApi\Model\InlineObject8(); // \InfinityFree\DiscourseApi\Model\InlineObject8

try {
    $result = $apiInstance->removeGroupMembers($id, $inlineObject8);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->removeGroupMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **inlineObject8** | [**\InfinityFree\DiscourseApi\Model\InlineObject8**](../Model/InlineObject8.md)|  | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGroup()`

```php
updateGroup($id, $inlineObject6): \InfinityFree\DiscourseApi\Model\InlineResponse20010
```

Update a group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$inlineObject6 = new \InfinityFree\DiscourseApi\Model\InlineObject6(); // \InfinityFree\DiscourseApi\Model\InlineObject6

try {
    $result = $apiInstance->updateGroup($id, $inlineObject6);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->updateGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **inlineObject6** | [**\InfinityFree\DiscourseApi\Model\InlineObject6**](../Model/InlineObject6.md)|  | [optional]

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
