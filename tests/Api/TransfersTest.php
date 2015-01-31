<?php
/**
 * User: Joe Linn
 * Date: 3/29/2014
 * Time: 10:33 PM
 */

namespace Stripe\Tests\Api;


use Stripe\Api\Transfers;
use Stripe\Request\Transfers\ListTransfersRequest;
use Stripe\Response\Transfers\TransferResponse;
use Stripe\Tests\StripeTestCase;

class TransfersTest extends StripeTestCase
{
    /**
     * @var Transfers
     */
    protected $transfers;

    protected function setUp()
    {
        parent::setUp();
        $this->transfers = new Transfers($this->client);
    }

    public function testCreateTransfer()
    {
        $request = $this->transfers->createTransferRequest(350, "usd", "self");
        $createResponse = $this->transfers->createTransfer($request);

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

        $this->setExpectedException('Stripe\StripeException', "Transfer cannot be canceled, because it has already been submitted. You can currently only cancel pending transfers.");
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
        return $this->transfers->createTransfer($request);
    }
}
 