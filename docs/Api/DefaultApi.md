# Swagger\Client\DefaultApi

All URIs are relative to *http://preprod-apim.henner.com:443/henner_demo/tarification/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**swaggerDocSwaggerJsonGet**](DefaultApi.md#swaggerDocSwaggerJsonGet) | **GET** /swagger/doc/swagger.json | 
[**utilsPingGet**](DefaultApi.md#utilsPingGet) | **GET** /__utils/ping | 


# **swaggerDocSwaggerJsonGet**
> swaggerDocSwaggerJsonGet()



Fichier de description Swagger

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->swaggerDocSwaggerJsonGet();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->swaggerDocSwaggerJsonGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **utilsPingGet**
> utilsPingGet()



Ping du service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->utilsPingGet();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->utilsPingGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

