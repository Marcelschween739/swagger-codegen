<?php
/**
 * UserApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Swagger Petstore
 *
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 *
 * OpenAPI spec version: 1.0.0
 * Contact: apiteam@swagger.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
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
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * UserApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserApi
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
     * @param ClientInterface $client
     * @param Configuration $config
     * @param HeaderSelector $selector
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
     * Operation createUser
     *
     * Create user
     *
     * @param \Swagger\Client\Model\User $body Created user object (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function createUser($body)
    {
        $this->createUserWithHttpInfo($body);
    }

    /**
     * Operation createUserWithHttpInfo
     *
     * Create user
     *
     * @param \Swagger\Client\Model\User $body Created user object (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function createUserWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createUser');
        }

        $resourcePath = '/user';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $returnType = '';



        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present

        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                $httpBody = new MultipartStream($multipartContents); // for HTTP post (form)

            } else {
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams); // for HTTP post (form)
            }
        }

        if ($httpBody instanceof MultipartStream) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/xml', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/xml', 'application/json'],
                []
            );
        }


        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        $url = $this->config->getHost() . $resourcePath . ($query ? '?' . $query : '');

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $request = new Request(
            'POST',
            $url,
            $headers,
            $httpBody
        );

        try {

            try {
                $response = $this->client->send($request);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    "[$statusCode] Error connecting to the API ($url)",
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }
    /**
     * Operation createUsersWithArrayInput
     *
     * Creates list of users with given input array
     *
     * @param \Swagger\Client\Model\User[] $body List of user object (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function createUsersWithArrayInput($body)
    {
        $this->createUsersWithArrayInputWithHttpInfo($body);
    }

    /**
     * Operation createUsersWithArrayInputWithHttpInfo
     *
     * Creates list of users with given input array
     *
     * @param \Swagger\Client\Model\User[] $body List of user object (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function createUsersWithArrayInputWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createUsersWithArrayInput');
        }

        $resourcePath = '/user/createWithArray';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $returnType = '';



        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present

        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                $httpBody = new MultipartStream($multipartContents); // for HTTP post (form)

            } else {
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams); // for HTTP post (form)
            }
        }

        if ($httpBody instanceof MultipartStream) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/xml', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/xml', 'application/json'],
                []
            );
        }


        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        $url = $this->config->getHost() . $resourcePath . ($query ? '?' . $query : '');

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $request = new Request(
            'POST',
            $url,
            $headers,
            $httpBody
        );

        try {

            try {
                $response = $this->client->send($request);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    "[$statusCode] Error connecting to the API ($url)",
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }
    /**
     * Operation createUsersWithListInput
     *
     * Creates list of users with given input array
     *
     * @param \Swagger\Client\Model\User[] $body List of user object (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function createUsersWithListInput($body)
    {
        $this->createUsersWithListInputWithHttpInfo($body);
    }

    /**
     * Operation createUsersWithListInputWithHttpInfo
     *
     * Creates list of users with given input array
     *
     * @param \Swagger\Client\Model\User[] $body List of user object (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function createUsersWithListInputWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createUsersWithListInput');
        }

        $resourcePath = '/user/createWithList';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $returnType = '';



        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present

        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                $httpBody = new MultipartStream($multipartContents); // for HTTP post (form)

            } else {
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams); // for HTTP post (form)
            }
        }

        if ($httpBody instanceof MultipartStream) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/xml', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/xml', 'application/json'],
                []
            );
        }


        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        $url = $this->config->getHost() . $resourcePath . ($query ? '?' . $query : '');

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $request = new Request(
            'POST',
            $url,
            $headers,
            $httpBody
        );

        try {

            try {
                $response = $this->client->send($request);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    "[$statusCode] Error connecting to the API ($url)",
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }
    /**
     * Operation deleteUser
     *
     * Delete user
     *
     * @param string $username The name that needs to be deleted (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteUser($username)
    {
        $this->deleteUserWithHttpInfo($username);
    }

    /**
     * Operation deleteUserWithHttpInfo
     *
     * Delete user
     *
     * @param string $username The name that needs to be deleted (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteUserWithHttpInfo($username)
    {
        // verify the required parameter 'username' is set
        if ($username === null) {
            throw new \InvalidArgumentException('Missing the required parameter $username when calling deleteUser');
        }

        $resourcePath = '/user/{username}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $returnType = '';


        // path params
        if ($username !== null) {
            $resourcePath = str_replace('{' . 'username' . '}', ObjectSerializer::toPathValue($username), $resourcePath);
        }

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present

        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                $httpBody = new MultipartStream($multipartContents); // for HTTP post (form)

            } else {
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams); // for HTTP post (form)
            }
        }

        if ($httpBody instanceof MultipartStream) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/xml', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/xml', 'application/json'],
                []
            );
        }


        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        $url = $this->config->getHost() . $resourcePath . ($query ? '?' . $query : '');

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $request = new Request(
            'DELETE',
            $url,
            $headers,
            $httpBody
        );

        try {

            try {
                $response = $this->client->send($request);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    "[$statusCode] Error connecting to the API ($url)",
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }
    /**
     * Operation getUserByName
     *
     * Get user by user name
     *
     * @param string $username The name that needs to be fetched. Use user1 for testing. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\User
     */
    public function getUserByName($username)
    {
        list($response) = $this->getUserByNameWithHttpInfo($username);
        return $response;
    }

    /**
     * Operation getUserByNameWithHttpInfo
     *
     * Get user by user name
     *
     * @param string $username The name that needs to be fetched. Use user1 for testing. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\User, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUserByNameWithHttpInfo($username)
    {
        // verify the required parameter 'username' is set
        if ($username === null) {
            throw new \InvalidArgumentException('Missing the required parameter $username when calling getUserByName');
        }

        $resourcePath = '/user/{username}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $returnType = '\Swagger\Client\Model\User';


        // path params
        if ($username !== null) {
            $resourcePath = str_replace('{' . 'username' . '}', ObjectSerializer::toPathValue($username), $resourcePath);
        }

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present

        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                $httpBody = new MultipartStream($multipartContents); // for HTTP post (form)

            } else {
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams); // for HTTP post (form)
            }
        }

        if ($httpBody instanceof MultipartStream) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/xml', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/xml', 'application/json'],
                []
            );
        }


        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        $url = $this->config->getHost() . $resourcePath . ($query ? '?' . $query : '');

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $request = new Request(
            'GET',
            $url,
            $headers,
            $httpBody
        );

        try {

            try {
                $response = $this->client->send($request);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    "[$statusCode] Error connecting to the API ($url)",
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\User', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
     * Operation loginUser
     *
     * Logs user into the system
     *
     * @param string $username The user name for login (required)
     * @param string $password The password for login in clear text (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function loginUser($username, $password)
    {
        list($response) = $this->loginUserWithHttpInfo($username, $password);
        return $response;
    }

    /**
     * Operation loginUserWithHttpInfo
     *
     * Logs user into the system
     *
     * @param string $username The user name for login (required)
     * @param string $password The password for login in clear text (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function loginUserWithHttpInfo($username, $password)
    {
        // verify the required parameter 'username' is set
        if ($username === null) {
            throw new \InvalidArgumentException('Missing the required parameter $username when calling loginUser');
        }
        // verify the required parameter 'password' is set
        if ($password === null) {
            throw new \InvalidArgumentException('Missing the required parameter $password when calling loginUser');
        }

        $resourcePath = '/user/login';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $returnType = 'string';

        // query params
        if ($username !== null) {
            $queryParams['username'] = ObjectSerializer::toQueryValue($username);
        }
        // query params
        if ($password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($password);
        }


        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present

        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                $httpBody = new MultipartStream($multipartContents); // for HTTP post (form)

            } else {
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams); // for HTTP post (form)
            }
        }

        if ($httpBody instanceof MultipartStream) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/xml', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/xml', 'application/json'],
                []
            );
        }


        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        $url = $this->config->getHost() . $resourcePath . ($query ? '?' . $query : '');

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $request = new Request(
            'GET',
            $url,
            $headers,
            $httpBody
        );

        try {

            try {
                $response = $this->client->send($request);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    "[$statusCode] Error connecting to the API ($url)",
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
     * Operation logoutUser
     *
     * Logs out current logged in user session
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function logoutUser()
    {
        $this->logoutUserWithHttpInfo();
    }

    /**
     * Operation logoutUserWithHttpInfo
     *
     * Logs out current logged in user session
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function logoutUserWithHttpInfo()
    {

        $resourcePath = '/user/logout';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $returnType = '';



        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present

        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                $httpBody = new MultipartStream($multipartContents); // for HTTP post (form)

            } else {
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams); // for HTTP post (form)
            }
        }

        if ($httpBody instanceof MultipartStream) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/xml', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/xml', 'application/json'],
                []
            );
        }


        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        $url = $this->config->getHost() . $resourcePath . ($query ? '?' . $query : '');

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $request = new Request(
            'GET',
            $url,
            $headers,
            $httpBody
        );

        try {

            try {
                $response = $this->client->send($request);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    "[$statusCode] Error connecting to the API ($url)",
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }
    /**
     * Operation updateUser
     *
     * Updated user
     *
     * @param string $username name that need to be deleted (required)
     * @param \Swagger\Client\Model\User $body Updated user object (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function updateUser($username, $body)
    {
        $this->updateUserWithHttpInfo($username, $body);
    }

    /**
     * Operation updateUserWithHttpInfo
     *
     * Updated user
     *
     * @param string $username name that need to be deleted (required)
     * @param \Swagger\Client\Model\User $body Updated user object (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateUserWithHttpInfo($username, $body)
    {
        // verify the required parameter 'username' is set
        if ($username === null) {
            throw new \InvalidArgumentException('Missing the required parameter $username when calling updateUser');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateUser');
        }

        $resourcePath = '/user/{username}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $returnType = '';


        // path params
        if ($username !== null) {
            $resourcePath = str_replace('{' . 'username' . '}', ObjectSerializer::toPathValue($username), $resourcePath);
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present

        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                $httpBody = new MultipartStream($multipartContents); // for HTTP post (form)

            } else {
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams); // for HTTP post (form)
            }
        }

        if ($httpBody instanceof MultipartStream) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/xml', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/xml', 'application/json'],
                []
            );
        }


        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        $url = $this->config->getHost() . $resourcePath . ($query ? '?' . $query : '');

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $request = new Request(
            'PUT',
            $url,
            $headers,
            $httpBody
        );

        try {

            try {
                $response = $this->client->send($request);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    "[$statusCode] Error connecting to the API ($url)",
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }
}
