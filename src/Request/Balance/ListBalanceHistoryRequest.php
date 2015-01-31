<?php
/**
 * User: Joe Linn
 * Date: 3/30/2014
 * Time: 2:09 PM
 */

namespace Stripe\Request\Balance;


use Stripe\Request\ListRequest;

class ListBalanceHistoryRequest extends ListRequest
{
    /**
     * @var string|AvailableOn
     */
    protected $availableOn;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var string
     */
    protected $source;

    /**
     * @var string
     */
    protected $transfer;

    /**
     * @var string
     */
    protected $type;

    /**
     * @return AvailableOn|string
     */
    public function getAvailableOn()
    {
        return $this->availableOn;
    }

    /**
     * @param AvailableOn|string $availableOn
     * @return $this
     */
    public function setAvailableOn($availableOn)
    {
        $this->availableOn = $availableOn;
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

    /**
     * @return array
     */
    public function toParams()
    {
        $params = parent::toParams();
        if (!is_null($this->availableOn)) {
            if ($this->availableOn instanceof AvailableOn) {
                $params = array_merge($params, $this->availableOn->toParams());
            } else {
                $params["available_on"] = $this->availableOn;
            }
        }
        if (!is_null($this->currency)) {
            $params["currency"] = $this->currency;
        }
        if (!is_null($this->source)) {
            $params["source"] = $this->source;
        }
        if (!is_null($this->transfer)) {
            $params["transfer"] = $this->transfer;
        }
        if (!is_null($this->type)) {
            $params["type"] = $this->type;
        }
        return $params;
    }
}