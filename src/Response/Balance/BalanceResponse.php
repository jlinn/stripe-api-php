<?php
/**
 * User: Joe Linn
 * Date: 3/30/2014
 * Time: 12:39 PM
 */

namespace Stripe\Response\Balance;

use JMS\Serializer\Annotation\Type;

class BalanceResponse
{
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
     * @Type("array")
     * @var array
     */
    protected $available;

    /**
     * @Type("array")
     * @var array
     */
    protected $pending;

    /**
     * @return array
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * @param array $available
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->available = $available;
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
     * @return array
     */
    public function getPending()
    {
        return $this->pending;
    }

    /**
     * @param array $pending
     * @return $this
     */
    public function setPending($pending)
    {
        $this->pending = $pending;
        return $this;
    }
}