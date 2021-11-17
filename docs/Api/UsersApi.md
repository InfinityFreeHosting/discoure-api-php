# InfinityFree\DiscourseApi\UsersApi

All URIs are relative to https://discourse.example.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminGetUser()**](UsersApi.md#adminGetUser) | **GET** /admin/users/{id}.json | Get a user by id
[**adminListUsers()**](UsersApi.md#adminListUsers) | **GET** /admin/users/list/{flag}.json | Get a list of users
[**anonymizeUser()**](UsersApi.md#anonymizeUser) | **PUT** /admin/users/{id}/anonymize.json | Anonymize a user
[**changePassword()**](UsersApi.md#changePassword) | **PUT** /users/password-reset/{token}.json | Change password
[**createUser()**](UsersApi.md#createUser) | **POST** /users.json | Creates a user
[**deleteUser()**](UsersApi.md#deleteUser) | **DELETE** /admin/users/{id}.json | Delete a user
[**getUser()**](UsersApi.md#getUser) | **GET** /u/{username}.json | Get a single user by username
[**getUserExternalId()**](UsersApi.md#getUserExternalId) | **GET** /u/by-external/{external_id}.json | Get a user by external_id
[**getUserIdentiyProviderExternalId()**](UsersApi.md#getUserIdentiyProviderExternalId) | **GET** /u/by-external/{provider}/{external_id}.json | Get a user by identity provider external ID
[**listUserActions()**](UsersApi.md#listUserActions) | **GET** /user_actions.json | Get a list of user actions
[**listUserBadges()**](UsersApi.md#listUserBadges) | **GET** /user-badges/{username}.json | List badges for a user
[**listUsersPublic()**](UsersApi.md#listUsersPublic) | **GET** /directory_items.json | Get a public list of users
[**logOutUser()**](UsersApi.md#logOutUser) | **POST** /admin/users/{id}/log_out.json | Log a user out
[**refreshGravatar()**](UsersApi.md#refreshGravatar) | **POST** /user_avatar/{username}/refresh_gravatar.json | Refresh gravatar
[**sendPasswordResetEmail()**](UsersApi.md#sendPasswordResetEmail) | **POST** /session/forgot_password.json | Send password reset email
[**suspendUser()**](UsersApi.md#suspendUser) | **PUT** /admin/users/{id}/suspend.json | Suspend a user
[**updateAvatar()**](UsersApi.md#updateAvatar) | **PUT** /u/{username}/preferences/avatar/pick.json | Update avatar
[**updateEmail()**](UsersApi.md#updateEmail) | **PUT** /u/{username}/preferences/email.json | Update email


## `adminGetUser()`

```php
adminGetUser($id): \InfinityFree\DiscourseApi\Model\InlineResponse20047
```

Get a user by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->adminGetUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminGetUser: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new InfinityFree\DiscourseApi\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->adminListUsers: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new InfinityFree\DiscourseApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->anonymizeUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->anonymizeUser: ', $e->getMessage(), PHP_EOL;
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

## `changePassword()`

```php
changePassword($token, $inlineObject31)
```

Change password

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string
$inlineObject31 = new \InfinityFree\DiscourseApi\Model\InlineObject31(); // \InfinityFree\DiscourseApi\Model\InlineObject31

try {
    $apiInstance->changePassword($token, $inlineObject31);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->changePassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  |
 **inlineObject31** | [**\InfinityFree\DiscourseApi\Model\InlineObject31**](../Model/InlineObject31.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createUser()`

```php
createUser($apiKey, $apiUsername, $inlineObject25): \InfinityFree\DiscourseApi\Model\InlineResponse20044
```

Creates a user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$apiKey = 'apiKey_example'; // string
$apiUsername = 'apiUsername_example'; // string
$inlineObject25 = new \InfinityFree\DiscourseApi\Model\InlineObject25(); // \InfinityFree\DiscourseApi\Model\InlineObject25

try {
    $result = $apiInstance->createUser($apiKey, $apiUsername, $inlineObject25);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->createUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **apiUsername** | **string**|  |
 **inlineObject25** | [**\InfinityFree\DiscourseApi\Model\InlineObject25**](../Model/InlineObject25.md)|  | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20044**](../Model/InlineResponse20044.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
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



$apiInstance = new InfinityFree\DiscourseApi\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->deleteUser: ', $e->getMessage(), PHP_EOL;
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

## `getUser()`

```php
getUser($apiKey, $apiUsername, $username): \InfinityFree\DiscourseApi\Model\InlineResponse20045
```

Get a single user by username

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$apiKey = 'apiKey_example'; // string
$apiUsername = 'apiUsername_example'; // string
$username = 'username_example'; // string

try {
    $result = $apiInstance->getUser($apiKey, $apiUsername, $username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **apiUsername** | **string**|  |
 **username** | **string**|  |

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20045**](../Model/InlineResponse20045.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserExternalId()`

```php
getUserExternalId($apiKey, $apiUsername, $externalId): \InfinityFree\DiscourseApi\Model\InlineResponse20045
```

Get a user by external_id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$apiKey = 'apiKey_example'; // string
$apiUsername = 'apiUsername_example'; // string
$externalId = 'externalId_example'; // string

try {
    $result = $apiInstance->getUserExternalId($apiKey, $apiUsername, $externalId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserExternalId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **apiUsername** | **string**|  |
 **externalId** | **string**|  |

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20045**](../Model/InlineResponse20045.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserIdentiyProviderExternalId()`

```php
getUserIdentiyProviderExternalId($apiKey, $apiUsername, $provider, $externalId): \InfinityFree\DiscourseApi\Model\InlineResponse20045
```

Get a user by identity provider external ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$apiKey = 'apiKey_example'; // string
$apiUsername = 'apiUsername_example'; // string
$provider = 'provider_example'; // string | Authentication provider name. Can be found in the provider callback URL: `/auth/{provider}/callback`
$externalId = 'externalId_example'; // string

try {
    $result = $apiInstance->getUserIdentiyProviderExternalId($apiKey, $apiUsername, $provider, $externalId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserIdentiyProviderExternalId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **apiUsername** | **string**|  |
 **provider** | **string**| Authentication provider name. Can be found in the provider callback URL: &#x60;/auth/{provider}/callback&#x60; |
 **externalId** | **string**|  |

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20045**](../Model/InlineResponse20045.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUserActions()`

```php
listUserActions($offset, $username, $filter): \InfinityFree\DiscourseApi\Model\InlineResponse20053
```

Get a list of user actions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int
$username = 'username_example'; // string
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->listUserActions($offset, $username, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->listUserActions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**|  |
 **username** | **string**|  |
 **filter** | **string**|  |

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20053**](../Model/InlineResponse20053.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

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



$apiInstance = new InfinityFree\DiscourseApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = 'username_example'; // string

try {
    $result = $apiInstance->listUserBadges($username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->listUserBadges: ', $e->getMessage(), PHP_EOL;
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

## `listUsersPublic()`

```php
listUsersPublic($period, $order, $asc, $page): \InfinityFree\DiscourseApi\Model\InlineResponse20046
```

Get a public list of users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$period = 'period_example'; // string
$order = 'order_example'; // string
$asc = 'asc_example'; // string
$page = 56; // int

try {
    $result = $apiInstance->listUsersPublic($period, $order, $asc, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->listUsersPublic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **period** | **string**|  |
 **order** | **string**|  |
 **asc** | **string**|  | [optional]
 **page** | **int**|  | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20046**](../Model/InlineResponse20046.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
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



$apiInstance = new InfinityFree\DiscourseApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->logOutUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->logOutUser: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new InfinityFree\DiscourseApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = 'username_example'; // string

try {
    $result = $apiInstance->refreshGravatar($username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->refreshGravatar: ', $e->getMessage(), PHP_EOL;
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

## `sendPasswordResetEmail()`

```php
sendPasswordResetEmail($inlineObject30): \InfinityFree\DiscourseApi\Model\InlineResponse20054
```

Send password reset email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inlineObject30 = new \InfinityFree\DiscourseApi\Model\InlineObject30(); // \InfinityFree\DiscourseApi\Model\InlineObject30

try {
    $result = $apiInstance->sendPasswordResetEmail($inlineObject30);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->sendPasswordResetEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inlineObject30** | [**\InfinityFree\DiscourseApi\Model\InlineObject30**](../Model/InlineObject30.md)|  | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20054**](../Model/InlineResponse20054.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
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



$apiInstance = new InfinityFree\DiscourseApi\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->suspendUser: ', $e->getMessage(), PHP_EOL;
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

## `updateAvatar()`

```php
updateAvatar($username, $inlineObject26): \InfinityFree\DiscourseApi\Model\InlineResponse2001
```

Update avatar

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = 'username_example'; // string
$inlineObject26 = new \InfinityFree\DiscourseApi\Model\InlineObject26(); // \InfinityFree\DiscourseApi\Model\InlineObject26

try {
    $result = $apiInstance->updateAvatar($username, $inlineObject26);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->updateAvatar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**|  |
 **inlineObject26** | [**\InfinityFree\DiscourseApi\Model\InlineObject26**](../Model/InlineObject26.md)|  | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmail()`

```php
updateEmail($username, $inlineObject27)
```

Update email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = 'username_example'; // string
$inlineObject27 = new \InfinityFree\DiscourseApi\Model\InlineObject27(); // \InfinityFree\DiscourseApi\Model\InlineObject27

try {
    $apiInstance->updateEmail($username, $inlineObject27);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->updateEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**|  |
 **inlineObject27** | [**\InfinityFree\DiscourseApi\Model\InlineObject27**](../Model/InlineObject27.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
