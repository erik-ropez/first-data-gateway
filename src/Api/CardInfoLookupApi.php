<?php
/**
 * CardInfoLookupApi
 * PHP version 5
 *
 * @category Class
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Payment Gateway API Specification.
 *
 * Payment Gateway API for payment processing. Version 6.4.0.20181018.001
 *
 * OpenAPI spec version: 6.4.0.20181018.001
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FirstData\FirstApi\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use FirstData\FirstApi\Client\ApiException;
use FirstData\FirstApi\Client\Configuration;
use FirstData\FirstApi\Client\HeaderSelector;
use FirstData\FirstApi\Client\ObjectSerializer;

/**
 * CardInfoLookupApi Class Doc Comment
 *
 * @category Class
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CardInfoLookupApi
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
     * Operation cardInfoLookup
     *
     * Card information lookUp
     *
     * @param  string $contentType content type (required)
     * @param  string $clientRequestId A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format. (required)
     * @param  string $apiKey apiKey (required)
     * @param  int $timestamp Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins). (required)
     * @param  \FirstData\FirstApi\Client\Model\CardInfoLookupRequest $cardInfoLookupRequest Card information lookup payload. (required)
     * @param  string $messageSignature Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal. (optional)
     * @param  string $region The region where client wants to process the transaction (optional)
     *
     * @throws \FirstData\FirstApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \FirstData\FirstApi\Client\Model\CardInfoLookupResponse|\FirstData\FirstApi\Client\Model\ErrorResponse|\FirstData\FirstApi\Client\Model\ErrorResponse|\FirstData\FirstApi\Client\Model\ErrorResponse|\FirstData\FirstApi\Client\Model\ErrorResponse
     */
    public function cardInfoLookup($contentType, $clientRequestId, $apiKey, $timestamp, $cardInfoLookupRequest, $messageSignature = null, $region = null)
    {
        list($response) = $this->cardInfoLookupWithHttpInfo($contentType, $clientRequestId, $apiKey, $timestamp, $cardInfoLookupRequest, $messageSignature, $region);
        return $response;
    }

    /**
     * Operation cardInfoLookupWithHttpInfo
     *
     * Card information lookUp
     *
     * @param  string $contentType content type (required)
     * @param  string $clientRequestId A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format. (required)
     * @param  string $apiKey (required)
     * @param  int $timestamp Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins). (required)
     * @param  \FirstData\FirstApi\Client\Model\CardInfoLookupRequest $cardInfoLookupRequest Card information lookup payload. (required)
     * @param  string $messageSignature Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal. (optional)
     * @param  string $region The region where client wants to process the transaction (optional)
     *
     * @throws \FirstData\FirstApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \FirstData\FirstApi\Client\Model\CardInfoLookupResponse|\FirstData\FirstApi\Client\Model\ErrorResponse|\FirstData\FirstApi\Client\Model\ErrorResponse|\FirstData\FirstApi\Client\Model\ErrorResponse|\FirstData\FirstApi\Client\Model\ErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function cardInfoLookupWithHttpInfo($contentType, $clientRequestId, $apiKey, $timestamp, $cardInfoLookupRequest, $messageSignature = null, $region = null)
    {
        $request = $this->cardInfoLookupRequest($contentType, $clientRequestId, $apiKey, $timestamp, $cardInfoLookupRequest, $messageSignature, $region);

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
            switch($statusCode) {
                case 200:
                    if ('\FirstData\FirstApi\Client\Model\CardInfoLookupResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\FirstData\FirstApi\Client\Model\CardInfoLookupResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\FirstData\FirstApi\Client\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\FirstData\FirstApi\Client\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\FirstData\FirstApi\Client\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\FirstData\FirstApi\Client\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\FirstData\FirstApi\Client\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\FirstData\FirstApi\Client\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\FirstData\FirstApi\Client\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\FirstData\FirstApi\Client\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\FirstData\FirstApi\Client\Model\CardInfoLookupResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\FirstData\FirstApi\Client\Model\CardInfoLookupResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\FirstData\FirstApi\Client\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\FirstData\FirstApi\Client\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\FirstData\FirstApi\Client\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\FirstData\FirstApi\Client\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation cardInfoLookupAsync
     *
     * Card information lookUp
     *
     * @param  string $contentType content type (required)
     * @param  string $clientRequestId A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format. (required)
     * @param  string $apiKey (required)
     * @param  int $timestamp Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins). (required)
     * @param  \FirstData\FirstApi\Client\Model\CardInfoLookupRequest $cardInfoLookupRequest Card information lookup payload. (required)
     * @param  string $messageSignature Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal. (optional)
     * @param  string $region The region where client wants to process the transaction (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cardInfoLookupAsync($contentType, $clientRequestId, $apiKey, $timestamp, $cardInfoLookupRequest, $messageSignature = null, $region = null)
    {
        return $this->cardInfoLookupAsyncWithHttpInfo($contentType, $clientRequestId, $apiKey, $timestamp, $cardInfoLookupRequest, $messageSignature, $region)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation cardInfoLookupAsyncWithHttpInfo
     *
     * Card information lookUp
     *
     * @param  string $contentType content type (required)
     * @param  string $clientRequestId A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format. (required)
     * @param  string $apiKey (required)
     * @param  int $timestamp Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins). (required)
     * @param  \FirstData\FirstApi\Client\Model\CardInfoLookupRequest $cardInfoLookupRequest Card information lookup payload. (required)
     * @param  string $messageSignature Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal. (optional)
     * @param  string $region The region where client wants to process the transaction (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cardInfoLookupAsyncWithHttpInfo($contentType, $clientRequestId, $apiKey, $timestamp, $cardInfoLookupRequest, $messageSignature = null, $region = null)
    {
        $returnType = '\FirstData\FirstApi\Client\Model\CardInfoLookupResponse';
        $request = $this->cardInfoLookupRequest($contentType, $clientRequestId, $apiKey, $timestamp, $cardInfoLookupRequest, $messageSignature, $region);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
     * Create request for operation 'cardInfoLookup'
     *
     * @param  string $contentType content type (required)
     * @param  string $clientRequestId A client-generated ID for request tracking and signature creation, unique per request.  This is also used for idempotency control. We recommend 128-bit UUID format. (required)
     * @param  string $apiKey (required)
     * @param  int $timestamp Epoch timestamp in milliseconds in the request from a client system. Used for Message Signature generation and time limit (5 mins). (required)
     * @param  \FirstData\FirstApi\Client\Model\CardInfoLookupRequest $cardInfoLookupRequest Card information lookup payload. (required)
     * @param  string $messageSignature Used to ensure the request has not been tampered with during transmission. The Message-Signature is the Base64 encoded HMAC hash (SHA256  algorithm with the API Secret as the key.) For more information, refer to the supporting documentation on the Developer Portal. (optional)
     * @param  string $region The region where client wants to process the transaction (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function cardInfoLookupRequest($contentType, $clientRequestId, $apiKey, $timestamp, $cardInfoLookupRequest, $messageSignature = null, $region = null)
    {
        // verify the required parameter 'contentType' is set
        if ($contentType === null || (is_array($contentType) && count($contentType) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $contentType when calling cardInfoLookup'
            );
        }
        // verify the required parameter 'clientRequestId' is set
        if ($clientRequestId === null || (is_array($clientRequestId) && count($clientRequestId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $clientRequestId when calling cardInfoLookup'
            );
        }
        // verify the required parameter 'apiKey' is set
        if ($apiKey === null || (is_array($apiKey) && count($apiKey) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $apiKey when calling cardInfoLookup'
            );
        }
        // verify the required parameter 'timestamp' is set
        if ($timestamp === null || (is_array($timestamp) && count($timestamp) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $timestamp when calling cardInfoLookup'
            );
        }
        // verify the required parameter 'cardInfoLookupRequest' is set
        if ($cardInfoLookupRequest === null || (is_array($cardInfoLookupRequest) && count($cardInfoLookupRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $cardInfoLookupRequest when calling cardInfoLookup'
            );
        }

        $resourcePath = '/v1/card-information';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($contentType !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($contentType);
        }
        // header params
        if ($clientRequestId !== null) {
            $headerParams['Client-Request-Id'] = ObjectSerializer::toHeaderValue($clientRequestId);
        }
        // header params
        if ($apiKey !== null) {
            $headerParams['Api-Key'] = ObjectSerializer::toHeaderValue($apiKey);
        }
        // header params
        if ($timestamp !== null) {
            $headerParams['Timestamp'] = ObjectSerializer::toHeaderValue($timestamp);
        }
        // header params
        if ($messageSignature !== null) {
            $headerParams['Message-Signature'] = ObjectSerializer::toHeaderValue($messageSignature);
        }
        // header params
        if ($region !== null) {
            $headerParams['Region'] = ObjectSerializer::toHeaderValue($region);
        }


        // body params
        $_tempBody = null;
        if (isset($cardInfoLookupRequest)) {
            $_tempBody = $cardInfoLookupRequest;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
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
