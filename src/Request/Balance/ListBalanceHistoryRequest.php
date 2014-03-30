<?php
/**
 * User: Joe Linn
 * Date: 3/30/2014
 * Time: 2:09 PM
 */

namespace Stripe\Request\Balance;


class ListBalanceHistoryRequest
{
    /**
     * @var string|array
     */
    protected $availableOn;

    /**
     * @var string|array
     */
    protected $created;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var int
     */
    protected $limit;

    /**
     * @var string
     */
    protected $source;

    /**
     * @var string
     */
    protected $startingAfter;

    /**
     * @var string
     */
    protected $transfer;

    /**
     * @var string
     */
    protected $type;

    /**
     * @return array|string
     */
    public function getAvailableOn()
    {
        return $this->availableOn;
    }

    /**
     * @param array|string $availableOn
     * @return $this
     */
    public function setAvailableOn($availableOn)
    {
        $this->availableOn = $availableOn;
        return $this;
    }

    /**
     * @return array|string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param array|string $created
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
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
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
    public function getStartingAfter()
    {
        return $this->startingAfter;
    }

    /**
     * @param string $startingAfter
     * @return $this
     */
    public function setStartingAfter($startingAfter)
    {
        $this->startingAfter = $startingAfter;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransfer()
    {
        return $this->transfer;
    }

    /**
     * @param string $transfer
     * @return $this
     */
    public function setTransfer($transfer)
    {
        $this->transfer = $transfer;
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