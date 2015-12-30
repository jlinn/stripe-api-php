<?php


namespace Stripe\Request\Accounts;


class CreateDeclineChargeRequest
{

    /**
     * @var bool
     */
    protected $avsFailure;

    /**
     * @var bool
     */
    protected $cvcFailure;

    public function __construct($avsFailure, $cvcFailure)
    {
        $this->avsFailure = $avsFailure;
        $this->cvcFailure = $cvcFailure;
    }

    /**
     * @return boolean
     */
    public function isAvsFailure()
    {
        return $this->avsFailure;
    }

    /**
     * @param boolean $avsFailure
     * @return CreateDeclineChargeRequest
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
     * @return CreateDeclineChargeRequest
     */
    public function setCvcFailure($cvcFailure)
    {
        $this->cvcFailure = $cvcFailure;
        return $this;
    }


}