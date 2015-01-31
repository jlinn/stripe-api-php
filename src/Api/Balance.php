<?php
/**
 * User: Joe Linn
 * Date: 3/30/2014
 * Time: 1:10 PM
 */

namespace Stripe\Api;


use Stripe\Request\Balance\ListBalanceHistoryRequest;
use Stripe\Response\Balance\BalanceResponse;
use Stripe\Response\Balance\BalanceTransactionResponse;
use Stripe\Response\Balance\ListBalanceTransactionsResponse;

class Balance extends AbstractApi
{
    const BALANCE_RESPONSE_CLASS = 'Stripe\Response\Balance\BalanceResponse';
    const BALANCE_TRANSACTION_RESPONSE_CLASS = 'Stripe\Response\Balance\BalanceTransactionResponse';
    const LIST_BALANCE_TRANSACTIONS_RESPONSE_CLASS = 'Stripe\Response\Balance\ListBalanceTransactionsResponse';

    /**
     * @return BalanceResponse
     * @link https://stripe.com/docs/api#retrieve_balance
     */
    public function getBalance()
    {
        return $this->client->get('balance', self::BALANCE_RESPONSE_CLASS);
    }

    /**
     * @param string $transactionId
     * @return BalanceTransactionResponse
     * @link https://stripe.com/docs/api#retrieve_balance_transaction
     */
    public function getBalanceTransaction($transactionId)
    {
        return $this->client->get('balance/history/' . $transactionId, self::BALANCE_TRANSACTION_RESPONSE_CLASS);
    }

    /**
     * @param ListBalanceHistoryRequest $request
     * @return ListBalanceTransactionsResponse
     * @link https://stripe.com/docs/api#balance_history
     */
    public function listBalanceHistory(ListBalanceHistoryRequest $request = null)
    {
        return $this->client->get('balance/history', self::LIST_BALANCE_TRANSACTIONS_RESPONSE_CLASS, null, $this->listRequestToParams($request));
    }

    /**
     * @return ListBalanceHistoryRequest
     */
    public function listBalanceHistoryRequest()
    {
        return new ListBalanceHistoryRequest();
    }
} 