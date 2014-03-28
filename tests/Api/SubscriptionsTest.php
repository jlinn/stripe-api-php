<?php
/**
 * User: Joe Linn
 * Date: 3/21/2014
 * Time: 2:47 PM
 */

namespace Stripe\Tests\Api;


use Stripe\Api\Plans;
use Stripe\Api\Subscriptions;
use Stripe\Request\Cards\CreateCardRequest;
use Stripe\Request\Plans\CreatePlanRequest;
use Stripe\Request\Subscriptions\CreateSubscriptionRequest;
use Stripe\Request\Subscriptions\UpdateSubscriptionRequest;
use Stripe\Tests\StripeTestCase;

class SubscriptionsTest extends StripeTestCase
{
    /**
     * @var Subscriptions
     */
    protected $subscriptions;

    /**
     * @var Plans
     */
    protected $plans;

    /**
     * @var string
     */
    protected $customerId;

    /**
     * @var string
     */
    protected $planId;

    protected function setUp()
    {
        parent::setUp();
        $this->subscriptions = new Subscriptions($this->client);
        $this->plans = new Plans($this->client);
        $customer = $this->client->request('POST', 'customers');
        $this->customerId = $customer['id'];
        $this->planId = $this->plans->createPlan(new CreatePlanRequest("test_plan" . rand(0, 999999), 350, "usd", "month", "test plan"))->getId();
    }

    protected function tearDown()
    {
        parent::tearDown();
        $this->client->request('DELETE', 'customers/' . $this->customerId);
        $this->plans->deletePlan($this->planId);
    }

    public function testCreateSubscription()
    {
        $request = new CreateSubscriptionRequest($this->planId);
        $request->setCard(new CreateCardRequest(self::VISA_1, 1, 2020));
        $response = $this->subscriptions->createSubscription($this->customerId, $request);

        $this->assertInstanceOf(Subscriptions::SUBSCRIPTION_RESPONSE_CLASS, $response);
        $this->assertEquals($this->planId, $response->getPlan()->getId());
    }

    public function testGetSubscription()
    {
        $request = new CreateSubscriptionRequest($this->planId);
        $request->setCard(new CreateCardRequest(self::VISA_1, 1, 2020));
        $createResponse = $this->subscriptions->createSubscription($this->customerId, $request);

        $getResponse = $this->subscriptions->getSubscription($this->customerId, $createResponse->getId());

        $this->assertInstanceOf(Subscriptions::SUBSCRIPTION_RESPONSE_CLASS, $getResponse);
        $this->assertEquals($createResponse->getId(), $getResponse->getId());
    }

    public function testUpdateSubscription()
    {
        $request = new CreateSubscriptionRequest($this->planId);
        $request->setCard(new CreateCardRequest(self::VISA_1, 1, 2020));
        $createResponse = $this->subscriptions->createSubscription($this->customerId, $request);

        $request = new UpdateSubscriptionRequest();
        $request->setQuantity(2);
        $updateResponse = $this->subscriptions->updateSubscription($this->customerId, $createResponse->getId(), $request);

        $this->assertInstanceOf(Subscriptions::SUBSCRIPTION_RESPONSE_CLASS, $updateResponse);
        $this->assertEquals(2, $updateResponse->getQuantity());
    }

    public function testCancelSubscription()
    {
        $request = new CreateSubscriptionRequest($this->planId);
        $request->setCard(new CreateCardRequest(self::VISA_1, 1, 2020));
        $createResponse = $this->subscriptions->createSubscription($this->customerId, $request);

        $cancelResponse = $this->subscriptions->cancelSubscription($this->customerId, $createResponse->getId(), true);

        $this->assertInstanceOf(Subscriptions::SUBSCRIPTION_RESPONSE_CLASS, $cancelResponse);
        $this->assertTrue($cancelResponse->getCancelAtPeriodEnd());
    }

    public function testListSubscriptions()
    {
        $request = new CreateSubscriptionRequest($this->planId);
        $request->setCard(new CreateCardRequest(self::VISA_1, 1, 2020));
        $this->subscriptions->createSubscription($this->customerId, $request);
        $this->subscriptions->createSubscription($this->customerId, $request);

        $listResponse = $this->subscriptions->listSubscriptions($this->customerId);

        $this->assertInstanceOf(Subscriptions::LIST_SUBSCRIPTIONS_RESPONSE_CLASS, $listResponse);
        foreach ($listResponse->getData() as $data) {
            $this->assertInstanceOf(Subscriptions::SUBSCRIPTION_RESPONSE_CLASS, $data);
        }
    }
}
 