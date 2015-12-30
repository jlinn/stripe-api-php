<?php

namespace Stripe\Request\Accounts;


class CreateExternalAccountRequest
{
    /**
     * @var string
     */
    protected $object;

    /**
     * @var string
     */
    protected $country;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var string
     */
    protected $routingNumber;

    /**
     * @var string
     */
    protected $accountNumber;

    /**
     * @var string individual or company
     */
    protected $accountHolderType;

    /**
     * @var string
     */
    protected $name;

    /**
     * CreateExternalAccountRequest constructor.
     * @param $accountNumber string Account number
     * @param $country string Country of business
     * @param $currency string Currency accepted
     * @param string $object
     */
    public function __construct($accountNumber, $country, $currency, $object = 'bank_account')
    {
        $this->accountNumber = $accountNumber;
        $this->country = $country;
        $this->currency = $currency;
        $this->object = $object;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
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
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoutingNumber()
    {
        return $this->routingNumber;
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
    public function getAccountNumber()
    {
        return $this->accountNumber;
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
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param string $object
     * @return CreateExternalAccountRequest
     */
    public function setObject($object)
    {
        $this->object = $object;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountHolderType()
    {
        return $this->accountHolderType;
    }

    /**
     * @param string $accountHolderType
     * @return CreateExternalAccountRequest
     */
    public function setAccountHolderType($accountHolderType)
    {
        $this->accountHolderType = $accountHolderType;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return CreateExternalAccountRequest
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

}