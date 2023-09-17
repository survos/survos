# OpenAPI\Server\Api\TranslateApiInterface

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**detectPost**](TranslateApiInterface.md#detectPost) | **POST** /detect | Detect the language of a single text
[**languagesGet**](TranslateApiInterface.md#languagesGet) | **GET** /languages | Retrieve list of supported languages
[**translateFilePost**](TranslateApiInterface.md#translateFilePost) | **POST** /translate_file | Translate file from a language to another
[**translatePost**](TranslateApiInterface.md#translatePost) | **POST** /translate | Translate text from a language to another


## Service Declaration
```yaml
# config/services.yaml
services:
    # ...
    Acme\MyBundle\Api\TranslateApi:
        tags:
            - { name: "open_api_server.api", api: "translate" }
    # ...
```

## **detectPost**
> OpenAPI\Server\Model\DetectionsInner detectPost($q, $apiKey)

Detect the language of a single text

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/TranslateApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\TranslateApiInterface;

class TranslateApi implements TranslateApiInterface
{

    // ...

    /**
     * Implementation of TranslateApiInterface#detectPost
     */
    public function detectPost($q, ?$apiKey, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | [**AnyType**](../Model/AnyType.md)| Text to detect |
 **apiKey** | [**AnyType**](../Model/AnyType.md)| API key | [optional]

### Return type

[**OpenAPI\Server\Model\DetectionsInner**](../Model/DetectionsInner.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **languagesGet**
> OpenAPI\Server\Model\LanguagesInner languagesGet()

Retrieve list of supported languages

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/TranslateApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\TranslateApiInterface;

class TranslateApi implements TranslateApiInterface
{

    // ...

    /**
     * Implementation of TranslateApiInterface#languagesGet
     */
    public function languagesGet(int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**OpenAPI\Server\Model\LanguagesInner**](../Model/LanguagesInner.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **translateFilePost**
> OpenAPI\Server\Model\TranslateFile translateFilePost($file, $source, $target, $apiKey)

Translate file from a language to another

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/TranslateApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\TranslateApiInterface;

class TranslateApi implements TranslateApiInterface
{

    // ...

    /**
     * Implementation of TranslateApiInterface#translateFilePost
     */
    public function translateFilePost(UploadedFile $file, $source, $target, ?$apiKey, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **UploadedFile****UploadedFile**| File to translate |
 **source** | [**AnyType**](../Model/AnyType.md)| Source language code |
 **target** | [**AnyType**](../Model/AnyType.md)| Target language code |
 **apiKey** | [**AnyType**](../Model/AnyType.md)| API key | [optional]

### Return type

[**OpenAPI\Server\Model\TranslateFile**](../Model/TranslateFile.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **translatePost**
> OpenAPI\Server\Model\Translate translatePost($q, $source, $target, $format, $apiKey)

Translate text from a language to another

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/TranslateApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\TranslateApiInterface;

class TranslateApi implements TranslateApiInterface
{

    // ...

    /**
     * Implementation of TranslateApiInterface#translatePost
     */
    public function translatePost($q, $source, $target, ?$format, ?$apiKey, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | [**AnyType**](../Model/AnyType.md)| Text(s) to translate |
 **source** | [**AnyType**](../Model/AnyType.md)| Source language code |
 **target** | [**AnyType**](../Model/AnyType.md)| Target language code |
 **format** | [**AnyType**](../Model/AnyType.md)| Format of source text:  * &#x60;text&#x60; - Plain text  * &#x60;html&#x60; - HTML markup | [optional]
 **apiKey** | [**AnyType**](../Model/AnyType.md)| API key | [optional]

### Return type

[**OpenAPI\Server\Model\Translate**](../Model/Translate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

