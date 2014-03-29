<?php
/**
 * User: Joe Linn
 * Date: 3/28/2014
 * Time: 9:34 PM
 */

namespace Stripe\Tests\Api;


use Stripe\Api\Coupons;
use Stripe\Api\Customers;
use Stripe\Api\Discounts;
use Stripe\Api\Plans;
use Stripe\Api\Subscriptions;
use Stripe\Request\Cards\CreateCardRequest;
use Stripe\Tests\StripeTestCase;

class DiscountsTest extends StripeTestCase
{
    /**
     * @var Discounts
     */
    protected $discounts;

    /**
     * @var Customers
     */
    protected $customers;

    /**
     * @var Subscriptions
     */
    protected $subscriptions;

    /**
     * @var Coupons
     */
    protected $coupons;

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
    protected $couponId;

    /**
     * @var string
     */
    protected $planId;

    protected function setUp()
    {
        parent::setUp();
        $this->discounts = new Discounts($this->client);
        $this->customers = new Customers($this->client);
        $this->subscriptions = new Subscriptions($this->client);
        $this->coupons = new Coupons($this->client);
        $this->plans = new Plans($this->client);

        $this->couponId = $this->coupons->createCoupon($this->coupons->createCouponRequest('forever')->setPercentOff(50))->getId();
        $customerRequest = $this->customers->createCustomerRequest()->setCard(new CreateCardRequest(self::VISA_1, 1, 2020));
        $this->customerId = $this->customers->createCustomer($customerRequest)->getId();
        $planRequest = $this->plans->createPlanRequest("discounts_test_plan" . rand(0, 999999), 350, 'usd', 'month', 'test plan');
        $this->planId = $this->plans->createPlan($planRequest)->getId();
    }

    protected function tearDown()
    {
        $this->customers->deleteCustomer($this->customerId);
        $this->coupons->deleteCoupon($this->couponId);
        $this->plans->deletePlan($this->planId);
        parent::tearDown();
    }

    public function testDeleteCustomerDiscount()
    {
        $this->customers->updateCustomer($this->customerId, $this->customers->updateCustomerRequest()->setCoupon($this->couponId));
        $getResponse = $this->customers->getCustomer($this->customerId);
        $this->assertEquals($this->couponId, $getResponse->getDiscount()->getCoupon()->getId());

        $deleteResponse = $this->discounts->deleteCustomerDiscount($this->customerId);
        $this->assertInstanceOf(Discounts::DELETE_RESPONSE_CLASS, $deleteResponse);
        $this->assertTrue($deleteResponse->getDeleted());
    }

    public function testDeleteSubscriptionDiscount()
    {
        $subscriptionRequest = $this->subscriptions->createSubscriptionRequest($this->planId)->setCoupon($this->couponId);
        $subscriptionResponse = $this->subscriptions->createSubscription($this->customerId, $subscriptionRequest);
        $this->assertEquals($this->couponId, $subscriptionResponse->getDiscount()->getCoupon()->getId());

        $deleteResponse = $this->discounts->deleteSubscriptionDiscount($this->customerId, $subscriptionResponse->getId());
        $this->assertInstanceOf(Discounts::DELETE_RESPONSE_CLASS, $deleteResponse);
        $this->assertTrue($deleteResponse->getDeleted());
    }
}
 