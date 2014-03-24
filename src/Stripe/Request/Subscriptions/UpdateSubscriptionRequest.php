<?php
/**
 * User: Joe Linn
 * Date: 3/21/2014
 * Time: 3:47 PM
 */

namespace Stripe\Request\Subscriptions;


class UpdateSubscriptionRequest extends CreateSubscriptionRequest
{
    /**
     * @var bool
     */
    protected $prorate;

    public function __construct()
    {

    }

    /**
     * @return boolean
     */
    public function getProrate()
    {
        return $this->prorate;
    }

    /**
     * @param boolean $prorate
     * @return $this
     */
    public function setProrate($prorate)
    {
        $this->prorate = $prorate;
        return $this;
    }
}