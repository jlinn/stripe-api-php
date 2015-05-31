<?php
/**
 * User: Joe Linn
 * Date: 3/29/2014
 * Time: 10:33 PM
 */

namespace Stripe\Tests\Api;


use Stripe\Api\Accounts;
use Stripe\Api\Transfers;
use Stripe\Request\Accounts\BankAccountRequest;
use Stripe\Request\Transfers\ListTransfersRequest;
use Stripe\Response\Accounts\AccountResponse;
use Stripe\Response\Transfers\TransferResponse;
use Stripe\Tests\StripeTestCase;

class TransfersTest extends StripeTestCase
{
    /**
     * @var Transfers
     */
    protected $transfers;

    /**
     * @var Accounts
     */
    protected $accounts;

    protected function setUp()
    {
        parent::setUp();
        $this->transfers = new Transfers($this->client);
        $this->accounts = new Accounts($this->client);
    }

    public function testCreateTransfer()
    {
        $createResponse = $this->createTransfer();

        $this->assertInstanceOf(Transfers::TRANSFER_RESPONSE_CLASS, $createResponse);
        $this->assertEquals(350, $createResponse->getAmount());
    }

    public function testGetTransfer()
    {
        $createResponse = $this->createTransfer();

        $this->assertInstanceOf(Transfers::TRANSFER_RESPONSE_CLASS, $createResponse);

        $getResponse = $this->transfers->getTransfer($createResponse->getId());

        $this->assertInstanceOf(Transfers::TRANSFER_RESPONSE_CLASS, $getResponse);
        $this->assertEquals($createResponse->getId(), $getResponse->getId());
    }

    public function testUpdateTransfer()
    {
        $createResponse = $this->createTransfer();

        $this->assertInstanceOf(Transfers::TRANSFER_RESPONSE_CLASS, $createResponse);

        $description = "test transfer";
        $updateResponse = $this->transfers->updateTransfer($createResponse->getId(), $description);

        $this->assertInstanceOf(Transfers::TRANSFER_RESPONSE_CLASS, $updateResponse);
        $this->assertEquals($description, $updateResponse->getDescription());
    }

    public function testCancelTransfer()
    {
        $createResponse = $this->createTransfer();

        $this->assertInstanceOf(Transfers::TRANSFER_RESPONSE_CLASS, $createResponse);

        // we cannot cancel this transfer because it has already been accepted
        $this->setExpectedException('Stripe\StripeException');
        $this->transfers->cancelTransfer($createResponse->getId());
    }

    public function testListTransfers()
    {
        $request = new ListTransfersRequest();
        $request->setLimit(1);
        $listResponse = $this->transfers->listTransfers($request);

        $this->assertInstanceOf(Transfers::LIST_TRANSFERS_RESPONSE_CLASS, $listResponse);
        $this->assertEquals(1, sizeof($listResponse->getData()));
    }

    /**
     * @return TransferResponse
     */
    protected function createTransfer()
    {
        $request = $this->transfers->createTransferRequest(350, "usd", "self");
        $request->setDestination($this->createAccount()->getId());
        $request->setRecipient(null);
        return $this->transfers->createTransfer($request);
    }

    /**
     * @return AccountResponse
     */
    protected function createAccount()
    {
        $request = $this->accounts->createAccountRequest();
        $request->setEmail("foo" . $this->randomString() . "@bar.com");
        $account = new BankAccountRequest();
        $account->setCountry("us");
        $account->setCurrency("usd");
        $account->setRoutingNumber(self::ROUTING_NUMBER);
        $account->setAccountNumber(self::ACCOUNT_NUMBER);
        $request->setBankAccount($account);
        return $this->accounts->createAccount($request);
    }
}
 