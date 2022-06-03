# Swagger\Client\DevisControlleurApi

All URIs are relative to *http://preprod-apim.henner.com:443/henner_demo/tarification/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**devisControlleurAjouterPieceJustificatifPOSTA095c05125844cb5B97e285694160b76**](DevisControlleurApi.md#devisControlleurAjouterPieceJustificatifPOSTA095c05125844cb5B97e285694160b76) | **POST** /sante/individuel/{IdentifiantApporteur}/offre/{IdentifiantOffre}/devis/{IdentifiantDevis}/piece | Ajouter une piece justificatives
[**devisControlleurCreerDevisPOST8aeea6eb96e24af4919cA2ea15c8bd2c**](DevisControlleurApi.md#devisControlleurCreerDevisPOST8aeea6eb96e24af4919cA2ea15c8bd2c) | **POST** /sante/individuel/{IdentifiantApporteur}/offre/{IdentifiantOffre}/devis | Créer un devis en santé individuel
[**devisControlleurEnregistrerSouscriptionDevisPOST8996a70aFe354db8Ba5931d914137e81**](DevisControlleurApi.md#devisControlleurEnregistrerSouscriptionDevisPOST8996a70aFe354db8Ba5931d914137e81) | **POST** /sante/individuel/{IdentifiantApporteur}/offre/{IdentifiantOffre}/devis/{IdentifiantDevis} | Enregistrement de la souscription du devis
[**devisControlleurRechercherPiecesJustificatifsGET5acb7823D78d4cb4859800dd6e1cd2a8**](DevisControlleurApi.md#devisControlleurRechercherPiecesJustificatifsGET5acb7823D78d4cb4859800dd6e1cd2a8) | **GET** /sante/individuel/{IdentifiantApporteur}/offre/{IdentifiantOffre}/devis/{IdentifiantDevis}/piece | Récuperer les pieces justificatives
[**devisControlleurRecupererDevisGET79ce31599d304d67B9eb801cddbe184c**](DevisControlleurApi.md#devisControlleurRecupererDevisGET79ce31599d304d67B9eb801cddbe184c) | **GET** /sante/individuel/{IdentifiantApporteur}/offre/{IdentifiantOffre}/devis/{IdentifiantDevis} | Récupérer le contenu d&#39;un devis
[**devisControlleurRecupererDocumentGETEd06a6693c0e4e28B73fFb9d416d6074**](DevisControlleurApi.md#devisControlleurRecupererDocumentGETEd06a6693c0e4e28B73fFb9d416d6074) | **GET** /sante/individuel/{IdentifiantApporteur}/offre/{IdentifiantOffre}/devis/{IdentifiantDevis}/document/{TypeDocument} | Récupérer un document d&#39;un devis
[**devisControlleurRecupererPieceJustificatifGETC97259a20b494c83990a2ff9b1df7cdd**](DevisControlleurApi.md#devisControlleurRecupererPieceJustificatifGETC97259a20b494c83990a2ff9b1df7cdd) | **GET** /sante/individuel/{IdentifiantApporteur}/offre/{IdentifiantOffre}/devis/{IdentifiantDevis}/piece/{IdentifiantPiece} | Récuperer le contenu d&#39;une piece justificatives
[**devisControlleurSupprimerPieceJustificatifDELETEEef3b8a24d414f9dB6ee43618a0ff182**](DevisControlleurApi.md#devisControlleurSupprimerPieceJustificatifDELETEEef3b8a24d414f9dB6ee43618a0ff182) | **DELETE** /sante/individuel/{IdentifiantApporteur}/offre/{IdentifiantOffre}/devis/{IdentifiantDevis}/piece/{IdentifiantPiece} | Supprimer une pièce justificative


# **devisControlleurAjouterPieceJustificatifPOSTA095c05125844cb5B97e285694160b76**
> int devisControlleurAjouterPieceJustificatifPOSTA095c05125844cb5B97e285694160b76($identifiant_offre, $identifiant_apporteur, $identifiant_devis, $fichier, $code_type, $date_signature)

Ajouter une piece justificatives

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DevisControlleurApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifiant_offre = 56; // int | Identifiant de l'offre
$identifiant_apporteur = 56; // int | Identifiant de l'apporteur
$identifiant_devis = "identifiant_devis_example"; // string | Identifiant du devis (Attention il faut bien echapper les caractères)
$fichier = "/path/to/file.txt"; // \SplFileObject | 
$code_type = "code_type_example"; // string | 
$date_signature = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->devisControlleurAjouterPieceJustificatifPOSTA095c05125844cb5B97e285694160b76($identifiant_offre, $identifiant_apporteur, $identifiant_devis, $fichier, $code_type, $date_signature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevisControlleurApi->devisControlleurAjouterPieceJustificatifPOSTA095c05125844cb5B97e285694160b76: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifiant_offre** | **int**| Identifiant de l&#39;offre |
 **identifiant_apporteur** | **int**| Identifiant de l&#39;apporteur |
 **identifiant_devis** | **string**| Identifiant du devis (Attention il faut bien echapper les caractères) |
 **fichier** | **\SplFileObject**|  |
 **code_type** | **string**|  |
 **date_signature** | **\DateTime**|  | [optional]

### Return type

**int**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devisControlleurCreerDevisPOST8aeea6eb96e24af4919cA2ea15c8bd2c**
> \Swagger\Client\Model\HennerApiTarificationCommunDtoDevisCreationDto devisControlleurCreerDevisPOST8aeea6eb96e24af4919cA2ea15c8bd2c($identifiant_offre, $identifiant_apporteur, $body)

Créer un devis en santé individuel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DevisControlleurApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifiant_offre = 56; // int | Identifiant de l'offre
$identifiant_apporteur = 56; // int | Identifiant de l'apporteur
$body = new \Swagger\Client\Model\HennerApiTarificationCommunDtoDevisDto(); // \Swagger\Client\Model\HennerApiTarificationCommunDtoDevisDto | Devis à créer

try {
    $result = $apiInstance->devisControlleurCreerDevisPOST8aeea6eb96e24af4919cA2ea15c8bd2c($identifiant_offre, $identifiant_apporteur, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevisControlleurApi->devisControlleurCreerDevisPOST8aeea6eb96e24af4919cA2ea15c8bd2c: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifiant_offre** | **int**| Identifiant de l&#39;offre |
 **identifiant_apporteur** | **int**| Identifiant de l&#39;apporteur |
 **body** | [**\Swagger\Client\Model\HennerApiTarificationCommunDtoDevisDto**](../Model/HennerApiTarificationCommunDtoDevisDto.md)| Devis à créer | [optional]

### Return type

[**\Swagger\Client\Model\HennerApiTarificationCommunDtoDevisCreationDto**](../Model/HennerApiTarificationCommunDtoDevisCreationDto.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devisControlleurEnregistrerSouscriptionDevisPOST8996a70aFe354db8Ba5931d914137e81**
> devisControlleurEnregistrerSouscriptionDevisPOST8996a70aFe354db8Ba5931d914137e81($identifiant_offre, $identifiant_apporteur, $identifiant_devis, $body)

Enregistrement de la souscription du devis

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DevisControlleurApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifiant_offre = 56; // int | Identifiant de l'offre
$identifiant_apporteur = 56; // int | Identifiant de l'apporteur
$identifiant_devis = "identifiant_devis_example"; // string | Identifiant du devis (Attention il faut bien echapper les caractères)
$body = new \Swagger\Client\Model\HennerApiTarificationCommunDtoInformationSouscriptionDto(); // \Swagger\Client\Model\HennerApiTarificationCommunDtoInformationSouscriptionDto | Information de souscription

try {
    $apiInstance->devisControlleurEnregistrerSouscriptionDevisPOST8996a70aFe354db8Ba5931d914137e81($identifiant_offre, $identifiant_apporteur, $identifiant_devis, $body);
} catch (Exception $e) {
    echo 'Exception when calling DevisControlleurApi->devisControlleurEnregistrerSouscriptionDevisPOST8996a70aFe354db8Ba5931d914137e81: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifiant_offre** | **int**| Identifiant de l&#39;offre |
 **identifiant_apporteur** | **int**| Identifiant de l&#39;apporteur |
 **identifiant_devis** | **string**| Identifiant du devis (Attention il faut bien echapper les caractères) |
 **body** | [**\Swagger\Client\Model\HennerApiTarificationCommunDtoInformationSouscriptionDto**](../Model/HennerApiTarificationCommunDtoInformationSouscriptionDto.md)| Information de souscription | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devisControlleurRechercherPiecesJustificatifsGET5acb7823D78d4cb4859800dd6e1cd2a8**
> \Swagger\Client\Model\HennerApiTarificationCommunDtoPieceJustificativeDto[] devisControlleurRechercherPiecesJustificatifsGET5acb7823D78d4cb4859800dd6e1cd2a8($identifiant_offre, $identifiant_apporteur, $identifiant_devis)

Récuperer les pieces justificatives

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DevisControlleurApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifiant_offre = 56; // int | Identifiant de l'offre
$identifiant_apporteur = 56; // int | Identifiant de l'apporteur
$identifiant_devis = "identifiant_devis_example"; // string | Identifiant du devis (Attention il faut bien echapper les caractères)

try {
    $result = $apiInstance->devisControlleurRechercherPiecesJustificatifsGET5acb7823D78d4cb4859800dd6e1cd2a8($identifiant_offre, $identifiant_apporteur, $identifiant_devis);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevisControlleurApi->devisControlleurRechercherPiecesJustificatifsGET5acb7823D78d4cb4859800dd6e1cd2a8: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifiant_offre** | **int**| Identifiant de l&#39;offre |
 **identifiant_apporteur** | **int**| Identifiant de l&#39;apporteur |
 **identifiant_devis** | **string**| Identifiant du devis (Attention il faut bien echapper les caractères) |

### Return type

[**\Swagger\Client\Model\HennerApiTarificationCommunDtoPieceJustificativeDto[]**](../Model/HennerApiTarificationCommunDtoPieceJustificativeDto.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devisControlleurRecupererDevisGET79ce31599d304d67B9eb801cddbe184c**
> \Swagger\Client\Model\HennerApiTarificationCommunDtoDevisDto devisControlleurRecupererDevisGET79ce31599d304d67B9eb801cddbe184c($identifiant_offre, $identifiant_apporteur, $identifiant_devis)

Récupérer le contenu d'un devis

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DevisControlleurApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifiant_offre = 56; // int | Identifiant de l'offre
$identifiant_apporteur = 56; // int | Identifiant de l'apporteur
$identifiant_devis = "identifiant_devis_example"; // string | Identifiant du devis (Attention il faut bien echapper les caractères)

try {
    $result = $apiInstance->devisControlleurRecupererDevisGET79ce31599d304d67B9eb801cddbe184c($identifiant_offre, $identifiant_apporteur, $identifiant_devis);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevisControlleurApi->devisControlleurRecupererDevisGET79ce31599d304d67B9eb801cddbe184c: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifiant_offre** | **int**| Identifiant de l&#39;offre |
 **identifiant_apporteur** | **int**| Identifiant de l&#39;apporteur |
 **identifiant_devis** | **string**| Identifiant du devis (Attention il faut bien echapper les caractères) |

### Return type

[**\Swagger\Client\Model\HennerApiTarificationCommunDtoDevisDto**](../Model/HennerApiTarificationCommunDtoDevisDto.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devisControlleurRecupererDocumentGETEd06a6693c0e4e28B73fFb9d416d6074**
> devisControlleurRecupererDocumentGETEd06a6693c0e4e28B73fFb9d416d6074($identifiant_offre, $identifiant_apporteur, $identifiant_devis, $type_document)

Récupérer un document d'un devis

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DevisControlleurApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifiant_offre = 56; // int | Identifiant de l'offre
$identifiant_apporteur = 56; // int | Identifiant de l'apporteur
$identifiant_devis = "identifiant_devis_example"; // string | Identifiant du devis (Attention il faut bien echapper les caractères)
$type_document = "type_document_example"; // string | Type de document (Devis uniquement)

try {
    $apiInstance->devisControlleurRecupererDocumentGETEd06a6693c0e4e28B73fFb9d416d6074($identifiant_offre, $identifiant_apporteur, $identifiant_devis, $type_document);
} catch (Exception $e) {
    echo 'Exception when calling DevisControlleurApi->devisControlleurRecupererDocumentGETEd06a6693c0e4e28B73fFb9d416d6074: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifiant_offre** | **int**| Identifiant de l&#39;offre |
 **identifiant_apporteur** | **int**| Identifiant de l&#39;apporteur |
 **identifiant_devis** | **string**| Identifiant du devis (Attention il faut bien echapper les caractères) |
 **type_document** | **string**| Type de document (Devis uniquement) |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devisControlleurRecupererPieceJustificatifGETC97259a20b494c83990a2ff9b1df7cdd**
> devisControlleurRecupererPieceJustificatifGETC97259a20b494c83990a2ff9b1df7cdd($identifiant_offre, $identifiant_apporteur, $identifiant_devis, $identifiant_piece)

Récuperer le contenu d'une piece justificatives

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DevisControlleurApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifiant_offre = 56; // int | Identifiant de l'offre
$identifiant_apporteur = 56; // int | Identifiant de l'apporteur
$identifiant_devis = "identifiant_devis_example"; // string | Identifiant du devis (Attention il faut bien echapper les caractères)
$identifiant_piece = 789; // int | Identifiant de la pièce justificative

try {
    $apiInstance->devisControlleurRecupererPieceJustificatifGETC97259a20b494c83990a2ff9b1df7cdd($identifiant_offre, $identifiant_apporteur, $identifiant_devis, $identifiant_piece);
} catch (Exception $e) {
    echo 'Exception when calling DevisControlleurApi->devisControlleurRecupererPieceJustificatifGETC97259a20b494c83990a2ff9b1df7cdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifiant_offre** | **int**| Identifiant de l&#39;offre |
 **identifiant_apporteur** | **int**| Identifiant de l&#39;apporteur |
 **identifiant_devis** | **string**| Identifiant du devis (Attention il faut bien echapper les caractères) |
 **identifiant_piece** | **int**| Identifiant de la pièce justificative |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devisControlleurSupprimerPieceJustificatifDELETEEef3b8a24d414f9dB6ee43618a0ff182**
> devisControlleurSupprimerPieceJustificatifDELETEEef3b8a24d414f9dB6ee43618a0ff182($identifiant_offre, $identifiant_apporteur, $identifiant_devis, $identifiant_piece)

Supprimer une pièce justificative

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DevisControlleurApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifiant_offre = 56; // int | Identifiant de l'offre
$identifiant_apporteur = 56; // int | Identifiant de l'apporteur
$identifiant_devis = "identifiant_devis_example"; // string | Identifiant du devis (Attention il faut bien echapper les caractères)
$identifiant_piece = 789; // int | Identifiant de la pièce justificative

try {
    $apiInstance->devisControlleurSupprimerPieceJustificatifDELETEEef3b8a24d414f9dB6ee43618a0ff182($identifiant_offre, $identifiant_apporteur, $identifiant_devis, $identifiant_piece);
} catch (Exception $e) {
    echo 'Exception when calling DevisControlleurApi->devisControlleurSupprimerPieceJustificatifDELETEEef3b8a24d414f9dB6ee43618a0ff182: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifiant_offre** | **int**| Identifiant de l&#39;offre |
 **identifiant_apporteur** | **int**| Identifiant de l&#39;apporteur |
 **identifiant_devis** | **string**| Identifiant du devis (Attention il faut bien echapper les caractères) |
 **identifiant_piece** | **int**| Identifiant de la pièce justificative |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

