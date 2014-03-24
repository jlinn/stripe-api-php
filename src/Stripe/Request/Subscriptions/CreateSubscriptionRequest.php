<?php
/**
 * User: Joe Linn
 * Date: 3/21/2014
 * Time: 2:23 PM
 */

namespace Stripe\Request\Subscriptions;


use Stripe\Request\Cards\CreateCardRequest;

class CreateSubscriptionRequest
{
    /**
     * @var string
     */
    protected $plan;

    /**
     * @var string
     */
    protected $coupon;

    /**
     * @var int
     */
    protected $trialEnd;

    /**
     * @var string|CreateCardRequest
     */
    protected $card;

    /**
     * @var int
     */
    protected $quantity;

    /**
     * @var float
     */
    protected $applicationFeePercent;

    /**
     * @param string $plan
     */
    public function __construct($plan)
    {
        $this->setPlan($plan);
    }

    /**
     * @return float
     */
    public function getApplicationFeePercent()
    {
        return $this->applicationFeePercent;
    }

    /**
     * @param float $applicationFeePercent
     * @return $this
     */
    public function setApplicationFeePercent($applicationFeePercent)
    {
        $this->applicationFeePercent = $applicationFeePercent;
        return $this;
    }

    /**
     * @return string|CreateCardRequest
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * @param string|CreateCardRequest $card
     * @return $this
     */
    public function setCard($card)
    {
        $this->card = $card;
        return $this;
    }

    /**
     * @return string
     */
    public function getCoupon()
    {
        return $this->coupon;
    }

    /**
     * @param string $coupon
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
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * @param string $plan
     * @return $this
     */
    public function setPlan($plan)
    {
        $this->plan = $plan;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getTrialEnd()
    {
        return $this->trialEnd;
    }

    /**
     * @param int $trialEnd
     * @return $this
     */
    public function setTrialEnd($trialEnd)
    {
        $this->trialEnd = $trialEnd;
        return $this;
    }


}