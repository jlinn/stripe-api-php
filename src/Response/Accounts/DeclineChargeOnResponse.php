<?php


namespace Stripe\Response\Accounts;


use JMS\Serializer\Annotation\Type;

class DeclineChargeOnResponse
{
    /**
     * @Type("boolean")
     * @var bool
     */
    protected $avsFailure;

    /**
     * @Type("boolean")
     * @var bool
     */
    protected $cvcFailure;

    /**
     * @return boolean
     */
    public function isAvsFailure()
    {
        return $this->avsFailure;
    }

    /**
     * @param boolean $avsFailure
     * @return DeclineChargeOnResponse
     */
    public function setAvsFailure($avsFailure)
    {
        $this->avsFailure = $avsFailure;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isCvcFailure()
    {
        return $this->cvcFailure;
    }

    /**
     * @param boolean $cvcFailure
     * @return DeclineChargeOnResponse
     */
    public function setCvcFailure($cvcFailure)
    {
        $this->cvcFailure = $cvcFailure;
        return $this;
    }

}