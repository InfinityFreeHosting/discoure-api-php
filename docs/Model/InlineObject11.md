# # InlineObject11

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | Required if creating a new topic or new private message. | [optional]
**raw** | **string** |  |
**topicId** | **int** | Required if creating a new post. | [optional]
**category** | **int** | Optional if creating a new topic, and ignored if creating a new post. | [optional]
**targetRecipients** | **string** | Required for private message, comma separated. | [optional]
**targetUsernames** | **string** | Deprecated. Use target_recipients instead. | [optional]
**archetype** | **string** | Required for new private message. | [optional]
**createdAt** | **string** |  | [optional]
**embedUrl** | **string** | Provide a URL from a remote system to associate a forum topic with that URL, typically for using Discourse as a comments system for an external blog. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
