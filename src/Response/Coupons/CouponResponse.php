<?php
/**
 * User: Joe Linn
 * Date: 3/21/2014
 * Time: 2:32 PM
 */

namespace Stripe\Response\Coupons;

use JMS\Serializer\Annotation\Type;

class CouponResponse
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
    protected $created;

    /**
     * @Type("string")
     * @var string
     */
    protected $duration;

    /**
     * @Type("integer")
     * @var int
     */
    protected $amountOff;

    /**
     * @Type("string")
     * @var string
     */
    protected $currency;

    /**
     * @Type("integer")
     * @var int
     */
    protected $durationInMonths;

    /**
     * @Type("integer")
     * @var int
     */
    protected $maxRedemptions;

    /**
     * @Type("array")
     * @var array
     */
    protected $metadata;

    /**
     * @Type("integer")
     * @var int
     */
    protected $percentOff;

    /**
     * @Type("integer")
     * @var int
     */
    protected $redeemBy;

    /**
     * @Type("integer")
     * @var int
     */
    protected $linesRedeemed;

    /**
     * @Type("boolean")
     * @var bool
     */
    protected $valid;

    /**
     * @return int
     */
    public function getAmountOff()
    {
        return $this->amountOff;
    }

    /**
     * @param int $amountOff
     * @return $this
     */
    public function setAmountOff($amountOff)
    {
        $this->amountOff = $amountOff;
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
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param string $duration
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return int
     */
    public function getDurationInMonths()
    {
        return $this->durationInMonths;
    }

    /**
     * @param int $durationInMonths
     * @return $this
     */
    public function setDurationInMonths($durationInMonths)
    {
        $this->durationInMonths = $durationInMonths;
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
    public function getLinesRedeemed()
    {
        return $this->linesRedeemed;
    }

    /**
     * @param int $linesRedeemed
     * @return $this
     */
    public function setLinesRedeemed($linesRedeemed)
    {
        $this->linesRedeemed = $linesRedeemed;
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
     * @return int
     */
    public function getMaxRedemptions()
    {
        return $this->maxRedemptions;
    }

    /**
     * @param int $maxRedemptions
     * @return $this
     */
    public function setMaxRedemptions($maxRedemptions)
    {
        $this->maxRedemptions = $maxRedemptions;
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
     * @return int
     */
    public function getPercentOff()
    {
        return $this->percentOff;
    }

    /**
     * @param int $percentOff
     * @return $this
     */
    public function setPercentOff($percentOff)
    {
        $this->percentOff = $percentOff;
        return $this;
    }

    /**
     * @return int
     */
    public function getRedeemBy()
    {
        return $this->redeemBy;
    }

    /**
     * @param int $redeemBy
     * @return $this
     */
    public function setRedeemBy($redeemBy)
    {
        $this->redeemBy = $redeemBy;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getValid()
    {
        return $this->valid;
    }

    /**
     * @param boolean $valid
     * @return $this
     */
    public function setValid($valid)
    {
        $this->valid = $valid;
        return $this;
    }


} 