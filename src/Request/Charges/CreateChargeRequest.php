<?php
/**
 * User: Joe Linn
 * Date: 3/26/2014
 * Time: 10:31 PM
 */

namespace Stripe\Request\Charges;


use Stripe\Request\Cards\CreateCardRequest;

class CreateChargeRequest
{
    /**
     * @var int
     */
    protected $amount;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var string
     */
    protected $customer;

    /**
     * @var CreateCardRequest
     */
    protected $card;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var array
     */
    protected $metadata;

    /**
     * @var bool
     */
    protected $capture;

    /**
     * @var string
     */
    protected $statementDescription;

    /**
     * @var int
     */
    protected $applicationFee;

    /**
     * @param int $amount
     * @param string $currency
     */
    public function __construct($amount, $currency)
    {
        $this->setAmount($amount)->setCurrency($currency);
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
    public function getApplicationFee()
    {
        return $this->applicationFee;
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
     * @return boolean
     */
    public function getCapture()
    {
        return $this->capture;
    }

    /**
     * @param boolean $capture
     * @return $this
     */
    public function setCapture($capture)
    {
        $this->capture = $capture;
        return $this;
    }

    /**
     * @return CreateCardRequest
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * @param CreateCardRequest $card
     * @return $this
     */
    public function setCard(CreateCardRequest $card)
    {
        $this->card = $card;
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


} 