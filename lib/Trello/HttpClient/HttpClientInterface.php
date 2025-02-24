<?php

namespace Trello\HttpClient;

use Trello\Exception\InvalidArgumentException;
use GuzzleHttp\Message\Response;

interface HttpClientInterface
{
    /**
     * Send a GET request
     *
     * @param string $path Request path
     * @param array $parameters GET Parameters
     * @param array $headers Reconfigure the request headers for this call only
     *
     * @return Response
     */
    public function get($path, array $parameters = [], array $headers = []);

    /**
     * Send a POST request
     *
     * @param string $path Request path
     * @param mixed $body Request body
     * @param array $headers Reconfigure the request headers for this call only
     *
     * @return Response
     */
    public function post($path, $body = null, array $headers = []);

    /**
     * Send a PATCH request
     *
     * @param string $path Request path
     * @param mixed $body Request body
     * @param array $headers Reconfigure the request headers for this call only
     *
     * @return Response
     * @internal param array $parameters Request body
     */
    public function patch($path, $body = null, array $headers = []);

    /**
     * Send a PUT request
     *
     * @param string $path Request path
     * @param mixed $body Request body
     * @param array $headers Reconfigure the request headers for this call only
     *
     * @return Response
     */
    public function put($path, $body, array $headers = []);

    /**
     * Send a DELETE request
     *
     * @param string $path Request path
     * @param mixed $body Request body
     * @param array $headers Reconfigure the request headers for this call only
     *
     * @return Response
     */
    public function delete($path, $body = null, array $headers = []);

    /**
     * Send a request to the server, receive a response,
     * decode the response and returns an associative array
     *
     * @param string $httpMethod HTTP method to use
     * @param string $path Request path
     * @param array $headers Request headers
     * @param array $options Request options
     *
     * @return Response
     */
    public function request($httpMethod = 'GET', $path = '', array $headers = [], array $options = []);

    /**
     * Change an option value.
     *
     * @param string $name The option name
     * @param mixed $value The value
     *
     * @return void
     * @throws InvalidArgumentException
     */
    public function setOption($name, $value);

    /**
     * Set HTTP headers
     *
     * @param array $headers
     *
     * @return void
     */
    public function setHeaders(array $headers);

    /**
     * Authenticate a user for all next requests
     *
     * @param string $tokenOrLogin Trello private token/username/client ID
     * @param null|string $password Trello password/secret (optionally can contain $authMethod)
     * @param null|string $authMethod One of the AUTH_* class constants
     *
     * @return void
     * @throws InvalidArgumentException If no authentication method was given
     */
    public function authenticate($tokenOrLogin, $password, $authMethod);
}
