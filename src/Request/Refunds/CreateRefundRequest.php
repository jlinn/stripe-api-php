<?php
/**
 * User: Joe Linn
 * Date: 7/28/2014
 * Time: 3:13 PM
 */

namespace Stripe\Request\Refunds;


class CreateRefundRequest
{
    /**
     * @var int
     */
    protected $amount;

    /**
     * @var bool
     */
    protected $refundApplicationFee;

    /**
     * @var array
     */
    protected $metadata;

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
     * @param array $metadata
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;
        return $this;
    }

    /**
     * @param boolean $refundApplicationFee
     * @return $this
     */
    public function setRefundApplicationFee($refundApplicationFee)
    {
        $this->refundApplicationFee = $refundApplicationFee;
        return $this;
    }
}