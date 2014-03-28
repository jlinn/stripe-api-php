<?php
/**
 * User: Joe Linn
 * Date: 3/21/2014
 * Time: 12:13 PM
 */

namespace Stripe\Response\Plans;

use JMS\Serializer\Annotation\Type;

class PlanResponse
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
    protected $interval;

    /**
     * @Type("integer")
     * @var int
     */
    protected $intervalCount;

    /**
     * @Type("string")
     * @var string
     */
    protected $name;

    /**
     * @Type("array")
     * @var array
     */
    protected $metadata;

    /**
     * @Type("integer")
     * @var int
     */
    protected $trialPeriodDays;

    /**
     * @Type("string")
     * @var string
     */
    protected $statementDescription;

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