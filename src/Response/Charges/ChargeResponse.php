<?php
/**
 * User: Joe Linn
 * Date: 3/26/2014
 * Time: 10:43 PM
 */

namespace Stripe\Response\Charges;

use JMS\Serializer\Annotation\Type;
use Stripe\Response\Cards\CardResponse;
use Stripe\Response\Disputes\DisputeResponse;
use Stripe\Response\Refunds\ListRefundsResponse;

class ChargeResponse
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
    protected $amount;

    /**
     * @Type("boolean")
     * @var bool
     */
    protected $captured;

    /**
     * @Type("Stripe\Response\Cards\CardResponse")
     * @var CardResponse
     */
    protected $card;

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
    protected $paid;

    /**
     * @Type("boolean")
     * @var bool
     */
    protected $refunded;

    /**
     * @Type("Stripe\Response\Refunds\ListRefundsResponse")
     * @var ListRefundsResponse
     */
    protected $refunds;

    /**
     * @Type("integer")
     * @var int
     */
    protected $amountRefunded;

    /**
     * @Type("string")
     * @var string
     */
    protected $balanceTransaction;

    /**
     * @Type("string")
     * @var string
     */
    protected $customer;

    /**
     * @Type("string")
     * @var string
     */
    protected $description;

    /**
     * @Type("Stripe\Response\Disputes\DisputeResponse")
     * @var DisputeResponse
     */
    protected $dispute;

    /**
     * @Type("string")
     * @var string
     */
    protected $failureCode;

    /**
     * @Type("string")
     * @var string
     */
    protected $failureMessage;

    /**
     * @Type("string")
     * @var string
     */
    protected $invoice;

    /**
     * @Type("array")
     * @var array
     */
    protected $metadata;

    /**
     * @Type("string")
     * @var string
     */
    protected $statementDescription;

    /**
     * @Type("string")
     * @var string
     */
    protected $receiptEmail;

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
     * @return boolean
     */
    public function getCaptured()
    {
        return $this->captured;
    }

    /**
     * @param boolean $captured
     * @return $this
     */
    public function setCaptured($captured)
    {
        $this->captured = $captured;
        return $this;
    }

    /**
     * @return CardResponse
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * @param CardResponse $card
     * @return $this
     */
    public function setCard($card)
    {
        $this->card = $card;
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
    public function getDescription()
    {
        return $this->description;
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
     * @return DisputeResponse
     */
    public function getDispute()
    {
        return $this->dispute;
    }

    /**
     * @param DisputeResponse $dispute
     * @return $this
     */
    public function setDispute($dispute)
    {
        $this->dispute = $dispute;
        return $this;
    }

    /**
     * @return string
     */
    public function getFailureCode()
    {
        return $this->failureCode;
    }

    /**
     * @param string $failureCode
     * @return $this
     */
    public function setFailureCode($failureCode)
    {
        $this->failureCode = $failureCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getFailureMessage()
    {
        return $this->failureMessage;
    }

    /**
     * @param string $failureMessage
     * @return $this
     */
    public function setFailureMessage($failureMessage)
    {
        $this->failureMessage = $failureMessage;
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
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * @param string $invoice
     * @return $this
     */
    public function setInvoice($invoice)
    {
        $this->invoice = $invoice;
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
     * @return array
     */
    public function getMetadata()
    {
        return $this->metadata;
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
    public function getPaid()
    {
        return $this->paid;
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
     * @return ListRefundsResponse
     */
    public function getRefunds()
    {
        return $this->refunds;
    }

    /**
     * @param ListRefundsResponse $refunds
     * @return $this
     */
    public function setRefunds($refunds)
    {
        $this->refunds = $refunds;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatementDescription()
    {
        return $this->statementDescription;
    }

    /**
     * @param string $statementDescription
     * @return $this
     */
    public function setStatementDescription($statementDescription)
    {
        $this->statementDescription = $statementDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getReceiptEmail()
    {
        return $this->receiptEmail;
    }

    /**
     * @param string $receiptEmail
     * @return $this
     */
    public function setReceiptEmail($receiptEmail)
    {
        $this->receiptEmail = $receiptEmail;
        return $this;
    }
}