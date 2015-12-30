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
     * @Type("string")
     * @var string
     */
    protected $businessLogo;

    /**
     * @Type("string")
     * @var string
     */
    protected $businessName;

    /**
     * @Type("string")
     * @var string
     */
    protected $businessPrimaryColor;

    /**
     * @Type("string")
     * @var string
     */
    protected $businessUrl;

    /**
     * @Type("boolean")
     * @var bool
     */
    protected $debitNegativeBalances;

    /**
     * @Type("Stripe\Response\Accounts\DeclineChargeOnResponse")
     * @var DeclineChargeOnResponse
     */
    protected $declineChargeOn;

    /**
     * @Type("array")
     * @var array
     */
    protected $metadata;

    /**
     * @Type("string")
     * @var string
     */
    protected $productDescription;

    /**
     * @Type("string")
     * @var string
     */
    protected $supportEmail;

    /**
     * @Type("string")
     * @var string
     */
    protected $supportPhone;

    /**
     * @Type("string")
     * @var string
     */
    protected $supportUrl;

    /**
     * @Type("Stripe\Response\Accounts\TransferScheduleResponse")
     * @var TransferScheduleResponse
     */
    protected $transferSchedule;

    /**
     * @Type("boolean")
     * @var bool
     */
    protected $managed;

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

    /**
     * @return ListExternalAccountsResponse
     */
    public function getExternalAccounts()
    {
        return $this->externalAccounts;
    }

    /**
     * @param ListExternalAccountsResponse $externalAccounts
     * @return AccountResponse
     */
    public function setExternalAccounts($externalAccounts)
    {
        $this->externalAccounts = $externalAccounts;
        return $this;
    }

    /**
     * @return string
     */
    public function getBusinessLogo()
    {
        return $this->businessLogo;
    }

    /**
     * @param string $businessLogo
     * @return AccountResponse
     */
    public function setBusinessLogo($businessLogo)
    {
        $this->businessLogo = $businessLogo;
        return $this;
    }

    /**
     * @return string
     */
    public function getBusinessName()
    {
        return $this->businessName;
    }

    /**
     * @param string $businessName
     * @return AccountResponse
     */
    public function setBusinessName($businessName)
    {
        $this->businessName = $businessName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBusinessPrimaryColor()
    {
        return $this->businessPrimaryColor;
    }

    /**
     * @param string $businessPrimaryColor
     * @return AccountResponse
     */
    public function setBusinessPrimaryColor($businessPrimaryColor)
    {
        $this->businessPrimaryColor = $businessPrimaryColor;
        return $this;
    }

    /**
     * @return string
     */
    public function getBusinessUrl()
    {
        return $this->businessUrl;
    }

    /**
     * @param string $businessUrl
     * @return AccountResponse
     */
    public function setBusinessUrl($businessUrl)
    {
        $this->businessUrl = $businessUrl;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isDebitNegativeBalances()
    {
        return $this->debitNegativeBalances;
    }

    /**
     * @param boolean $debitNegativeBalances
     * @return AccountResponse
     */
    public function setDebitNegativeBalances($debitNegativeBalances)
    {
        $this->debitNegativeBalances = $debitNegativeBalances;
        return $this;
    }

    /**
     * @return DeclineChargeOnResponse
     */
    public function getDeclineChargeOn()
    {
        return $this->declineChargeOn;
    }

    /**
     * @param DeclineChargeOnResponse $declineChargeOn
     * @return AccountResponse
     */
    public function setDeclineChargeOn($declineChargeOn)
    {
        $this->declineChargeOn = $declineChargeOn;
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
     * @return AccountResponse
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductDescription()
    {
        return $this->productDescription;
    }

    /**
     * @param string $productDescription
     * @return AccountResponse
     */
    public function setProductDescription($productDescription)
    {
        $this->productDescription = $productDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getSupportEmail()
    {
        return $this->supportEmail;
    }

    /**
     * @param string $supportEmail
     * @return AccountResponse
     */
    public function setSupportEmail($supportEmail)
    {
        $this->supportEmail = $supportEmail;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSupportPhone()
    {
        return $this->supportPhone;
    }

    /**
     * @param mixed $supportPhone
     * @return AccountResponse
     */
    public function setSupportPhone($supportPhone)
    {
        $this->supportPhone = $supportPhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getSupportUrl()
    {
        return $this->supportUrl;
    }

    /**
     * @param string $supportUrl
     * @return AccountResponse
     */
    public function setSupportUrl($supportUrl)
    {
        $this->supportUrl = $supportUrl;
        return $this;
    }

    /**
     * @return TransferScheduleResponse
     */
    public function getTransferSchedule()
    {
        return $this->transferSchedule;
    }

    /**
     * @param TransferScheduleResponse $transferSchedule
     * @return AccountResponse
     */
    public function setTransferSchedule($transferSchedule)
    {
        $this->transferSchedule = $transferSchedule;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isManaged()
    {
        return $this->managed;
    }

    /**
     * @param boolean $managed
     * @return AccountResponse
     */
    public function setManaged($managed)
    {
        $this->managed = $managed;
        return $this;
    }

}
