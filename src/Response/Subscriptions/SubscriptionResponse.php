<?php
/**
 * User: Joe Linn
 * Date: 3/21/2014
 * Time: 3:09 PM
 */

namespace Stripe\Response\Subscriptions;

use JMS\Serializer\Annotation\Type;
use Stripe\Response\Discounts\DiscountResponse;
use Stripe\Response\Plans\PlanResponse;

class SubscriptionResponse
{
    /**
     * @Type("string")
     * @var string
     */
    protected $id;

    /**
     * @Type("Stripe\Response\Plans\PlanResponse")
     * @var PlanResponse
     */
    protected $plan;

    /**
     * @Type("string")
     * @var string
     */
    protected $object;

    /**
     * @Type("boolean")
     * @var bool
     */
    protected $cancelAtPeriodEnd;

    /**
     * @Type("string")
     * @var string
     */
    protected $customer;

    /**
     * @Type("integer")
     * @var int
     */
    protected $quantity;

    /**
     * @Type("integer")
     * @var int
     */
    protected $start;

    /**
     * @Type("string")
     * @var string
     */
    protected $status;

    /**
     * @Type("double")
     * @var float
     */
    protected $applicationFeePercent;

    /**
     * @Type("integer")
     * @var int
     */
    protected $canceledAt;

    /**
     * @Type("integer")
     * @var int
     */
    protected $currentPeriodEnd;

    /**
     * @Type("integer")
     * @var int
     */
    protected $currentPeriodStart;

    /**
     * @Type("Stripe\Response\Discounts\DiscountResponse")
     * @var DiscountResponse
     */
    protected $discount;

    /**
     * @Type("integer")
     * @var int
     */
    protected $endedAt;

    /**
     * @Type("integer")
     * @var int
     */
    protected $trialEnd;

    /**
     * @Type("integer")
     * @var int
     */
    protected $trialStart;

    /**
     * @Type("float")
     * @var float
     */
    protected $taxPercent;

    /**
     * @return PlanResponse
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * @param PlanResponse $plan
     * @return $this
     */
    public function setPlan($plan)
    {
        $this->plan = $plan;
        return $this;
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
     * @return boolean
     */
    public function getCancelAtPeriodEnd()
    {
        return $this->cancelAtPeriodEnd;
    }

    /**
     * @param boolean $cancelAtPeriodEnd
     * @return $this
     */
    public function setCancelAtPeriodEnd($cancelAtPeriodEnd)
    {
        $this->cancelAtPeriodEnd = $cancelAtPeriodEnd;
        return $this;
    }

    /**
     * @return int
     */
    public function getCanceledAt()
    {
        return $this->canceledAt;
    }

    /**
     * @param int $canceledAt
     * @return $this
     */
    public function setCanceledAt($canceledAt)
    {
        $this->canceledAt = $canceledAt;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurrentPeriodEnd()
    {
        return $this->currentPeriodEnd;
    }

    /**
     * @param int $currentPeriodEnd
     * @return $this
     */
    public function setCurrentPeriodEnd($currentPeriodEnd)
    {
        $this->currentPeriodEnd = $currentPeriodEnd;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurrentPeriodStart()
    {
        return $this->currentPeriodStart;
    }

    /**
     * @param int $currentPeriodStart
     * @return $this
     */
    public function setCurrentPeriodStart($currentPeriodStart)
    {
        $this->currentPeriodStart = $currentPeriodStart;
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
     * @return DiscountResponse
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param DiscountResponse $discount
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * @return int
     */
    public function getEndedAt()
    {
        return $this->endedAt;
    }

    /**
     * @param int $endedAt
     * @return $this
     */
    public function setEndedAt($endedAt)
    {
        $this->endedAt = $endedAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
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
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
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

    /**
     * @return int
     */
    public function getTrialStart()
    {
        return $this->trialStart;
    }

    /**
     * @param int $trialStart
     * @return $this
     */
    public function setTrialStart($trialStart)
    {
        $this->trialStart = $trialStart;
        return $this;
    }

    /**
     * @param float $taxPercent
     * @return $this
     */
    public function setTaxPercent($taxPercent)
    {
        $this->taxPercent = $taxPercent;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxPercent()
    {
        return $this->taxPercent;
    }

}