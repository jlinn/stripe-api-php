<?php


namespace Stripe\Response\Accounts;


use JMS\Serializer\Annotation\Type;

class ExternalAccountResponse
{
    /**
     * @Type("string")
     * @var string
     */
    protected $object;

    /**
     * @Type("string")
     * @var string
     */
    protected $country;

    /**
     * @Type("string")
     * @var string
     */
    protected $currency;

    /**
     * @Type("string")
     * @var string
     */
    protected $routingNumber;

    /**
     * @Type("string")
     * @var string
     */
    protected $bankName;

    /**
     * @Type("boolean")
     * @var bool
     */
    protected $defaultForCurrency;

    /**
     * @Type("string")
     * @var string
     */
    protected $fingerprint;

    /**
     * @Type("string")
     * @var string
     */
    protected $last4;

    /**
     * @Type("array")
     * @var array
     */
    protected $metadata;

    /**
     * @Type("string")
     * @var string
     */
    protected $name;

    /**
     * @Type("string")
     * @var string
     */
    protected $status;

    /**
     * @Type("string")
     * @var string individual or company
     */
    protected $accountHolderType;

    /**
     * @return string
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param string $object
     * @return ExternalAccountResponse
     */
    public function setObject($object)
    {
        $this->object = $object;
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
     * @param string $country
     * @return ExternalAccountResponse
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
     * @return ExternalAccountResponse
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
     * @return ExternalAccountResponse
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
     * @return ExternalAccountResponse
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
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
     * @return ExternalAccountResponse
     */
    public function setAccountHolderType($accountHolderType)
    {
        $this->accountHolderType = $accountHolderType;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * @param string $bankName
     * @return ExternalAccountResponse
     */
    public function setBankName($bankName)
    {
        $this->bankName = $bankName;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isDefaultForCurrency()
    {
        return $this->defaultForCurrency;
    }

    /**
     * @param boolean $defaultForCurrency
     * @return ExternalAccountResponse
     */
    public function setDefaultForCurrency($defaultForCurrency)
    {
        $this->defaultForCurrency = $defaultForCurrency;
        return $this;
    }

    /**
     * @return string
     */
    public function getFingerprint()
    {
        return $this->fingerprint;
    }

    /**
     * @param string $fingerprint
     * @return ExternalAccountResponse
     */
    public function setFingerprint($fingerprint)
    {
        $this->fingerprint = $fingerprint;
        return $this;
    }

    /**
     * @return string
     */
    public function getLast4()
    {
        return $this->last4;
    }

    /**
     * @param string $last4
     * @return ExternalAccountResponse
     */
    public function setLast4($last4)
    {
        $this->last4 = $last4;
        return $this;
    }

    /**
     * @return array
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param array $metadata
     * @return ExternalAccountResponse
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;
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
     * @return ExternalAccountResponse
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return ExternalAccountResponse
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

}