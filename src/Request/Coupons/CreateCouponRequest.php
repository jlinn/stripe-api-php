<?php
/**
 * User: Joe Linn
 * Date: 3/28/2014
 * Time: 8:54 PM
 */

namespace Stripe\Request\Coupons;


class CreateCouponRequest
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $duration;

    /**
     * @var int
     */
    protected $amountOff;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var int
     */
    protected $durationInMonths;

    /**
     * @var int
     */
    protected $maxRedemptions;

    /**
     * @var array
     */
    protected $metadata;

    /**
     * @var int
     */
    protected $percentOff;

    /**
     * @var int
     */
    protected $redeemBy;

    /**
     * @param string $duration
     */
    public function __construct($duration)
    {
        $this->setDuration($duration);
    }

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
}