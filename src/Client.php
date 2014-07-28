<?php
/**
 * User: Joe Linn
 * Date: 3/20/2014
 * Time: 12:24 PM
 */

namespace Stripe;


use Guzzle\Http\Client as GuzzleClient;
use Guzzle\Http\Exception\ClientErrorResponseException;
use JMS\Serializer\SerializerBuilder;

class Client
{
    const BASE_URL = 'https://api.stripe.com/';
    const VERSION = 'v1';

    /**
     * @var string Stripe api key
     */
    protected $apiKey;

    /**
     * @param string $apiKey
     */
    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @param string $url
     * @param string $deserializeTo
     * @param array|object $body
     * @param array $params
     * @return mixed
     */
    public function get($url, $deserializeTo = null, $body = null, array $params = array())
    {
        return $this->request('GET', $url, $deserializeTo, $body, $params);
    }

    /**
     * @param string $url
     * @param string $deserializeTo
     * @param array|object $body
     * @param array $params
     * @return mixed
     */
    public function post($url, $deserializeTo = null, $body = null, array $params = array())
    {
        return $this->request('POST', $url, $deserializeTo, $body, $params);
    }

    /**
     * @param string $url
     * @param string $deserializeTo
     * @param array|object $body
     * @param array $params
     * @return mixed
     */
    public function put($url, $deserializeTo = null, $body = null, array $params = array())
    {
        return $this->request('PUT', $url, $deserializeTo, $body, $params);
    }

    /**
     * @param string $url
     * @param string $deserializeTo
     * @param array|object $body
     * @param array $params
     * @return mixed
     */
    public function delete($url, $deserializeTo = null, $body = null, array $params = array())
    {
        return $this->request('DELETE', $url, $deserializeTo, $body, $params);
    }

    /**
     * @param string $method HTTP method
     * @param string $url
     * @param string $deserializeTo
     * @param array|object $body
     * @param array $params querystring parameters
     * @throws StripeException
     * @return mixed
     */
    public function request($method, $url, $deserializeTo = null, $body = null, array $params = array())
    {
        $baseUrl = self::BASE_URL . '/' . self::VERSION . '/';
        $client = new GuzzleClient($baseUrl);
        $client->setDefaultOption("auth", array($this->apiKey, '', "Basic"));
        $serializer = SerializerBuilder::create()->build();
        if (!is_null($body)) {
            $body = json_decode($serializer->serialize($body, 'json'), true);
            $body = $this->convertBooleans($body);
        }
        $request = $client->createRequest($method, $url, null, $body);
        foreach ($params as $key => $value) {
            if (is_bool($value)) {
                if ($value) {
                    $value = 'true';
                } else {
                    $value = 'false';
                }
            }
            if (!is_null($value)) {
                $request->getQuery()->set($key, $value);
            }
        }
        try {
            $response = $request->send();
        } catch (ClientErrorResponseException $e) {
            $responseBody = json_decode($e->getResponse()->getBody(true), true);
            $responseBody = $responseBody['error'];
            $code = array_key_exists('code', $responseBody) ? $responseBody['code'] : null;
            $param = array_key_exists('param', $responseBody) ? $responseBody['param'] : null;
            throw new StripeException($responseBody['message'], $e->getResponse()->getStatusCode(),
                $responseBody['type'], $code, $param, $e);
        }
        if (is_null($deserializeTo)) {
            $responseBody = json_decode($response->getBody(true), true);
        } else {
            $responseBody = $serializer->deserialize($response->getBody(true), $deserializeTo, 'json');
        }
        return $responseBody;
    }

    /**
     * Convert boolean values to strings so that they are sent properly
     * @param array $request
     * @return array
     */
    protected function convertBooleans(array $request)
    {
        foreach ($request as &$value) {
            if (is_bool($value)) {
                if ($value) {
                    $value = 'true';
                } else {
                    $value = 'false';
                }
            }
            if (is_array($value)) {
                $value = $this->convertBooleans($value);
            }
        }
        return $request;
    }
} 