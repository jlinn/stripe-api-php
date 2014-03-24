<?php
/**
 * User: Joe Linn
 * Date: 3/20/2014
 * Time: 2:31 PM
 */

namespace Stripe\Request\Cards;

class UpdateCardRequest
{
    /**
     * @var string
     */
    protected $addressCity;

    /**
     * @var string
     */
    protected $addressCounty;

    /**
     * @var string
     */
    protected $addressLine1;

    /**
     * @var string
     */
    protected $addressLine2;

    /**
     * @var string
     */
    protected $addressState;

    /**
     * @var string
     */
    protected $addressZip;

    /**
     * @var int
     */
    protected $expMonth;

    /**
     * @var int
     */
    protected $expYear;

    /**
     * @var string
     */
    protected $name;

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
    public function getAddressCounty()
    {
        return $this->addressCounty;
    }

    /**
     * @param string $addressCounty
     * @return $this
     */
    public function setAddressCounty($addressCounty)
    {
        $this->addressCounty = $addressCounty;
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
}