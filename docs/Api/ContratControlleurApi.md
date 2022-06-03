# Swagger\Client\ContratControlleurApi

All URIs are relative to *http://preprod-apim.henner.com:443/henner_demo/tarification/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**contratControlleurCreerContratDepuisDevisPOST146b54a64cf048c29a88A809678e777e**](ContratControlleurApi.md#contratControlleurCreerContratDepuisDevisPOST146b54a64cf048c29a88A809678e777e) | **POST** /sante/individuel/{IdentifiantApporteur}/offre/{IdentifiantOffre}/devis/{IdentifiantDevis}/contrat | Création du contrat


# **contratControlleurCreerContratDepuisDevisPOST146b54a64cf048c29a88A809678e777e**
> \Swagger\Client\Model\HennerApiTarificationCommunDtoContratDto contratControlleurCreerContratDepuisDevisPOST146b54a64cf048c29a88A809678e777e($identifiant_offre, $identifiant_apporteur, $identifiant_devis, $body)

Création du contrat

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContratControlleurApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifiant_offre = 56; // int | Identifiant de l'offre
$identifiant_apporteur = 56; // int | Identifiant de l'apporteur
$identifiant_devis = "identifiant_devis_example"; // string | Identifiant du devis (Attention il faut bien echapper les caractères)
$body = new \Swagger\Client\Model\HennerApiTarificationCommunDtoInformationCreationContratDto(); // \Swagger\Client\Model\HennerApiTarificationCommunDtoInformationCreationContratDto | Information de création du contrat

try {
    $result = $apiInstance->contratControlleurCreerContratDepuisDevisPOST146b54a64cf048c29a88A809678e777e($identifiant_offre, $identifiant_apporteur, $identifiant_devis, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContratControlleurApi->contratControlleurCreerContratDepuisDevisPOST146b54a64cf048c29a88A809678e777e: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifiant_offre** | **int**| Identifiant de l&#39;offre |
 **identifiant_apporteur** | **int**| Identifiant de l&#39;apporteur |
 **identifiant_devis** | **string**| Identifiant du devis (Attention il faut bien echapper les caractères) |
 **body** | [**\Swagger\Client\Model\HennerApiTarificationCommunDtoInformationCreationContratDto**](../Model/HennerApiTarificationCommunDtoInformationCreationContratDto.md)| Information de création du contrat | [optional]

### Return type

[**\Swagger\Client\Model\HennerApiTarificationCommunDtoContratDto**](../Model/HennerApiTarificationCommunDtoContratDto.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

