<?php
/**
 * User: Don Gilbert
 * Date: 3/27/2014
 * Time: 9:06 AM
 */

namespace Stripe\Response\Invoices;

use JMS\Serializer\Annotation\Type;
use Stripe\Response\Plans\PlanResponse;

class LineItemResponse
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
     * @Type("string")
     * @var string
     */
    protected $currency;

    /**
     * @Type("array")
     * @var array
     */
    protected $period;

    /**
     * @Type("boolean")
     * @var bool
     */
    protected $proration;

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
     * @Type("array")
     * @var array
     */
    protected $metadata;

    /**
     * @Type("Stripe\Response\Plans\PlanResponse")
     * @var PlanResponse|null
     */
    protected $plan;

    /**
     * @Type("integer")
     * @var int
     */
    protected $quantity;

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
    public function getAmount()
    {
        return $this->amount;
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
     * @param array $period
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * @return array
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @param null|PlanResponse $plan
     * @return $this
     */
    public function setPlan($plan)
    {
        $this->plan = $plan;
        return $this;
    }

    /**
     * @return null|PlanResponse
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * @param boolean $proration
     * @return $this
     */
    public function setProration($proration)
    {
        $this->proration = $proration;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getProration()
    {
        return $this->proration;
    }

    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
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

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }


}
