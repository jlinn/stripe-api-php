<?php
/**
 * User: Joe Linn
 * Date: 1/27/2015
 * Time: 8:48 PM
 */

namespace Stripe\Request\ApplicationFees;


use Stripe\Request\ListRequest;

class ListApplicationFeesRequest extends ListRequest
{
    /**
     * @var string
     */
    protected $charge;

    /**
     * @return string
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * @param string $charge
     * @return $this
     */
    public function setCharge($charge)
    {
        $this->charge = $charge;
        return $this;
    }

    /**
     * @return array
     */
    public function toParams()
    {
        $params = parent::toParams();
        if (!is_null($this->charge)) {
            $params["charge"] = $this->charge;
        }
        return $params;
    }
}