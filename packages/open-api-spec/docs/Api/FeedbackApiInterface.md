# OpenAPI\Server\Api\FeedbackApiInterface

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**suggestPost**](FeedbackApiInterface.md#suggestPost) | **POST** /suggest | Submit a suggestion to improve a translation


## Service Declaration
```yaml
# config/services.yaml
services:
    # ...
    Acme\MyBundle\Api\FeedbackApi:
        tags:
            - { name: "open_api_server.api", api: "feedback" }
    # ...
```

## **suggestPost**
> OpenAPI\Server\Model\SuggestResponse suggestPost($q, $s, $source, $target)

Submit a suggestion to improve a translation

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/FeedbackApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\FeedbackApiInterface;

class FeedbackApi implements FeedbackApiInterface
{

    // ...

    /**
     * Implementation of FeedbackApiInterface#suggestPost
     */
    public function suggestPost($q, $s, $source, $target, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | [**AnyType**](../Model/AnyType.md)| Original text |
 **s** | [**AnyType**](../Model/AnyType.md)| Suggested translation |
 **source** | [**AnyType**](../Model/AnyType.md)| Language of original text |
 **target** | [**AnyType**](../Model/AnyType.md)| Language of suggested translation |

### Return type

[**OpenAPI\Server\Model\SuggestResponse**](../Model/SuggestResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

