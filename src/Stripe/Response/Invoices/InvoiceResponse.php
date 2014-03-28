<?php
/**
 * User: Don Gilbert
 * Date: 3/27/2014
 * Time: 9:06 AM
 */

namespace Stripe\Response\Invoices;

use JMS\Serializer\Annotation\Type;
use Stripe\Response\Discounts\DiscountResponse;

class InvoiceResponse
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
     * @Type("integer")
     * @var int
     */
    protected $amountDue;

    /**
     * @Type("integer")
     * @var int
     */
    protected $attemptCount;

    /**
     * @Type("boolean")
     * @var bool
     */
    protected $attempted;

    /**
     * @Type("boolean")
     * @var bool
     */
    protected $closed;

    /**
     * @Type("string")
     * @var string
     */
    protected $currency;

    /**
     * @Type("string")
     * @var string
     */
    protected $customer;

    /**
     * @Type("string")
     * @var string
     */
    protected $date;

    /**
     * @Type("Stripe\Response\Invoices\ListLineItemsResponse")
     * @var ListLineItemsResponse
     */
    protected $lines;

    /**
     * @Type("boolean")
     * @var bool
     */
    protected $paid;

    /**
     * @Type("string")
     * @var string
     */
    protected $periodEnd;

    /**
     * @Type("string")
     * @var string
     */
    protected $periodStart;

    /**
     * @Type("integer")
     * @var int
     */
    protected $startingBalance;

    /**
     * @Type("integer")
     * @var int
     */
    protected $subtotal;

    /**
     * @Type("integer")
     * @var int
     */
    protected $total;

    /**
     * @Type("integer")
     * @var int
     */
    protected $applicationFee;

    /**
     * @Type("string")
     * @var string
     */
    protected $charge;

    /**
     * @Type("string")
     * @var string
     */
    protected $description;

    /**
     * @Type("Stripe\Response\Discounts\DiscountResponse")
     * @var DiscountResponse
     */
    protected $discount;

    /**
     * @Type("integer")
     * @var int
     */
    protected $endingBalance;

    /**
     * @Type("string")
     * @var string
     */
    protected $nextPaymentAttempt;

    /**
     * @Type("string")
     * @var string
     */
    protected $subscription;

    /**
     * @Type("array")
     * @var array
     */
    protected $metadata;

    /**
     * @param int $amountDue
     * @return $this
     */
    public function setAmountDue($amountDue)
    {
        $this->amountDue = $amountDue;
        return $this;
    }

    /**
     * @return int
     */
    public function getAmountDue()
    {
        return $this->amountDue;
    }

    /**
     * @param int $applicationFee
     * @return $this
     */
    public function setApplicationFee($applicationFee)
    {
        $this->applicationFee = $applicationFee;
        return $this;
    }

    /**
     * @return int
     */
    public function getApplicationFee()
    {
        return $this->applicationFee;
    }

    /**
     * @param int $attemptCount
     * @return $this
     */
    public function setAttemptCount($attemptCount)
    {
        $this->attemptCount = $attemptCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getAttemptCount()
    {
        return $this->attemptCount;
    }

    /**
     * @param boolean $attempted
     * @return $this
     */
    public function setAttempted($attempted)
    {
        $this->attempted = $attempted;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAttempted()
    {
        return $this->attempted;
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
     * @return string
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * @param boolean $closed
     * @return $this
     */
    public function setClosed($closed)
    {
        $this->closed = $closed;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getClosed()
    {
        return $this->closed;
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
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param string $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param \Stripe\Response\Discounts\DiscountResponse $discount
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * @return \Stripe\Response\Discounts\DiscountResponse
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param int $endingBalance
     * @return $this
     */
    public function setEndingBalance($endingBalance)
    {
        $this->endingBalance = $endingBalance;
        return $this;
    }

    /**
     * @return int
     */
    public function getEndingBalance()
    {
        return $this->endingBalance;
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
     * @param \Stripe\Response\Invoices\ListLineItemsResponse $lines
     * @return $this
     */
    public function setLines($lines)
    {
        $this->lines = $lines;
        return $this;
    }

    /**
     * @return \Stripe\Response\Invoices\ListLineItemsResponse
     */
    public function getLines()
    {
        return $this->lines;
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
     * @return boolean
     */
    public function getLivemode()
    {
        return $this->livemode;
    }

    /**
     * @param array $metadata
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;
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
     * @param string $nextPaymentAttempt
     * @return $this
     */
    public function setNextPaymentAttempt($nextPaymentAttempt)
    {
        $this->nextPaymentAttempt = $nextPaymentAttempt;
        return $this;
    }

    /**
     * @return string
     */
    public function getNextPaymentAttempt()
    {
        return $this->nextPaymentAttempt;
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
     * @param boolean $paid
     * @return $this
     */
    public function setPaid($paid)
    {
        $this->paid = $paid;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getPaid()
    {
        return $this->paid;
    }

    /**
     * @param string $periodStart
     * @return $this
     */
    public function setPeriodStart($periodStart)
    {
        $this->periodStart = $periodStart;
        return $this;
    }

    /**
     * @return string
     */
    public function getPeriodStart()
    {
        return $this->periodStart;
    }

    /**
     * @param string $periodEnd
     * @return $this
     */
    public function setPeriodEnd($periodEnd)
    {
        $this->periodEnd = $periodEnd;
        return $this;
    }

    /**
     * @return string
     */
    public function getPeriodEnd()
    {
        return $this->periodEnd;
    }

    /**
     * @param int $startingBalance
     * @return $this
     */
    public function setStartingBalance($startingBalance)
    {
        $this->startingBalance = $startingBalance;
        return $this;
    }

    /**
     * @return int
     */
    public function getStartingBalance()
    {
        return $this->startingBalance;
    }

    /**
     * @param string $subscription
     * @return $this
     */
    public function setSubscription($subscription)
    {
        $this->subscription = $subscription;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * @param int $subtotal
     * @return $this
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;
        return $this;
    }

    /**
     * @return int
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * @param int $total
     * @return $this
     */
    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }
}
