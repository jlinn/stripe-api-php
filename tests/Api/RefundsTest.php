<?php
/**
 * User: Joe Linn
 * Date: 7/28/2014
 * Time: 3:28 PM
 */

namespace Stripe\Tests\Api;


use Stripe\Api\Charges;
use Stripe\Api\Refunds;
use Stripe\Request\Cards\CreateCardRequest;
use Stripe\Request\Charges\CreateChargeRequest;
use Stripe\Request\Refunds\CreateRefundRequest;
use Stripe\Response\Charges\ChargeResponse;
use Stripe\Tests\StripeTestCase;

class RefundsTest extends StripeTestCase
{
    /**
     * @var Refunds
     */
    protected $refunds;

    /**
     * @var ChargeResponse
     */
    protected $createChargeResponse;

    protected function setUp()
    {
        parent::setUp();
        $this->refunds = new Refunds($this->client);
        $charges = new Charges($this->client);

        // create a charge
        $createChargeRequest = new CreateChargeRequest(350, "usd");
        $this->createChargeResponse = $charges->createCharge($createChargeRequest->setCard(new CreateCardRequest(self::VISA_1, 1, 2020)));
    }

    public function testGetRefund()
    {
        // refund the charge
        $metadata = array("foo" => "bar");
        $createRefundRequest = new CreateRefundRequest();
        $createRefundRequest->setMetadata($metadata);
        $createRefundResponse = $this->refunds->createRefund($this->createChargeResponse->getId(), $createRefundRequest);

        $this->assertEquals($this->createChargeResponse->getAmount(), $createRefundResponse->getAmount());

        // retrieve the refund
        $getRefundResponse = $this->refunds->getRefund($createRefundResponse->getCharge(), $createRefundResponse->getId());

        $this->assertEquals($createRefundResponse->getAmount(), $getRefundResponse->getAmount());
        $this->assertArrayHasKey("foo", $getRefundResponse->getMetadata());
        $metadata = $getRefundResponse->getMetadata();
        $this->assertEquals("bar", $metadata["foo"]);
    }

    public function testUpdateRefund()
    {
        // create a refund
        $createRefundResponse = $this->refunds->createRefund($this->createChargeResponse->getId());

        $this->assertEquals(0, sizeof($createRefundResponse->getMetadata()));

        // modify the refund
        $metadata = array("foo" => "bar");
        $updateRefundResponse = $this->refunds->updateRefund($createRefundResponse->getCharge(), $createRefundResponse->getId(), $metadata);

        $this->assertArrayHasKey("foo", $updateRefundResponse->getMetadata());
        $metadata = $updateRefundResponse->getMetadata();
        $this->assertEquals("bar", $metadata["foo"]);
    }

    public function testListRefunds()
    {
        // create a refund
        $createRefundResponse = $this->refunds->createRefund($this->createChargeResponse->getId());

        // list refunds
        $listRefundsResponse = $this->refunds->listRefunds($createRefundResponse->getCharge());

        $this->assertEquals(1, sizeof($listRefundsResponse->getData()));
    }
}
 