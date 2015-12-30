<?php
/**
 * User: Joe Linn
 * Date: 3/30/2014
 * Time: 2:14 PM
 */

namespace Stripe\Tests\Api;


use Stripe\Api\Accounts;
use Stripe\Api\Balance;
use Stripe\Api\Transfers;
use Stripe\Request\Accounts\BankAccountRequest;
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

    /**
     * @var Accounts
     */
    private $accounts;

    protected function setUp()
    {
        parent::setUp();
        $this->transfers = new Transfers($this->client);
        $this->balance = new Balance($this->client);
        $this->accounts = new Accounts($this->client);
    }

    public function testGetBalance()
    {
        $getResponse = $this->balance->getBalance();

        $this->assertInstanceOf(Balance::BALANCE_RESPONSE_CLASS, $getResponse);
    }

    public function testGetBalanceTransaction()
    {
        $createAccountRequest = $this->accounts->createAccountRequest();
        $createAccountRequest->setEmail("foo".$this->randomString()."@bar.com");
        $createAccountRequest->setCountry("US");
        $bankAccountRequest = new BankAccountRequest();
        $bankAccountRequest->setCountry("US");
        $bankAccountRequest->setCurrency("USD");
        $bankAccountRequest->setAccountNumber($this::ACCOUNT_NUMBER);
        $bankAccountRequest->setRoutingNumber($this::ROUTING_NUMBER);
        $createAccountRequest->setBankAccount($bankAccountRequest);
        $createAccountRequest->setManaged(true);
        $account = $this->accounts->createAccount($createAccountRequest);

        $transfer = $this->transfers->createTransfer($this->transfers->createTransferRequest(100, "usd", $account->getId()));

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
 