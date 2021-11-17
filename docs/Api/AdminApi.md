# InfinityFree\DiscourseApi\AdminApi

All URIs are relative to https://discourse.example.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminGetUser()**](AdminApi.md#adminGetUser) | **GET** /admin/users/{id}.json | Get a user by id
[**adminListUsers()**](AdminApi.md#adminListUsers) | **GET** /admin/users/list/{flag}.json | Get a list of users
[**anonymizeUser()**](AdminApi.md#anonymizeUser) | **PUT** /admin/users/{id}/anonymize.json | Anonymize a user
[**deleteUser()**](AdminApi.md#deleteUser) | **DELETE** /admin/users/{id}.json | Delete a user
[**logOutUser()**](AdminApi.md#logOutUser) | **POST** /admin/users/{id}/log_out.json | Log a user out
[**refreshGravatar()**](AdminApi.md#refreshGravatar) | **POST** /user_avatar/{username}/refresh_gravatar.json | Refresh gravatar
[**suspendUser()**](AdminApi.md#suspendUser) | **PUT** /admin/users/{id}/suspend.json | Suspend a user


## `adminGetUser()`

```php
adminGetUser($id): \InfinityFree\DiscourseApi\Model\InlineResponse20047
```

Get a user by id

### Example

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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20047**](../Model/InlineResponse20047.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminListUsers()`

```php
adminListUsers($flag, $order, $asc, $page, $showEmails): \InfinityFree\DiscourseApi\Model\InlineResponse20052[]
```

Get a list of users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag = 'flag_example'; // string
$order = 'order_example'; // string
$asc = 'asc_example'; // string
$page = 56; // int
$showEmails = True; // bool

try {
    $result = $apiInstance->adminListUsers($flag, $order, $asc, $page, $showEmails);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->adminListUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag** | **string**|  |
 **order** | **string**|  | [optional]
 **asc** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **showEmails** | **bool**|  | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20052[]**](../Model/InlineResponse20052.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `anonymizeUser()`

```php
anonymizeUser($id): \InfinityFree\DiscourseApi\Model\InlineResponse20050
```

Anonymize a user

### Example

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
    $result = $apiInstance->anonymizeUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->anonymizeUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20050**](../Model/InlineResponse20050.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUser()`

```php
deleteUser($id, $inlineObject28): \InfinityFree\DiscourseApi\Model\InlineResponse20048
```

Delete a user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$inlineObject28 = new \InfinityFree\DiscourseApi\Model\InlineObject28(); // \InfinityFree\DiscourseApi\Model\InlineObject28

try {
    $result = $apiInstance->deleteUser($id, $inlineObject28);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **inlineObject28** | [**\InfinityFree\DiscourseApi\Model\InlineObject28**](../Model/InlineObject28.md)|  | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20048**](../Model/InlineResponse20048.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logOutUser()`

```php
logOutUser($id): \InfinityFree\DiscourseApi\Model\InlineResponse2001
```

Log a user out

### Example

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
    $result = $apiInstance->logOutUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->logOutUser: ', $e->getMessage(), PHP_EOL;
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

## `refreshGravatar()`

```php
refreshGravatar($username): \InfinityFree\DiscourseApi\Model\InlineResponse20051
```

Refresh gravatar

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = 'username_example'; // string

try {
    $result = $apiInstance->refreshGravatar($username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->refreshGravatar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**|  |

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20051**](../Model/InlineResponse20051.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `suspendUser()`

```php
suspendUser($id, $inlineObject29): \InfinityFree\DiscourseApi\Model\InlineResponse20049
```

Suspend a user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$inlineObject29 = new \InfinityFree\DiscourseApi\Model\InlineObject29(); // \InfinityFree\DiscourseApi\Model\InlineObject29

try {
    $result = $apiInstance->suspendUser($id, $inlineObject29);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->suspendUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **inlineObject29** | [**\InfinityFree\DiscourseApi\Model\InlineObject29**](../Model/InlineObject29.md)|  | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20049**](../Model/InlineResponse20049.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
