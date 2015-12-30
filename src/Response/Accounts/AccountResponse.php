<?php
/**
 * User: Don Gilbert
 * Date: 3/27/2014
 * Time: 4:50 PM
 */

namespace Stripe\Response\Accounts;

use JMS\Serializer\Annotation\Type;
use Stripe\Response\LegalEntity\LegalEntityResponse;

class AccountResponse
{
    /**
     * @Type("string")
     * @var string
     */
    protected $id;

    /**
     * @Type("string")
     * @var string
     */
    protected $email;

    /**
     * @Type("string")
     * @var string
     */
    protected $statementDescriptor;

    /**
     * @Type("string")
     * @var string
     */
    protected $displayName;

    /**
     * @Type("string")
     * @var string
     */
    protected $timezone;

    /**
     * @Type("boolean")
     * @var bool
     */
    protected $detailsSubmitted;

    /**
     * @Type("boolean")
     * @var bool
     */
    protected $chargesEnabled;

    /**
     * @Type("boolean")
     * @var bool
     */
    protected $transfersEnabled;

    /**
     * @Type("array")
     * @var array
     */
    protected $currenciesSupported;

    /**
     * @Type("string")
     * @var string
     */
    protected $defaultCurrency;

    /**
     * @Type("string")
     * @var string
     */
    protected $country;

    /**
     * @Type("string")
     * @var string
     */
    protected $object;

    /**
     * @Type("Stripe\Response\LegalEntity\LegalEntityResponse")
     * @var LegalEntityResponse
     */
    protected $legalEntity;

    /**
     * @Type("Stripe\Response\Accounts\ListExternalAccountsResponse")
     * @var ListExternalAccountsResponse
     */
    protected $externalAccounts;

    /**
     * @param boolean $chargesEnabled
     * @return $this
     */
    public function setChargesEnabled($chargesEnabled)
    {
        $this->chargesEnabled = $chargesEnabled;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getChargesEnabled()
    {
        return $this->chargesEnabled;
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
     * @param array $currenciesSupported
     * @return $this
     */
    public function setCurrenciesSupported($currenciesSupported)
    {
        $this->currenciesSupported = $currenciesSupported;
        return $this;
    }

    /**
     * @return array
     */
    public function getCurrenciesSupported()
    {
        return $this->currenciesSupported;
    }

    /**
     * @param string $defaultCurrency
     * @return $this
     */
    public function setDefaultCurrency($defaultCurrency)
    {
        $this->defaultCurrency = $defaultCurrency;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultCurrency()
    {
        return $this->defaultCurrency;
    }

    /**
     * @param boolean $detailsSubmitted
     * @return $this
     */
    public function setDetailsSubmitted($detailsSubmitted)
    {
        $this->detailsSubmitted = $detailsSubmitted;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDetailsSubmitted()
    {
        return $this->detailsSubmitted;
    }

    /**
     * @param string $displayName
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
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
    public function getId()
    {
        return $this->id;
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
     * @return string
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param string $statementDescriptor
     * @return $this
     */
    public function setStatementDescriptor($statementDescriptor)
    {
        $this->statementDescriptor = $statementDescriptor;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatementDescriptor()
    {
        return $this->statementDescriptor;
    }

    /**
     * @param string $timezone
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * @param boolean $transfersEnabled
     * @return $this
     */
    public function setTransferEnabled($transfersEnabled)
    {
        $this->transfersEnabled = $transfersEnabled;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getTransfersEnabled()
    {
        return $this->transfersEnabled;
    }

    /**
     * @return LegalEntityResponse
     */
    public function getLegalEntity()
    {
        return $this->legalEntity;
    }

    /**
     * @param LegalEntityResponse $legalEntity
     * @return AccountResponse
     */
    public function setLegalEntity($legalEntity)
    {
        $this->legalEntity = $legalEntity;
        return $this;
    }
}