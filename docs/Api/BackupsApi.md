# InfinityFree\DiscourseApi\BackupsApi

All URIs are relative to https://discourse.example.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBackup()**](BackupsApi.md#createBackup) | **POST** /admin/backups.json | Create backup
[**downloadBackup()**](BackupsApi.md#downloadBackup) | **GET** /admin/backups/{filename} | Download backup
[**getBackups()**](BackupsApi.md#getBackups) | **GET** /admin/backups.json | List backups
[**sendDownloadBackupEmail()**](BackupsApi.md#sendDownloadBackupEmail) | **PUT** /admin/backups/{filename} | Send download backup email


## `createBackup()`

```php
createBackup($inlineObject): \InfinityFree\DiscourseApi\Model\InlineResponse2001
```

Create backup

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inlineObject = new \InfinityFree\DiscourseApi\Model\InlineObject(); // \InfinityFree\DiscourseApi\Model\InlineObject

try {
    $result = $apiInstance->createBackup($inlineObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->createBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inlineObject** | [**\InfinityFree\DiscourseApi\Model\InlineObject**](../Model/InlineObject.md)|  | [optional]

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

## `downloadBackup()`

```php
downloadBackup($filename, $token)
```

Download backup

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filename = 'filename_example'; // string
$token = 'token_example'; // string

try {
    $apiInstance->downloadBackup($filename, $token);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->downloadBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filename** | **string**|  |
 **token** | **string**|  |

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

## `getBackups()`

```php
getBackups(): \InfinityFree\DiscourseApi\Model\InlineResponse200[]
```

List backups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getBackups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->getBackups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse200[]**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendDownloadBackupEmail()`

```php
sendDownloadBackupEmail($filename)
```

Send download backup email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filename = 'filename_example'; // string

try {
    $apiInstance->sendDownloadBackupEmail($filename);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->sendDownloadBackupEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filename** | **string**|  |

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
