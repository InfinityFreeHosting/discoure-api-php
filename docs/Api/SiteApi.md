# InfinityFree\DiscourseApi\SiteApi

All URIs are relative to https://discourse.example.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSite()**](SiteApi.md#getSite) | **GET** /site.json | Get site info


## `getSite()`

```php
getSite(): \InfinityFree\DiscourseApi\Model\InlineResponse20027
```

Get site info

Can be used to fetch all categories and subcategories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getSite();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->getSite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
