<?php
/**
 * User: Joe Linn
 * Date: 3/21/2014
 * Time: 11:57 AM
 */

namespace Stripe\Request\Customers;


class UpdateCustomerRequest extends AbstractCustomerRequest
{
    /**
     * @var string
     */
    protected $defaultCard;

    /**
     * @return string
     */
    public function getDefaultCard()
    {
        return $this->defaultCard;
    }

    /**
     * @param string $defaultCard
     * @return $this
     */
    public function setDefaultCard($defaultCard)
    {
        $this->defaultCard = $defaultCard;
        return $this;
    }
}