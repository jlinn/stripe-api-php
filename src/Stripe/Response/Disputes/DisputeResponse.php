<?php
/**
 * User: Joe Linn
 * Date: 3/26/2014
 * Time: 10:59 PM
 */

namespace Stripe\Response\Disputes;

use JMS\Serializer\Annotation\Type;

class DisputeResponse
{
    /**
     * @Type("string")
     * @var string
     */
    protected $object;

    /**
     * @Type("boolean")
     * @var bool
     */
    protected $livemode;

    /**
     * @Type("integer")
     * @var int
     */
    protected $amount;

    /**
     * @Type("string")
     * @var string
     */
    protected $charge;

    /**
     * @Type("integer")
     * @var int
     */
    protected $created;

    /**
     * @Type("string")
     * @var string
     */
    protected $currency;

    /**
     * @Type("string")
     * @var string
     */
    protected $reason;

    /**
     * @Type("string")
     * @var string
     */
    protected $status;

    /**
     * @Type("string")
     * @var string
     */
    protected $balanceTransaction;

    /**
     * @Type("string")
     * @var string
     */
    protected $evidence;

    /**
     * @Type("integer")
     * @var int
     */
    protected $evidenceDueBy;

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getBalanceTransaction()
    {
        return $this->balanceTransaction;
    }

    /**
     * @param string $balanceTransaction
     * @return $this
     */
    public function setBalanceTransaction($balanceTransaction)
    {
        $this->balanceTransaction = $balanceTransaction;
        return $this;
    }

    /**
     * @return string
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * @param string $charge
     * @return $this
     */
    public function setCharge($charge)
    {
        $this->charge = $charge;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param int $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->created = $created;
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
    public function getEvidence()
    {
        return $this->evidence;
    }

    /**
     * @param string $evidence
     * @return $this
     */
    public function setEvidence($evidence)
    {
        $this->evidence = $evidence;
        return $this;
    }

    /**
     * @return int
     */
    public function getEvidenceDueBy()
    {
        return $this->evidenceDueBy;
    }

    /**
     * @param int $evidenceDueBy
     * @return $this
     */
    public function setEvidenceDueBy($evidenceDueBy)
    {
        $this->evidenceDueBy = $evidenceDueBy;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getLivemode()
    {
        return $this->livemode;
    }

    /**
     * @param boolean $livemode
     * @return $this
     */
    public function setLivemode($livemode)
    {
        $this->livemode = $livemode;
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

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
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
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }


} 