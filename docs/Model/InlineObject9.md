# # InlineObject9

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | required for email invites only | [optional]
**skipEmail** | **bool** |  | [optional] [default to false]
**customMessage** | **string** | optional, for email invites | [optional]
**maxRedemptionsAllowed** | **int** | optional, for link invites | [optional] [default to 1]
**topicId** | **int** |  | [optional]
**groupId** | **int** | optional, either this or &#x60;group_names&#x60; | [optional]
**groupNames** | **string** | optional, either this or &#x60;group_id&#x60; | [optional]
**expiresAt** | **string** | optional, if not supplied, the invite_expiry_days site setting is used | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
