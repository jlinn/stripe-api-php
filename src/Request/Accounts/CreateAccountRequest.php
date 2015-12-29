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
     */
    protected $bankAccount;

    /**
     * @var CreateLegalEntityRequest
     */
    protected $legalEntity;

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
     * @return BankAccountRequest
     */
    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    /**
     * @param BankAccountRequest $bankAccount
     * @return $this
     */
    public function setBankAccount($bankAccount)
    {
        $this->bankAccount = $bankAccount;
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
}