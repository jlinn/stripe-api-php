<?php
/**
 * User: Joe Linn
 * Date: 3/30/2014
 * Time: 12:50 PM
 */

namespace Stripe\Response\Balance;

use JMS\Serializer\Annotation\Type;

class BalanceTransactionResponse
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
     * @Type("integer")
     * @var int
     */
    protected $amount;

    /**
     * @Type("integer")
     * @var int
     */
    protected $availableOn;

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
     * @Type("integer")
     * @var int
     */
    protected $fee;

    /**
     * @Type("Stripe\Response\Balance\FeeDetailsResponse")
     * @var FeeDetailsResponse
     */
    protected $feeDetails;

    /**
     * @Type("integer")
     * @var int
     */
    protected $net;

    /**
     * @Type("string")
     * @var string
     */
    protected $status;

    /**
     * @Type("string")
     * @var string
     */
    protected $type;

    /**
     * @Type("string")
     * @var string
     */
    protected $description;

    /**
     * @Type("string")
     * @var string
     */
    protected $source;

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
    public function getAvailableOn()
    {
        return $this->availableOn;
    }

    /**
     * @param int $availableOn
     * @return $this
     */
    public function setAvailableOn($availableOn)
    {
        $this->availableOn = $availableOn;
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
     * @return int
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * @param int $fee
     * @return $this
     */
    public function setFee($fee)
    {
        $this->fee = $fee;
        return $this;
    }

    /**
     * @return FeeDetailsResponse
     */
    public function getFeeDetails()
    {
        return $this->feeDetails;
    }

    /**
     * @param FeeDetailsResponse $feeDetails
     * @return $this
     */
    public function setFeeDetails($feeDetails)
    {
        $this->feeDetails = $feeDetails;
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
     * @return int
     */
    public function getNet()
    {
        return $this->net;
    }

    /**
     * @param int $net
     * @return $this
     */
    public function setNet($net)
    {
        $this->net = $net;
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
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;
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

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}