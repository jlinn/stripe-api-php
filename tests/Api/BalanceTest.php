<?php
/**
 * User: Joe Linn
 * Date: 3/30/2014
 * Time: 2:14 PM
 */

namespace Stripe\Tests\Api;


use Stripe\Api\Balance;
use Stripe\Api\Transfers;
use Stripe\Request\Balance\ListBalanceHistoryRequest;
use Stripe\Tests\StripeTestCase;

class BalanceTest extends StripeTestCase
{
    /**
     * @var Balance
     */
    protected $balance;

    /**
     * @var Transfers
     */
    protected $transfers;

    protected function setUp()
    {
        parent::setUp();
        $this->transfers = new Transfers($this->client);
        $this->balance = new Balance($this->client);
    }

    public function testGetBalance()
    {
        $getResponse = $this->balance->getBalance();

        $this->assertInstanceOf(Balance::BALANCE_RESPONSE_CLASS, $getResponse);
    }

    public function testGetBalanceTransaction()
    {
        $transfer = $this->transfers->createTransfer($this->transfers->createTransferRequest(350, "usd", "self"));

        $this->assertInstanceOf(Transfers::TRANSFER_RESPONSE_CLASS, $transfer);

        $balanceTransaction = $this->balance->getBalanceTransaction($transfer->getBalanceTransaction());

        $this->assertInstanceOf(Balance::BALANCE_TRANSACTION_RESPONSE_CLASS, $balanceTransaction);
        $this->assertEquals($transfer->getBalanceTransaction(), $balanceTransaction->getId());
    }

    public function testListBalanceHistory()
    {
        $request = new ListBalanceHistoryRequest();
        $request->setLimit(1);
        $history = $this->balance->listBalanceHistory($request);

        $this->assertInstanceOf(Balance::LIST_BALANCE_TRANSACTIONS_RESPONSE_CLASS, $history);
        $this->assertEquals(1, sizeof($history->getData()));
    }
}
 