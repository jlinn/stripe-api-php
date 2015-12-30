<?php
/**
 * User: Joe Linn
 * Date: 5/30/2015
 * Time: 1:08 PM
 */

namespace Stripe\Request\Accounts;


use Stripe\Request\LegalEntity\CreateLegalEntityRequest;

class CreateAccountRequest
{
    /**
     * @var bool
     */
    protected $managed;

    /**
     * @var string
     */
    protected $country;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var BankAccountRequest
     * @deprecated Use external accounts instead of bank account. Changed in API.
     */
    protected $bankAccount;

    /**
     * @var CreateExternalAccountRequest
     */
    protected $externalAccount;

    /**
     * @var CreateLegalEntityRequest
     */
    protected $legalEntity;

    /**
     * @var string
     */
    protected $businessLogo;

    /**
     * @var string
     */
    protected $businessName;

    /**
     * @var string
     */
    protected $businessPrimaryColor;

    /**
     * @var string
     */
    protected $businessUrl;

    /**
     * @var bool
     */
    protected $debitNegativeBalances;

    /**
     * @var CreateDeclineChargeRequest
     */
    protected $declineChargeOn;

    /**
     * @var string
     */
    protected $defaultCurrency;

    /**
     * @var array
     */
    protected $metadata;

    /**
     * @var string
     */
    protected $productDescription;

    /**
     * @var string
     */
    protected $statementDescriptor;

    /**
     * @var string
     */
    protected $supportEmail;

    /**
     * @var string
     */
    protected $supportPhone;

    /**
     * @var string
     */
    protected $supportUrl;

    /**
     * @var CreateTransferScheduleRequest
     */
    protected $transferSchedule;

    /**
     * @var CreateTOSAcceptance
     */
    protected $tosAcceptance;

    /**
     * @return boolean
     */
    public function isManaged()
    {
        return $this->managed;
    }

    /**
     * @param boolean $managed
     * @return $this
     */
    public function setManaged($managed)
    {
        $this->managed = $managed;
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
    public function getEmail()
    {
        return $this->email;
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
     * @return CreateExternalAccountRequest
     */
    public function getExternalAccount()
    {
        return $this->externalAccount;
    }

    /**
     * @param CreateExternalAccountRequest $externalAccount
     * @return CreateAccountRequest
     */
    public function setExternalAccount($externalAccount)
    {
        $this->externalAccount = $externalAccount;
        return $this;
    }

    /**
     * @return CreateLegalEntityRequest
     */
    public function getLegalEntity()
    {
        return $this->legalEntity;
    }

    /**
     * @param CreateLegalEntityRequest $legalEntity
     * @return CreateAccountRequest
     */
    public function setLegalEntity($legalEntity)
    {
        $this->legalEntity = $legalEntity;
        return $this;
    }

    /**
     * @return CreateTOSAcceptance
     */
    public function getTosAcceptance()
    {
        return $this->tosAcceptance;
    }

    /**
     * @param CreateTOSAcceptance $tosAcceptance
     * @return CreateAccountRequest
     */
    public function setTosAcceptance($tosAcceptance)
    {
        $this->tosAcceptance = $tosAcceptance;
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
     * @return CreateAccountRequest
     * @deprecated Use external accounts instead of bank accounts.
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
     * @return CreateAccountRequest
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
     * @return CreateAccountRequest
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
     * @return CreateAccountRequest
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
     * @return CreateAccountRequest
     */
    public function setDebitNegativeBalances($debitNegativeBalances)
    {
        $this->debitNegativeBalances = $debitNegativeBalances;
        return $this;
    }

    /**
     * @return CreateDeclineChargeRequest
     */
    public function getDeclineChargeOn()
    {
        return $this->declineChargeOn;
    }

    /**
     * @param CreateDeclineChargeRequest $declineChargeOn
     * @return CreateAccountRequest
     */
    public function setDeclineChargeOn($declineChargeOn)
    {
        $this->declineChargeOn = $declineChargeOn;
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
     * @param string $defaultCurrency
     * @return CreateAccountRequest
     */
    public function setDefaultCurrency($defaultCurrency)
    {
        $this->defaultCurrency = $defaultCurrency;
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
     * @return CreateAccountRequest
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
     * @return CreateAccountRequest
     */
    public function setProductDescription($productDescription)
    {
        $this->productDescription = $productDescription;
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
     * @param string $statementDescriptor
     * @return CreateAccountRequest
     */
    public function setStatementDescriptor($statementDescriptor)
    {
        $this->statementDescriptor = $statementDescriptor;
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
     * @return CreateAccountRequest
     */
    public function setSupportEmail($supportEmail)
    {
        $this->supportEmail = $supportEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getSupportPhone()
    {
        return $this->supportPhone;
    }

    /**
     * @param string $supportPhone
     * @return CreateAccountRequest
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
     * @return CreateAccountRequest
     */
    public function setSupportUrl($supportUrl)
    {
        $this->supportUrl = $supportUrl;
        return $this;
    }

    /**
     * @return CreateTransferScheduleRequest
     */
    public function getTransferSchedule()
    {
        return $this->transferSchedule;
    }

    /**
     * @param CreateTransferScheduleRequest $transferSchedule
     * @return CreateAccountRequest
     */
    public function setTransferSchedule($transferSchedule)
    {
        $this->transferSchedule = $transferSchedule;
        return $this;
    }

}