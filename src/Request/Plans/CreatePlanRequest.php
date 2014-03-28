<?php
/**
 * User: Joe Linn
 * Date: 3/21/2014
 * Time: 12:08 PM
 */

namespace Stripe\Request\Plans;


class CreatePlanRequest
{
    /**
     * @var string
     */
    protected $id;

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
    protected $interval;

    /**
     * @var int
     */
    protected $intervalCount;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $trialPeriodDays;

    /**
     * @var array
     */
    protected $metadata;

    /**
     * @var string
     */
    protected $statementDescription;

    /**
     * @param string $id
     * @param int $amount
     * @param string $currency
     * @param int $interval
     * @param string $name
     */
    public function __construct($id, $amount, $currency, $interval, $name)
    {
        $this->setId($id)->setAmount($amount);
        $this->setCurrency($currency)->setInterval($interval);
        $this->setName($name);
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
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * @param string $interval
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->interval = $interval;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntervalCount()
    {
        return $this->intervalCount;
    }

    /**
     * @param int $intervalCount
     * @return $this
     */
    public function setIntervalCount($intervalCount)
    {
        $this->intervalCount = $intervalCount;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return int
     */
    public function getTrialPeriodDays()
    {
        return $this->trialPeriodDays;
    }

    /**
     * @param int $trialPeriodDays
     * @return $this
     */
    public function setTrialPeriodDays($trialPeriodDays)
    {
        $this->trialPeriodDays = $trialPeriodDays;
        return $this;
    }


}