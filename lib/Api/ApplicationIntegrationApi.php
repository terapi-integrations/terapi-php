<?php
/**
 * ApplicationIntegrationApi
 * PHP version 5
 *
 * @category Class
 * @package  Terapi\Client
 * @author   Terapi team
 * @link     https://github.com/terapi-integrations
 */

/**
 * Terapi.Web.Api-v1
 *
 * No description provided (generated by Terapi https://github.com/terapi-integrations)
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/terapi-integrations.git
 * Terapi version: 3.0.64
 */
/**
 * NOTE: This class is auto generated by the Terapi code generator program.
 * https://github.com/terapi-integrations
 * Do not edit the class manually.
 */

namespace Terapi\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Terapi\Client\ApiException;
use Terapi\Client\Configuration;
use Terapi\Client\HeaderSelector;
use Terapi\Client\ObjectSerializer;

/**
 * ApplicationIntegrationApi Class Doc Comment
 *
 * @category Class
 * @package  Terapi\Client
 * @author   Terapi team
 * @link     https://github.com/terapi-integrations
 */
class ApplicationIntegrationApi
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
     * Operation applicationIntegrationAddIntegrationToApplicationPost
     *
     * 18_999
     *
     * @param  \Terapi\Client\Model\ApplicationintegrationAddintegrationtoapplicationBody $body body (optional)
     *
     * @throws \Terapi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Terapi\Client\Model\AddIntegrationToApplicationResponse
     */
    public function applicationIntegrationAddIntegrationToApplicationPost($body = null)
    {
        list($response) = $this->applicationIntegrationAddIntegrationToApplicationPostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation applicationIntegrationAddIntegrationToApplicationPostWithHttpInfo
     *
     * 18_999
     *
     * @param  \Terapi\Client\Model\ApplicationintegrationAddintegrationtoapplicationBody $body (optional)
     *
     * @throws \Terapi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Terapi\Client\Model\AddIntegrationToApplicationResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function applicationIntegrationAddIntegrationToApplicationPostWithHttpInfo($body = null)
    {
        $returnType = '\Terapi\Client\Model\AddIntegrationToApplicationResponse';
        $request = $this->applicationIntegrationAddIntegrationToApplicationPostRequest($body);

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
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                        '\Terapi\Client\Model\AddIntegrationToApplicationResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation applicationIntegrationAddIntegrationToApplicationPostAsync
     *
     * 18_999
     *
     * @param  \Terapi\Client\Model\ApplicationintegrationAddintegrationtoapplicationBody $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function applicationIntegrationAddIntegrationToApplicationPostAsync($body = null)
    {
        return $this->applicationIntegrationAddIntegrationToApplicationPostAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation applicationIntegrationAddIntegrationToApplicationPostAsyncWithHttpInfo
     *
     * 18_999
     *
     * @param  \Terapi\Client\Model\ApplicationintegrationAddintegrationtoapplicationBody $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function applicationIntegrationAddIntegrationToApplicationPostAsyncWithHttpInfo($body = null)
    {
        $returnType = '\Terapi\Client\Model\AddIntegrationToApplicationResponse';
        $request = $this->applicationIntegrationAddIntegrationToApplicationPostRequest($body);

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
     * Create request for operation 'applicationIntegrationAddIntegrationToApplicationPost'
     *
     * @param  \Terapi\Client\Model\ApplicationintegrationAddintegrationtoapplicationBody $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function applicationIntegrationAddIntegrationToApplicationPostRequest($body = null)
    {

        $resourcePath = '/application-integration/add-integration-to-application';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'text/json'],
                ['application/json', 'text/json', 'application/_*+json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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

            // // this endpoint requires Bearer token
            if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation applicationIntegrationApplicationIntegrationListByApplicationIdGet
     *
     * 18_997
     *
     * @param  string $application_id application_id (optional)
     * @param  int $page page (optional)
     * @param  int $per_page per_page (optional)
     *
     * @throws \Terapi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Terapi\Client\Model\ApplicationIntegrationListByApplicationIdResponse
     */
    public function applicationIntegrationApplicationIntegrationListByApplicationIdGet($application_id = null, $page = null, $per_page = null)
    {
        list($response) = $this->applicationIntegrationApplicationIntegrationListByApplicationIdGetWithHttpInfo($application_id, $page, $per_page);
        return $response;
    }

    /**
     * Operation applicationIntegrationApplicationIntegrationListByApplicationIdGetWithHttpInfo
     *
     * 18_997
     *
     * @param  string $application_id (optional)
     * @param  int $page (optional)
     * @param  int $per_page (optional)
     *
     * @throws \Terapi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Terapi\Client\Model\ApplicationIntegrationListByApplicationIdResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function applicationIntegrationApplicationIntegrationListByApplicationIdGetWithHttpInfo($application_id = null, $page = null, $per_page = null)
    {
        $returnType = '\Terapi\Client\Model\ApplicationIntegrationListByApplicationIdResponse';
        $request = $this->applicationIntegrationApplicationIntegrationListByApplicationIdGetRequest($application_id, $page, $per_page);

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
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                        '\Terapi\Client\Model\ApplicationIntegrationListByApplicationIdResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation applicationIntegrationApplicationIntegrationListByApplicationIdGetAsync
     *
     * 18_997
     *
     * @param  string $application_id (optional)
     * @param  int $page (optional)
     * @param  int $per_page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function applicationIntegrationApplicationIntegrationListByApplicationIdGetAsync($application_id = null, $page = null, $per_page = null)
    {
        return $this->applicationIntegrationApplicationIntegrationListByApplicationIdGetAsyncWithHttpInfo($application_id, $page, $per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation applicationIntegrationApplicationIntegrationListByApplicationIdGetAsyncWithHttpInfo
     *
     * 18_997
     *
     * @param  string $application_id (optional)
     * @param  int $page (optional)
     * @param  int $per_page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function applicationIntegrationApplicationIntegrationListByApplicationIdGetAsyncWithHttpInfo($application_id = null, $page = null, $per_page = null)
    {
        $returnType = '\Terapi\Client\Model\ApplicationIntegrationListByApplicationIdResponse';
        $request = $this->applicationIntegrationApplicationIntegrationListByApplicationIdGetRequest($application_id, $page, $per_page);

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
     * Create request for operation 'applicationIntegrationApplicationIntegrationListByApplicationIdGet'
     *
     * @param  string $application_id (optional)
     * @param  int $page (optional)
     * @param  int $per_page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function applicationIntegrationApplicationIntegrationListByApplicationIdGetRequest($application_id = null, $page = null, $per_page = null)
    {

        $resourcePath = '/application-integration/application-integration-list-by-application-id';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($application_id !== null) {
            $queryParams['ApplicationId'] = ObjectSerializer::toQueryValue($application_id, 'uuid');
        }
        // query params
        if ($page !== null) {
            $queryParams['Page'] = ObjectSerializer::toQueryValue($page, 'int32');
        }
        // query params
        if ($per_page !== null) {
            $queryParams['PerPage'] = ObjectSerializer::toQueryValue($per_page, 'int32');
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'text/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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

            // // this endpoint requires Bearer token
            if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
