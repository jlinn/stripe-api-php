<?php
/**
 * User: Joe Linn
 * Date: 1/30/2015
 * Time: 5:54 PM
 */

namespace Stripe\Request\Recipients;


use Stripe\Request\ListRequest;

class ListRecipientsRequest extends ListRequest
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @var bool
     */
    protected $verified;

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
     * @return boolean
     */
    public function isVerified()
    {
        return $this->verified;
    }

    /**
     * @param boolean $verified
     * @return $this
     */
    public function setVerified($verified)
    {
        $this->verified = $verified;
        return $this;
    }

    /**
     * @return array
     */
    public function toParams()
    {
        $params = parent::toParams();
        if (!is_nan($this->type)) {
            $params["type"] = $this->type;
        }
        if (!is_null($this->verified)) {
            $params["verified"] = $this->verified;
        }
        return $params;
    }
}