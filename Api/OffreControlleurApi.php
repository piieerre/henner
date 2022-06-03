<?php
/**
 * OffreControlleurApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Henner.Api.Tarification.WebApi
 *
 * API Henner.Api.Tarification
 *
 * OpenAPI spec version: v1.0.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.27
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * OffreControlleurApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OffreControlleurApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation offreControlleurRecupererInformationTarificationOffreGET43da7ed6169f406a86b91a0ed6496d74
     *
     * Récuperer les critères de variation des tarifs d'une offre
     *
     * @param  int $identifiant_offre Identifiant de l&#39;offre (required)
     * @param  int $identifiant_apporteur Identifiant de l&#39;apporteur (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\HennerApiTarificationCommunDtoOffreDto
     */
    public function offreControlleurRecupererInformationTarificationOffreGET43da7ed6169f406a86b91a0ed6496d74($identifiant_offre, $identifiant_apporteur)
    {
        list($response) = $this->offreControlleurRecupererInformationTarificationOffreGET43da7ed6169f406a86b91a0ed6496d74WithHttpInfo($identifiant_offre, $identifiant_apporteur);
        return $response;
    }

    /**
     * Operation offreControlleurRecupererInformationTarificationOffreGET43da7ed6169f406a86b91a0ed6496d74WithHttpInfo
     *
     * Récuperer les critères de variation des tarifs d'une offre
     *
     * @param  int $identifiant_offre Identifiant de l&#39;offre (required)
     * @param  int $identifiant_apporteur Identifiant de l&#39;apporteur (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\HennerApiTarificationCommunDtoOffreDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function offreControlleurRecupererInformationTarificationOffreGET43da7ed6169f406a86b91a0ed6496d74WithHttpInfo($identifiant_offre, $identifiant_apporteur)
    {
        $returnType = '\Swagger\Client\Model\HennerApiTarificationCommunDtoOffreDto';
        $request = $this->offreControlleurRecupererInformationTarificationOffreGET43da7ed6169f406a86b91a0ed6496d74Request($identifiant_offre, $identifiant_apporteur);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\HennerApiTarificationCommunDtoOffreDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\MicrosoftAspNetCoreMvcProblemDetails',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation offreControlleurRecupererInformationTarificationOffreGET43da7ed6169f406a86b91a0ed6496d74Async
     *
     * Récuperer les critères de variation des tarifs d'une offre
     *
     * @param  int $identifiant_offre Identifiant de l&#39;offre (required)
     * @param  int $identifiant_apporteur Identifiant de l&#39;apporteur (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function offreControlleurRecupererInformationTarificationOffreGET43da7ed6169f406a86b91a0ed6496d74Async($identifiant_offre, $identifiant_apporteur)
    {
        return $this->offreControlleurRecupererInformationTarificationOffreGET43da7ed6169f406a86b91a0ed6496d74AsyncWithHttpInfo($identifiant_offre, $identifiant_apporteur)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation offreControlleurRecupererInformationTarificationOffreGET43da7ed6169f406a86b91a0ed6496d74AsyncWithHttpInfo
     *
     * Récuperer les critères de variation des tarifs d'une offre
     *
     * @param  int $identifiant_offre Identifiant de l&#39;offre (required)
     * @param  int $identifiant_apporteur Identifiant de l&#39;apporteur (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function offreControlleurRecupererInformationTarificationOffreGET43da7ed6169f406a86b91a0ed6496d74AsyncWithHttpInfo($identifiant_offre, $identifiant_apporteur)
    {
        $returnType = '\Swagger\Client\Model\HennerApiTarificationCommunDtoOffreDto';
        $request = $this->offreControlleurRecupererInformationTarificationOffreGET43da7ed6169f406a86b91a0ed6496d74Request($identifiant_offre, $identifiant_apporteur);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'offreControlleurRecupererInformationTarificationOffreGET43da7ed6169f406a86b91a0ed6496d74'
     *
     * @param  int $identifiant_offre Identifiant de l&#39;offre (required)
     * @param  int $identifiant_apporteur Identifiant de l&#39;apporteur (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function offreControlleurRecupererInformationTarificationOffreGET43da7ed6169f406a86b91a0ed6496d74Request($identifiant_offre, $identifiant_apporteur)
    {
        // verify the required parameter 'identifiant_offre' is set
        if ($identifiant_offre === null || (is_array($identifiant_offre) && count($identifiant_offre) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $identifiant_offre when calling offreControlleurRecupererInformationTarificationOffreGET43da7ed6169f406a86b91a0ed6496d74'
            );
        }
        // verify the required parameter 'identifiant_apporteur' is set
        if ($identifiant_apporteur === null || (is_array($identifiant_apporteur) && count($identifiant_apporteur) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $identifiant_apporteur when calling offreControlleurRecupererInformationTarificationOffreGET43da7ed6169f406a86b91a0ed6496d74'
            );
        }

        $resourcePath = '/sante/individuel/{IdentifiantApporteur}/offre/{IdentifiantOffre}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($identifiant_offre !== null) {
            $resourcePath = str_replace(
                '{' . 'IdentifiantOffre' . '}',
                ObjectSerializer::toPathValue($identifiant_offre),
                $resourcePath
            );
        }
        // path params
        if ($identifiant_apporteur !== null) {
            $resourcePath = str_replace(
                '{' . 'IdentifiantApporteur' . '}',
                ObjectSerializer::toPathValue($identifiant_apporteur),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
