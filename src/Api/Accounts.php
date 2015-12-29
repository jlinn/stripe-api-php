<?php
/**
 * User: Don Gilbert
 * Date: 3/27/2014
 * Time: 4:50 PM
 */

namespace Stripe\Api;

use Stripe\Request\Accounts\CreateAccountRequest;
use Stripe\Request\Accounts\UpdateAccountRequest;
use Stripe\Request\ListRequest;
use Stripe\Response\Accounts\AccountResponse;
use Stripe\Response\Accounts\ListAccountsResponse;
use Stripe\Response\DeleteResponse;

class Accounts extends AbstractApi
{
    const ACCOUNT_RESPONSE_CLASS = 'Stripe\Response\Accounts\AccountResponse';
    const LIST_ACCOUNT_RESPONSE_CLASS = 'Stripe\Response\Accounts\ListAccountsResponse';

    /**
     * Retrieves default/main account
     * @return AccountResponse
     * @link https://stripe.com/docs/api/curl#retrieve_account
     */
    public function getAccount()
    {
        return $this->client->get('account', self::ACCOUNT_RESPONSE_CLASS);
    }

    /**
     * @param CreateAccountRequest $request
     * @return AccountResponse
     * @link https://stripe.com/docs/api#create_account
     */
    public function createAccount(CreateAccountRequest $request)
    {
        return $this->client->post('accounts', self::ACCOUNT_RESPONSE_CLASS, $request);
    }

    /**
     * @param string $accountId
     * @return AccountResponse
     * @link https://stripe.com/docs/api/curl#retrieve_account
     */
    public function getConnectedAccount($accountId)
    {
        return $this->client->get($this->buildUrl($accountId), self::ACCOUNT_RESPONSE_CLASS);
    }

    /**
     * @param string $accountId
     * @param UpdateAccountRequest $request
     * @return AccountResponse
     * @link https://stripe.com/docs/api/curl#update_account
     */
    public function updateAccount($accountId, UpdateAccountRequest $request)
    {
        return $this->client->post($this->buildUrl($accountId), self::ACCOUNT_RESPONSE_CLASS, $request);
    }

    /**
     * @param string $accountId
     * @return DeleteResponse
     * @link https://stripe.com/docs/api/curl#delete_account
     */
    public function deleteConnectedAccount($accountId)
    {
        return $this->client->delete($this->buildUrl($accountId), self::DELETE_RESPONSE_CLASS);
    }

    /**
     * @param ListRequest $request
     * @return ListAccountsResponse
     * @link https://stripe.com/docs/api/curl#list_accounts
     */
    public function listConnectedAccounts(ListRequest $request = null)
    {
        return $this->client->get('accounts', self::LIST_ACCOUNT_RESPONSE_CLASS, null, $this->listRequestToParams($request));
    }

    /**
     * @return CreateAccountRequest
     */
    public function createAccountRequest()
    {
        return new CreateAccountRequest();
    }

    /**
     * @param string $customerId
     * @return string
     */
    protected function buildUrl($customerId)
    {
        return 'accounts/' . $customerId;
    }
}
