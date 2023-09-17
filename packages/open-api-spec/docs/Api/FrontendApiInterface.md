# OpenAPI\Server\Api\FrontendApiInterface

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**frontendSettingsGet**](FrontendApiInterface.md#frontendSettingsGet) | **GET** /frontend/settings | Retrieve frontend specific settings


## Service Declaration
```yaml
# config/services.yaml
services:
    # ...
    Acme\MyBundle\Api\FrontendApi:
        tags:
            - { name: "open_api_server.api", api: "frontend" }
    # ...
```

## **frontendSettingsGet**
> OpenAPI\Server\Model\FrontendSettings frontendSettingsGet()

Retrieve frontend specific settings

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/FrontendApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\FrontendApiInterface;

class FrontendApi implements FrontendApiInterface
{

    // ...

    /**
     * Implementation of FrontendApiInterface#frontendSettingsGet
     */
    public function frontendSettingsGet(int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**OpenAPI\Server\Model\FrontendSettings**](../Model/FrontendSettings.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

