<?php
/**
 * User: Joe Linn
 * Date: 3/30/2014
 * Time: 6:40 PM
 */

namespace Stripe\Response\ApplicationFees;


use JMS\Serializer\Annotation\Type;

class ApplicationFeeResponse
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
     * @Type("boolean")
     * @var bool
     */
    protected $livemode;

    /**
     * @Type("string")
     * @var string
     */
    protected $account;

    /**
     * @Type("integer")
     * @var int
     */
    protected $amount;

    /**
     * @Type("string")
     * @var string
     */
    protected $application;

    /**
     * @Type("string")
     * @var string
     */
    protected $balanceTransaction;

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
     * @Type("boolean")
     * @var bool
     */
    protected $refunded;

    /**
     * @Type("array<Stripe\Response\Charges\RefundResponse>")
     * @var \Stripe\Response\Refunds\RefundResponse[]
     */
    protected $refunds;

    /**
     * @Type("integer")
     * @var int
     */
    protected $amountRefunded;

    /**
     * @return mixed
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param mixed $account
     * @return $this
     */
    public function setAccount($account)
    {
        $this->account = $account;
        return $this;
    }

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
     * @return int
     */
    public function getAmountRefunded()
    {
        return $this->amountRefunded;
    }

    /**
     * @param int $amountRefunded
     * @return $this
     */
    public function setAmountRefunded($amountRefunded)
    {
        $this->amountRefunded = $amountRefunded;
        return $this;
    }

    /**
     * @return string
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * @param string $application
     * @return $this
     */
    public function setApplication($application)
    {
        $this->application = $application;
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
     * @return boolean
     */
    public function getRefunded()
    {
        return $this->refunded;
    }

    /**
     * @param boolean $refunded
     * @return $this
     */
    public function setRefunded($refunded)
    {
        $this->refunded = $refunded;
        return $this;
    }

    /**
     * @return \Stripe\Response\Refunds\RefundResponse[]
     */
    public function getRefunds()
    {
        return $this->refunds;
    }

    /**
     * @param \Stripe\Response\Refunds\RefundResponse[] $refunds
     * @return $this
     */
    public function setRefunds($refunds)
    {
        $this->refunds = $refunds;
        return $this;
    }
}