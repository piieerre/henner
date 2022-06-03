# Swagger\Client\OffreControlleurApi

All URIs are relative to *http://preprod-apim.henner.com:443/henner_demo/tarification/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**offreControlleurRecupererInformationTarificationOffreGET43da7ed6169f406a86b91a0ed6496d74**](OffreControlleurApi.md#offreControlleurRecupererInformationTarificationOffreGET43da7ed6169f406a86b91a0ed6496d74) | **GET** /sante/individuel/{IdentifiantApporteur}/offre/{IdentifiantOffre} | Récuperer les critères de variation des tarifs d&#39;une offre


# **offreControlleurRecupererInformationTarificationOffreGET43da7ed6169f406a86b91a0ed6496d74**
> \Swagger\Client\Model\HennerApiTarificationCommunDtoOffreDto offreControlleurRecupererInformationTarificationOffreGET43da7ed6169f406a86b91a0ed6496d74($identifiant_offre, $identifiant_apporteur)

Récuperer les critères de variation des tarifs d'une offre

Le résultat de cette méthode peut être mise en cache coté client (pour une offre et un apporteur)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OffreControlleurApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifiant_offre = 56; // int | Identifiant de l'offre
$identifiant_apporteur = 56; // int | Identifiant de l'apporteur

try {
    $result = $apiInstance->offreControlleurRecupererInformationTarificationOffreGET43da7ed6169f406a86b91a0ed6496d74($identifiant_offre, $identifiant_apporteur);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffreControlleurApi->offreControlleurRecupererInformationTarificationOffreGET43da7ed6169f406a86b91a0ed6496d74: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifiant_offre** | **int**| Identifiant de l&#39;offre |
 **identifiant_apporteur** | **int**| Identifiant de l&#39;apporteur |

### Return type

[**\Swagger\Client\Model\HennerApiTarificationCommunDtoOffreDto**](../Model/HennerApiTarificationCommunDtoOffreDto.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

