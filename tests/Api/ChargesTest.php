<?php
/**
 * User: Joe Linn
 * Date: 3/27/2014
 * Time: 12:00 AM
 */

namespace Stripe\Tests\Api;


use Stripe\Api\Charges;
use Stripe\Api\Tokens;
use Stripe\Request\Cards\CreateCardRequest;
use Stripe\Request\Charges\CreateChargeRequest;
use Stripe\Request\ListRequest;
use Stripe\Request\Tokens\CreateCardTokenRequest;
use Stripe\Tests\StripeTestCase;

class ChargesTest extends StripeTestCase
{
    /**
     * @var Charges
     */
    protected $charges;

    protected function setUp()
    {
        parent::setUp();
        $this->charges = new Charges($this->client);
    }

    public function testCreateCharge()
    {
        $request = new CreateChargeRequest(350, "usd");
        $request->setCard(new CreateCardRequest(self::VISA_1, 1, 2020, 123));
        $response = $this->charges->createCharge($request);

        $this->assertInstanceOf(Charges::CHARGE_RESPONSE_CLASS, $response);
    }

    public function testCreateChargeWithToken(){
        // create a token
        $tokens = new Tokens($this->client);
        $tokenResponse = $tokens->createCardToken(new CreateCardTokenRequest(self::VISA_1, 1, 2020, 123));

        $request = new CreateChargeRequest(350, "usd");
        $request->setCard($tokenResponse->getId());
        $response = $this->charges->createCharge($request);

        $this->assertInstanceOf(Charges::CHARGE_RESPONSE_CLASS, $response);
    }

    public function testGetCharge()
    {
        $createRequest = new CreateChargeRequest(350, "usd");
        $createRequest->setCard(new CreateCardRequest(self::VISA_1, 1, 2020, 123));
        $createResponse = $this->charges->createCharge($createRequest);

        $this->assertInstanceOf(Charges::CHARGE_RESPONSE_CLASS, $createResponse);

        $getResponse = $this->charges->getCharge($createResponse->getId());

        $this->assertInstanceOf(Charges::CHARGE_RESPONSE_CLASS, $getResponse);
        $this->assertEquals($createResponse->getId(), $getResponse->getId());
        $this->assertEquals($createResponse->getAmount(), $getResponse->getAmount());
    }

    public function testUpdateCharge()
    {
        $createRequest = new CreateChargeRequest(350, "usd");
        $createRequest->setCard(new CreateCardRequest(self::VISA_1, 1, 2020, 123));
        $createResponse = $this->charges->createCharge($createRequest);

        $this->assertInstanceOf(Charges::CHARGE_RESPONSE_CLASS, $createResponse);

        $description = "updated";
        $metadata = array("foo" => "bar");
        $updateResponse = $this->charges->updateCharge($createResponse->getId(), $description, $metadata);

        $this->assertInstanceOf(Charges::CHARGE_RESPONSE_CLASS, $updateResponse);
        $this->assertEquals($description, $updateResponse->getDescription());
        $this->assertEquals($metadata, $updateResponse->getMetadata());
    }

    public function testRefundCharge()
    {
        $createRequest = new CreateChargeRequest(350, "usd");
        $createRequest->setCard(new CreateCardRequest(self::VISA_1, 1, 2020, 123));
        $createResponse = $this->charges->createCharge($createRequest);

        $this->assertInstanceOf(Charges::CHARGE_RESPONSE_CLASS, $createResponse);

        $refundResponse = $this->charges->refundCharge($createResponse->getId());

        $this->assertInstanceOf(Charges::CHARGE_RESPONSE_CLASS, $refundResponse);
        $this->assertEquals($createResponse->getAmount(), $refundResponse->getAmountRefunded());
    }

    public function testCaptureCharge()
    {
        $createRequest = new CreateChargeRequest(350, "usd");
        $createRequest->setCard(new CreateCardRequest(self::VISA_1, 1, 2020, 123))
            ->setCapture(false);
        $createResponse = $this->charges->createCharge($createRequest);

        $this->assertInstanceOf(Charges::CHARGE_RESPONSE_CLASS, $createResponse);
        $this->assertFalse($createResponse->getCaptured());

        $captureResponse = $this->charges->captureCharge($createResponse->getId());

        $this->assertInstanceOf(Charges::CHARGE_RESPONSE_CLASS, $captureResponse);
        $this->assertTrue($captureResponse->getCaptured());
    }

    public function testListCharges()
    {
        $request = new ListRequest();
        $request->setLimit(1);
        $listResponse = $this->charges->listCharges($request);

        $this->assertInstanceOf(Charges::LIST_CHARGES_RESPONSE_CLASS, $listResponse);
        $this->assertEquals(1, sizeof($listResponse->getData()));
        foreach ($listResponse->getData() as $charge) {
            $this->assertInstanceOf(Charges::CHARGE_RESPONSE_CLASS, $charge);
        }
    }
}
 