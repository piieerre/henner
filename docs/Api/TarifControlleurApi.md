# Swagger\Client\TarifControlleurApi

All URIs are relative to *http://preprod-apim.henner.com:443/henner_demo/tarification/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tarifControlleurRecupererInformationTarificationOffrePOST96f62d0898b243a089b5D494603ecadf**](TarifControlleurApi.md#tarifControlleurRecupererInformationTarificationOffrePOST96f62d0898b243a089b5D494603ecadf) | **POST** /sante/individuel/{IdentifiantApporteur}/offre/{IdentifiantOffre}/tarif | Effectuer une tarification express


# **tarifControlleurRecupererInformationTarificationOffrePOST96f62d0898b243a089b5D494603ecadf**
> \Swagger\Client\Model\HennerApiTarificationCommunDtoTarificationExpressDto tarifControlleurRecupererInformationTarificationOffrePOST96f62d0898b243a089b5D494603ecadf($identifiant_offre, $identifiant_apporteur, $body)

Effectuer une tarification express

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TarifControlleurApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifiant_offre = 56; // int | Identifiant de l'offre
$identifiant_apporteur = 56; // int | Identifiant de l'apporteur
$body = new \Swagger\Client\Model\HennerApiTarificationCommunDtoCritereTarificationExpressDto(); // \Swagger\Client\Model\HennerApiTarificationCommunDtoCritereTarificationExpressDto | Critère de tarification

try {
    $result = $apiInstance->tarifControlleurRecupererInformationTarificationOffrePOST96f62d0898b243a089b5D494603ecadf($identifiant_offre, $identifiant_apporteur, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TarifControlleurApi->tarifControlleurRecupererInformationTarificationOffrePOST96f62d0898b243a089b5D494603ecadf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifiant_offre** | **int**| Identifiant de l&#39;offre |
 **identifiant_apporteur** | **int**| Identifiant de l&#39;apporteur |
 **body** | [**\Swagger\Client\Model\HennerApiTarificationCommunDtoCritereTarificationExpressDto**](../Model/HennerApiTarificationCommunDtoCritereTarificationExpressDto.md)| Critère de tarification |

### Return type

[**\Swagger\Client\Model\HennerApiTarificationCommunDtoTarificationExpressDto**](../Model/HennerApiTarificationCommunDtoTarificationExpressDto.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

