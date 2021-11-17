# InfinityFree\DiscourseApi\UploadsApi

All URIs are relative to https://discourse.example.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUpload()**](UploadsApi.md#createUpload) | **POST** /uploads.json | Creates an upload


## `createUpload()`

```php
createUpload($type, $userId, $synchronous, $file): \InfinityFree\DiscourseApi\Model\InlineResponse20042
```

Creates an upload

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\UploadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 'type_example'; // string
$userId = 56; // int | required if uploading an avatar
$synchronous = True; // bool | Use this flag to return an id and url
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->createUpload($type, $userId, $synchronous, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadsApi->createUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**|  |
 **userId** | **int**| required if uploading an avatar | [optional]
 **synchronous** | **bool**| Use this flag to return an id and url | [optional]
 **file** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20042**](../Model/InlineResponse20042.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
