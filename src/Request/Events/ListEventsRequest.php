<?php
/**
 * User: Joe Linn
 * Date: 1/28/2015
 * Time: 7:13 PM
 */

namespace Stripe\Request\Events;


use Stripe\Request\ListRequest;

class ListEventsRequest extends ListRequest
{
    /**
     * @var string
     */
    protected $type;

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
        if (!is_null($this->type)) {
            $params["type"] = $this->type;
        }
        return $params;
    }
}