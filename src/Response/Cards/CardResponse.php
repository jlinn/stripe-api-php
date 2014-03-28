<?php
/**
 * User: Joe Linn
 * Date: 3/20/2014
 * Time: 2:45 PM
 */


namespace Stripe\Response\Cards;

use JMS\Serializer\Annotation\Type;

class CardResponse
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
    protected $object;

    /**
     * @Type("string")
     * @var string
     */
    protected $last4;

    /**
     * @Type("integer")
     * @var int
     */
    protected $expMonth;

    /**
     * @Type("integer")
     * @var int
     */
    protected $expYear;

    /**
     * @Type("string")
     * @var string
     */
    protected $fingerprint;

    /**
     * @Type("string")
     * @var string
     */
    protected $customer;

    /**
     * @Type("string")
     * @var string
     */
    protected $country;

    /**
     * @Type("string")
     * @var string
     */
    protected $name;

    /**
     * @Type("string")
     * @var string
     */
    protected $addressLine1;

    /**
     * @Type("string")
     * @var string
     */
    protected $addressLine2;

    /**
     * @Type("string")
     * @var string
     */
    protected $addressCity;

    /**
     * @Type("string")
     * @var string
     */
    protected $addressState;

    /**
     * @Type("string")
     * @var string
     */
    protected $addressZip;

    /**
     * @Type("string")
     * @var string
     */
    protected $addressCountry;

    /**
     * @Type("string")
     * @var string
     */
    protected $cvcCheck;

    /**
     * @Type("string")
     * @var string
     */
    protected $addressLine1Check;

    /**
     * @Type("string")
     * @var string
     */
    protected $addressZipCheck;

    /**
     * @return string
     */
    public function getAddressCity()
    {
        return $this->addressCity;
    }

    /**
     * @param string $addressCity
     * @return $this
     */
    public function setAddressCity($addressCity)
    {
        $this->addressCity = $addressCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddressCountry()
    {
        return $this->addressCountry;
    }

    /**
     * @param string $addressCountry
     * @return $this
     */
    public function setAddressCountry($addressCountry)
    {
        $this->addressCountry = $addressCountry;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    /**
     * @param string $addressLine1
     * @return $this
     */
    public function setAddressLine1($addressLine1)
    {
        $this->addressLine1 = $addressLine1;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddressLine1Check()
    {
        return $this->addressLine1Check;
    }

    /**
     * @param string $addressLine1Check
     * @return $this
     */
    public function setAddressLine1Check($addressLine1Check)
    {
        $this->addressLine1Check = $addressLine1Check;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->addressLine2;
    }

    /**
     * @param string $addressLine2
     * @return $this
     */
    public function setAddressLine2($addressLine2)
    {
        $this->addressLine2 = $addressLine2;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddressState()
    {
        return $this->addressState;
    }

    /**
     * @param string $addressState
     * @return $this
     */
    public function setAddressState($addressState)
    {
        $this->addressState = $addressState;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddressZip()
    {
        return $this->addressZip;
    }

    /**
     * @param string $addressZip
     * @return $this
     */
    public function setAddressZip($addressZip)
    {
        $this->addressZip = $addressZip;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddressZipCheck()
    {
        return $this->addressZipCheck;
    }

    /**
     * @param string $addressZipCheck
     * @return $this
     */
    public function setAddressZipCheck($addressZipCheck)
    {
        $this->addressZipCheck = $addressZipCheck;
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
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param string $customer
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return string
     */
    public function getCvcCheck()
    {
        return $this->cvcCheck;
    }

    /**
     * @param string $cvcCheck
     * @return $this
     */
    public function setCvcCheck($cvcCheck)
    {
        $this->cvcCheck = $cvcCheck;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpMonth()
    {
        return $this->expMonth;
    }

    /**
     * @param int $expMonth
     * @return $this
     */
    public function setExpMonth($expMonth)
    {
        $this->expMonth = $expMonth;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpYear()
    {
        return $this->expYear;
    }

    /**
     * @param int $expYear
     * @return $this
     */
    public function setExpYear($expYear)
    {
        $this->expYear = $expYear;
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
    public function getId()
    {
        return $this->id;
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
    public function getLast4()
    {
        return $this->last4;
    }

    /**
     * @param string $last4
     * @return $this
     */
    public function setLast4($last4)
    {
        $this->last4 = $last4;
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
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return $this
     */
    public function setObject($object)
    {
        $this->object = $object;
        return $this;
    }


}
