<?php
/**
 * User: Don Gilbert
 * Date: 3/27/2014
 * Time: 4:50 PM
 */

namespace Stripe\Response\Tokens;

use JMS\Serializer\Annotation\Type;

class BankAccountResponse
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
    protected $id;

    /**
     * @Type("string")
     * @var string
     */
    protected $bankName;

    /**
     * @Type("integer")
     * @var int
     */
    protected $last4;

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
     * @Type("boolean")
     * @var bool
     */
    protected $validated;

    /**
     * @Type("boolean")
     * @var bool
     */
    protected $verified;

    /**
     * @Type("string")
     * @var string
     */
    protected $fingerprint;

    /**
     * @Type("boolean")
     * @var bool
     */
    protected $disabled;

    /**
     * @param string $bankName
     * @return $this
     */
    public function setBankName($bankName)
    {
        $this->bankName = $bankName;
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
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param boolean $disabled
     * @return $this
     */
    public function setDisabled($disabled)
    {
        $this->disabled = $disabled;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * @param string $fingerprint
     * @return $this
     */
    public function setFingerprint($fingerprint)
    {
        $this->fingerprint = $fingerprint;
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
     * @param int $last4
     * @return $this
     */
    public function setLast4($last4)
    {
        $this->last4 = $last4;
        return $this;
    }

    /**
     * @return int
     */
    public function getLast4()
    {
        return $this->last4;
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
     * @param boolean $validated
     * @return $this
     */
    public function setValidated($validated)
    {
        $this->validated = $validated;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getValidated()
    {
        return $this->validated;
    }

    /**
     * @param boolean $verified
     * @return $this
     */
    public function setVerified($verified)
    {
        $this->verified = $verified;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getVerified()
    {
        return $this->verified;
    }
}
