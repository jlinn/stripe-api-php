<?php
/**
 * User: Don Gilbert
 * Date: 3/27/2014
 * Time: 11:07 PM
 */

namespace Stripe\Request\Tokens;


class CreateBankAccountTokenRequest
{
    /**
     * @var string
     */
    protected $country;

    /**
     * @var string
     */
    protected $routingNumber;

    /**
     * @var string
     */
    protected $accountNumber;

    /**
     * @param string $country
     * @param string $routingNumber
     * @param string $accountNumber
     */
    public function __construct($country, $routingNumber, $accountNumber)
    {
        $this->country = $country;
        $this->routingNumber = $routingNumber;
        $this->accountNumber = $accountNumber;
    }

    /**
     * @param string $accountNumber
     * @return $this
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $routingNumber
     * @return $this
     */
    public function setRoutingNumber($routingNumber)
    {
        $this->routingNumber = $routingNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoutingNumber()
    {
        return $this->routingNumber;
    }
}
