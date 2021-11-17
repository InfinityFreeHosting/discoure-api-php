# InfinityFree\DiscourseApi\CategoriesApi

All URIs are relative to https://discourse.example.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCategory()**](CategoriesApi.md#createCategory) | **POST** /categories.json | Creates a category
[**getCategory()**](CategoriesApi.md#getCategory) | **GET** /c/{id}/show.json | Show category
[**getSite()**](CategoriesApi.md#getSite) | **GET** /site.json | Get site info
[**listCategories()**](CategoriesApi.md#listCategories) | **GET** /categories.json | Retrieves a list of categories
[**listCategoryTopics()**](CategoriesApi.md#listCategoryTopics) | **GET** /c/{slug}/{id}.json | List topics
[**updateCategory()**](CategoriesApi.md#updateCategory) | **PUT** /categories/{id}.json | Updates a category


## `createCategory()`

```php
createCategory($inlineObject3): \InfinityFree\DiscourseApi\Model\InlineResponse2005
```

Creates a category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inlineObject3 = new \InfinityFree\DiscourseApi\Model\InlineObject3(); // \InfinityFree\DiscourseApi\Model\InlineObject3

try {
    $result = $apiInstance->createCategory($inlineObject3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->createCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inlineObject3** | [**\InfinityFree\DiscourseApi\Model\InlineObject3**](../Model/InlineObject3.md)|  | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategory()`

```php
getCategory($id): \InfinityFree\DiscourseApi\Model\InlineResponse2005
```

Show category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->getCategory($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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



$apiInstance = new InfinityFree\DiscourseApi\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getSite();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getSite: ', $e->getMessage(), PHP_EOL;
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

## `listCategories()`

```php
listCategories($includeSubcategories): \InfinityFree\DiscourseApi\Model\InlineResponse2004
```

Retrieves a list of categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$includeSubcategories = True; // bool

try {
    $result = $apiInstance->listCategories($includeSubcategories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->listCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **includeSubcategories** | **bool**|  | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCategoryTopics()`

```php
listCategoryTopics($slug, $id): \InfinityFree\DiscourseApi\Model\InlineResponse2007
```

List topics

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$slug = 'slug_example'; // string
$id = 56; // int

try {
    $result = $apiInstance->listCategoryTopics($slug, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->listCategoryTopics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slug** | **string**|  |
 **id** | **int**|  |

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCategory()`

```php
updateCategory($id, $inlineObject4): \InfinityFree\DiscourseApi\Model\InlineResponse2006
```

Updates a category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$inlineObject4 = new \InfinityFree\DiscourseApi\Model\InlineObject4(); // \InfinityFree\DiscourseApi\Model\InlineObject4

try {
    $result = $apiInstance->updateCategory($id, $inlineObject4);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->updateCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **inlineObject4** | [**\InfinityFree\DiscourseApi\Model\InlineObject4**](../Model/InlineObject4.md)|  | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
