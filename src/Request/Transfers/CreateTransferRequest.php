<?php
/**
 * User: Joe Linn
 * Date: 3/29/2014
 * Time: 10:16 PM
 */

namespace Stripe\Request\Transfers;


class CreateTransferRequest
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
    protected $recipient;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $statementDescription;

    /**
     * @var array
     */
    protected $metadata;

    /**
     * @param int $amount
     * @param string $currency
     * @param string $recipient
     */
    public function __construct($amount, $currency, $recipient)
    {
        $this->setAmount($amount)->setCurrency($currency);
        $this->setRecipient($recipient);
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
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @param string $recipient
     * @return $this
     */
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;
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