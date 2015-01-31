<?php
/**
 * User: Joe Linn
 * Date: 3/28/2014
 * Time: 9:07 PM
 */

namespace Stripe\Tests\Api;


use Stripe\Api\Coupons;
use Stripe\Request\ListRequest;
use Stripe\Response\Coupons\CouponResponse;
use Stripe\Tests\StripeTestCase;

class CouponsTest extends StripeTestCase
{
    /**
     * @var Coupons
     */
    protected $coupons;

    protected function setUp()
    {
        parent::setUp();
        $this->coupons = new Coupons($this->client);
    }

    public function testCreateCoupon()
    {
        $duration = 'once';
        $percentOff = 50;
        $request = $this->coupons->createCouponRequest($duration)->setPercentOff($percentOff);
        $createResponse = $this->coupons->createCoupon($request);

        $this->assertInstanceOf(Coupons::COUPON_RESPONSE_CLASS, $createResponse);
        $this->assertEquals($duration, $createResponse->getDuration());
        $this->assertEquals($percentOff, $createResponse->getPercentOff());

        $this->client->delete('coupons/' . $createResponse->getId());
    }

    public function testGetCoupon()
    {
        $createResponse = $this->createCoupon();
        $this->assertInstanceOf(Coupons::COUPON_RESPONSE_CLASS, $createResponse);

        $getResponse = $this->coupons->getCoupon($createResponse->getId());

        $this->assertInstanceOf(Coupons::COUPON_RESPONSE_CLASS, $getResponse);
        $this->assertEquals($createResponse->getId(), $getResponse->getId());

        $this->client->delete('coupons/' . $createResponse->getId());
    }

    public function testDeleteCoupon()
    {
        $createResponse = $this->createCoupon();
        $this->assertInstanceOf(Coupons::COUPON_RESPONSE_CLASS, $createResponse);

        $deleteResponse = $this->coupons->deleteCoupon($createResponse->getId());

        $this->assertInstanceOf(Coupons::DELETE_RESPONSE_CLASS, $deleteResponse);
        $this->assertTrue($deleteResponse->getDeleted());
        $this->assertEquals($createResponse->getId(), $deleteResponse->getId());
    }

    public function testListCoupons()
    {
        $request = new ListRequest();
        $request->setLimit(1);
        $listResponse = $this->coupons->listCoupons($request);

        $this->assertInstanceOf(Coupons::LIST_COUPONS_RESPONSE_CLASS, $listResponse);
        $this->assertEquals(1, sizeof($listResponse->getData()));
    }

    /**
     * @return CouponResponse
     */
    protected function createCoupon()
    {
        $duration = 'once';
        $percentOff = 50;
        $request = $this->coupons->createCouponRequest($duration)->setPercentOff($percentOff);
        return $this->coupons->createCoupon($request);
    }
}
 