<?php
/**
 * User: Joe Linn
 * Date: 1/30/2015
 * Time: 6:03 PM
 */

namespace Stripe\Request\Transfers;


use Stripe\Request\ListRequest;

class ListTransfersRequest extends ListRequest
{
    /**
     * @var Date
     */
    protected $date;

    /**
     * @var string
     */
    protected $recipient;

    /**
     * @var string
     */
    protected $status;

    /**
     * @return Date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param Date $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;
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
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return array
     */
    public function toParams()
    {
        $params = parent::toParams();
        if (!is_null($this->date)) {
            $params = array_merge($params, $this->date->toParams());
        }
        if (!is_null($this->recipient)) {
            $params["recipient"] = $this->recipient;
        }
        if (!is_null($this->status)) {
            $params["status"] = $this->status;
        }
        return $params;
    }


}