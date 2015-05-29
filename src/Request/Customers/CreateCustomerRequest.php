<?php
/**
 * User: Joe Linn
 * Date: 3/21/2014
 * Time: 11:58 AM
 */

namespace Stripe\Request\Customers;


class CreateCustomerRequest extends AbstractCustomerRequest
{
    /**
     * @var string
     */
    protected $plan;

    /**
     * @var int
     */
    protected $quantity;

    /**
     * @var int
     */
    protected $trialEnd;

    /**
     * @var float
     */
    protected $taxPercent;

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