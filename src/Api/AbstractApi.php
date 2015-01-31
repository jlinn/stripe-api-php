<?php
/**
 * User: Joe Linn
 * Date: 3/20/2014
 * Time: 2:41 PM
 */

namespace Stripe\Api;

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Stripe\Client;
use Stripe\Request\ListRequest;

abstract class AbstractApi
{
    const DELETE_RESPONSE_CLASS = 'Stripe\Response\DeleteResponse';

    /**
     * @var Client
     */
    protected $client;

    /**
     * @var Serializer
     */
    protected $serializer;

    /**
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
        $this->serializer = SerializerBuilder::create()->build();
    }

    /**
     * Convenience method to perform a null check on the optional list request parameter
     * @param ListRequest $request
     * @return array
     */
    protected function listRequestToParams(ListRequest $request = null)
    {
        if (!is_null($request)) {
            return $request->toParams();
        }
        return array();
    }
} 