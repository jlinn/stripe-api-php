<?php
/**
 * User: Joe Linn
 * Date: 3/21/2014
 * Time: 2:31 PM
 */

namespace Stripe\Response\Discounts;


use JMS\Serializer\Annotation\Type;
use Stripe\Response\Coupons\CouponResponse;

class DiscountResponse
{
    /**
     * @Type("string")
     * @var string
     */
    protected $object;

    /**
     * @Type("Stripe\Response\Coupons\CouponResponse")
     * @var CouponResponse
     */
    protected $coupon;

    /**
     * @Type("string")
     * @var string
     */
    protected $customer;

    /**
     * @Type("integer")
     * @var int
     */
    protected $start;

    /**
     * @Type("integer")
     * @var int
     */
    protected $end;

    /**
     * @Type("string")
     * @var string
     */
    protected $subscription;

    /**
     * @return CouponResponse
     */
    public function getCoupon()
    {
        return $this->coupon;
    }

    /**
     * @param CouponResponse $coupon
     * @return $this
     */
    public function setCoupon($coupon)
    {
        $this->coupon = $coupon;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param string $customer
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return int
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * @param int $end
     * @return $this
     */
    public function setEnd($end)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * @return string
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param string $object
     * @return $this
     */
    public function setObject($object)
    {
        $this->object = $object;
        return $this;
    }

    /**
     * @return int
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @param int $start
     * @return $this
     */
    public function setStart($start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * @param string $subscription
     * @return $this
     */
    public function setSubscription($subscription)
    {
        $this->subscription = $subscription;
        return $this;
    }


} 