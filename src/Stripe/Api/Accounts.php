<?php
/**
 * User: Don Gilbert
 * Date: 3/27/2014
 * Time: 4:50 PM
 */

namespace Stripe\Api;

use Stripe\Response\Accounts\AccountResponse;

class Accounts extends AbstractApi
{
    const ACCOUNT_RESPONSE_CLASS = 'Stripe\Response\Accounts\AccountResponse';

    /**
     * @return AccountResponse
     * @link https://stripe.com/docs/api/curl#retrieve_account
     */
    public function getAccount()
    {
        return $this->client->get('account', self::ACCOUNT_RESPONSE_CLASS);
    }
}
