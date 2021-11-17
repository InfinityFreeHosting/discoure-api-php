# InfinityFree\DiscourseApi\InvitesApi

All URIs are relative to https://discourse.example.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createInvite()**](InvitesApi.md#createInvite) | **POST** /invites.json | Create an invite
[**inviteToTopic()**](InvitesApi.md#inviteToTopic) | **POST** /t/{id}/invite.json | Invite to topic


## `createInvite()`

```php
createInvite($apiKey, $apiUsername, $inlineObject9): \InfinityFree\DiscourseApi\Model\InlineResponse20015
```

Create an invite

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\InvitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$apiKey = 'apiKey_example'; // string
$apiUsername = 'apiUsername_example'; // string
$inlineObject9 = new \InfinityFree\DiscourseApi\Model\InlineObject9(); // \InfinityFree\DiscourseApi\Model\InlineObject9

try {
    $result = $apiInstance->createInvite($apiKey, $apiUsername, $inlineObject9);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitesApi->createInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **apiUsername** | **string**|  |
 **inlineObject9** | [**\InfinityFree\DiscourseApi\Model\InlineObject9**](../Model/InlineObject9.md)|  | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inviteToTopic()`

```php
inviteToTopic($apiKey, $apiUsername, $id, $inlineObject19): \InfinityFree\DiscourseApi\Model\InlineResponse20037
```

Invite to topic

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new InfinityFree\DiscourseApi\Api\InvitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$apiKey = 'apiKey_example'; // string
$apiUsername = 'apiUsername_example'; // string
$id = 'id_example'; // string
$inlineObject19 = new \InfinityFree\DiscourseApi\Model\InlineObject19(); // \InfinityFree\DiscourseApi\Model\InlineObject19

try {
    $result = $apiInstance->inviteToTopic($apiKey, $apiUsername, $id, $inlineObject19);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitesApi->inviteToTopic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKey** | **string**|  |
 **apiUsername** | **string**|  |
 **id** | **string**|  |
 **inlineObject19** | [**\InfinityFree\DiscourseApi\Model\InlineObject19**](../Model/InlineObject19.md)|  | [optional]

### Return type

[**\InfinityFree\DiscourseApi\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
