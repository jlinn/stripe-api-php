<?php
/**
 * User: Don Gilbert
 * Date: 3/27/2014
 * Time: 4:50 PM
 */

namespace Stripe\Api;

use Stripe\Request\Tokens\CreateTokenRequest;
use Stripe\Response\Tokens\TokenResponse;

class Tokens extends AbstractApi
{
    const TOKEN_RESPONSE_CLASS = 'Stripe\Response\Tokens\TokenResponse';

    /**
     * @return TokenResponse
     * @link https://stripe.com/docs/api/curl#retrieve_token
     */
    public function getToken($tokenId)
    {
        return $this->client->request('GET', 'tokens/' . $tokenId, self::TOKEN_RESPONSE_CLASS);
    }
}
