<?php
/**
 * CalendarsApi
 * PHP version 5
 *
 * @category Class
 * @package  DocPlanner\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Docplanner Integrations API
 *
 * Welcome to Docplanner Integrations [REST](https://en.wikipedia.org/wiki/Representational_state_transfer) API!  This API gives You the ability to build Your own application and integrate it with Docplanner services.
 *
 * OpenAPI spec version: 1.0.8
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.24
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocPlanner\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use DocPlanner\Client\ApiException;
use DocPlanner\Client\Configuration;
use DocPlanner\Client\HeaderSelector;
use DocPlanner\Client\ObjectSerializer;

/**
 * CalendarsApi Class Doc Comment
 *
 * @category Class
 * @package  DocPlanner\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CalendarsApi
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
     * Operation disableCalendar
     *
     * @param  string $facility_id ID of the Facility (required)
     * @param  string $doctor_id ID of a doctor in a facility (required)
     * @param  string $address_id ID of a doctor&#x60;s address in a facility (required)
     *
     * @throws \DocPlanner\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function disableCalendar($facility_id, $doctor_id, $address_id)
    {
        $this->disableCalendarWithHttpInfo($facility_id, $doctor_id, $address_id);
    }

    /**
     * Operation disableCalendarWithHttpInfo
     *
     * @param  string $facility_id ID of the Facility (required)
     * @param  string $doctor_id ID of a doctor in a facility (required)
     * @param  string $address_id ID of a doctor&#x60;s address in a facility (required)
     *
     * @throws \DocPlanner\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function disableCalendarWithHttpInfo($facility_id, $doctor_id, $address_id)
    {
        $returnType = '';
        $request = $this->disableCalendarRequest($facility_id, $doctor_id, $address_id);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DocPlanner\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DocPlanner\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation disableCalendarAsync
     *
     * 
     *
     * @param  string $facility_id ID of the Facility (required)
     * @param  string $doctor_id ID of a doctor in a facility (required)
     * @param  string $address_id ID of a doctor&#x60;s address in a facility (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function disableCalendarAsync($facility_id, $doctor_id, $address_id)
    {
        return $this->disableCalendarAsyncWithHttpInfo($facility_id, $doctor_id, $address_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation disableCalendarAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $facility_id ID of the Facility (required)
     * @param  string $doctor_id ID of a doctor in a facility (required)
     * @param  string $address_id ID of a doctor&#x60;s address in a facility (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function disableCalendarAsyncWithHttpInfo($facility_id, $doctor_id, $address_id)
    {
        $returnType = '';
        $request = $this->disableCalendarRequest($facility_id, $doctor_id, $address_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'disableCalendar'
     *
     * @param  string $facility_id ID of the Facility (required)
     * @param  string $doctor_id ID of a doctor in a facility (required)
     * @param  string $address_id ID of a doctor&#x60;s address in a facility (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function disableCalendarRequest($facility_id, $doctor_id, $address_id)
    {
        // verify the required parameter 'facility_id' is set
        if ($facility_id === null || (is_array($facility_id) && count($facility_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $facility_id when calling disableCalendar'
            );
        }
        // verify the required parameter 'doctor_id' is set
        if ($doctor_id === null || (is_array($doctor_id) && count($doctor_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $doctor_id when calling disableCalendar'
            );
        }
        // verify the required parameter 'address_id' is set
        if ($address_id === null || (is_array($address_id) && count($address_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address_id when calling disableCalendar'
            );
        }

        $resourcePath = '/facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/calendar/disable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($facility_id !== null) {
            $resourcePath = str_replace(
                '{' . 'facility_id' . '}',
                ObjectSerializer::toPathValue($facility_id),
                $resourcePath
            );
        }
        // path params
        if ($doctor_id !== null) {
            $resourcePath = str_replace(
                '{' . 'doctor_id' . '}',
                ObjectSerializer::toPathValue($doctor_id),
                $resourcePath
            );
        }
        // path params
        if ($address_id !== null) {
            $resourcePath = str_replace(
                '{' . 'address_id' . '}',
                ObjectSerializer::toPathValue($address_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.error+docplanner+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.error+docplanner+json'],
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation enableCalendar
     *
     * @param  string $facility_id ID of the Facility (required)
     * @param  string $doctor_id ID of a doctor in a facility (required)
     * @param  string $address_id ID of a doctor&#x60;s address in a facility (required)
     *
     * @throws \DocPlanner\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function enableCalendar($facility_id, $doctor_id, $address_id)
    {
        $this->enableCalendarWithHttpInfo($facility_id, $doctor_id, $address_id);
    }

    /**
     * Operation enableCalendarWithHttpInfo
     *
     * @param  string $facility_id ID of the Facility (required)
     * @param  string $doctor_id ID of a doctor in a facility (required)
     * @param  string $address_id ID of a doctor&#x60;s address in a facility (required)
     *
     * @throws \DocPlanner\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function enableCalendarWithHttpInfo($facility_id, $doctor_id, $address_id)
    {
        $returnType = '';
        $request = $this->enableCalendarRequest($facility_id, $doctor_id, $address_id);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DocPlanner\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DocPlanner\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DocPlanner\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation enableCalendarAsync
     *
     * 
     *
     * @param  string $facility_id ID of the Facility (required)
     * @param  string $doctor_id ID of a doctor in a facility (required)
     * @param  string $address_id ID of a doctor&#x60;s address in a facility (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function enableCalendarAsync($facility_id, $doctor_id, $address_id)
    {
        return $this->enableCalendarAsyncWithHttpInfo($facility_id, $doctor_id, $address_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation enableCalendarAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $facility_id ID of the Facility (required)
     * @param  string $doctor_id ID of a doctor in a facility (required)
     * @param  string $address_id ID of a doctor&#x60;s address in a facility (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function enableCalendarAsyncWithHttpInfo($facility_id, $doctor_id, $address_id)
    {
        $returnType = '';
        $request = $this->enableCalendarRequest($facility_id, $doctor_id, $address_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'enableCalendar'
     *
     * @param  string $facility_id ID of the Facility (required)
     * @param  string $doctor_id ID of a doctor in a facility (required)
     * @param  string $address_id ID of a doctor&#x60;s address in a facility (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function enableCalendarRequest($facility_id, $doctor_id, $address_id)
    {
        // verify the required parameter 'facility_id' is set
        if ($facility_id === null || (is_array($facility_id) && count($facility_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $facility_id when calling enableCalendar'
            );
        }
        // verify the required parameter 'doctor_id' is set
        if ($doctor_id === null || (is_array($doctor_id) && count($doctor_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $doctor_id when calling enableCalendar'
            );
        }
        // verify the required parameter 'address_id' is set
        if ($address_id === null || (is_array($address_id) && count($address_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address_id when calling enableCalendar'
            );
        }

        $resourcePath = '/facilities/{facility_id}/doctors/{doctor_id}/addresses/{address_id}/calendar/enable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($facility_id !== null) {
            $resourcePath = str_replace(
                '{' . 'facility_id' . '}',
                ObjectSerializer::toPathValue($facility_id),
                $resourcePath
            );
        }
        // path params
        if ($doctor_id !== null) {
            $resourcePath = str_replace(
                '{' . 'doctor_id' . '}',
                ObjectSerializer::toPathValue($doctor_id),
                $resourcePath
            );
        }
        // path params
        if ($address_id !== null) {
            $resourcePath = str_replace(
                '{' . 'address_id' . '}',
                ObjectSerializer::toPathValue($address_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.error+docplanner+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.error+docplanner+json'],
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
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
