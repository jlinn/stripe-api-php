<?php
/**
 * User: Joe Linn
 * Date: 3/28/2014
 * Time: 8:57 PM
 */

namespace Stripe\Api;


use Stripe\Request\Coupons\CreateCouponRequest;
use Stripe\Response\Coupons\CouponResponse;
use Stripe\Response\Coupons\ListCouponsResponse;
use Stripe\Response\DeleteResponse;

class Coupons extends AbstractApi
{
    const COUPON_RESPONSE_CLASS = 'Stripe\Response\Coupons\CouponResponse';
    const LIST_COUPONS_RESPONSE_CLASS = 'Stripe\Response\Coupons\ListCouponsResponse';

    /**
     * @param CreateCouponRequest $request
     * @return CouponResponse
     * @link https://stripe.com/docs/api#create_coupon
     */
    public function createCoupon(CreateCouponRequest $request)
    {
        return $this->client->post($this->buildUrl(), self::COUPON_RESPONSE_CLASS, $request);
    }

    /**
     * @param string $couponId
     * @return CouponResponse
     * @link https://stripe.com/docs/api#retrieve_coupon
     */
    public function getCoupon($couponId)
    {
        return $this->client->get($this->buildUrl($couponId), self::COUPON_RESPONSE_CLASS);
    }

    /**
     * @param string $couponId
     * @return DeleteResponse
     * @link https://stripe.com/docs/api#delete_coupon
     */
    public function deleteCoupon($couponId)
    {
        return $this->client->delete($this->buildUrl($couponId), self::DELETE_RESPONSE_CLASS);
    }

    /**
     * @param int $limit
     * @param string $startingAfter
     * @return ListCouponsResponse
     * @link https://stripe.com/docs/api#list_coupons
     */
    public function listCoupons($limit = 10, $startingAfter = null)
    {
        $request = array(
            'limit' => $limit
        );
        if (!is_null($startingAfter)) {
            $request['starting_after'] = $startingAfter;
        }
        return $this->client->get($this->buildUrl(), self::LIST_COUPONS_RESPONSE_CLASS, null, $request);
    }

    /**
     * @param string $duration
     * @return CreateCouponRequest
     */
    public function createCouponRequest($duration)
    {
        return new CreateCouponRequest($duration);
    }

    /**
     * @param string $couponId
     * @return string
     */
    public function buildUrl($couponId = null)
    {
        $url = 'coupons';
        if (!is_null($couponId)) {
            $url .= '/' . $couponId;
        }
        return $url;
    }
} 