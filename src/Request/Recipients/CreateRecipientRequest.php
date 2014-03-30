<?php
/**
 * User: Joe Linn
 * Date: 3/29/2014
 * Time: 6:22 PM
 */

namespace Stripe\Request\Recipients;


class CreateRecipientRequest extends UpdateRecipientRequest
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @param string $name
     * @param string $type
     */
    public function __construct($name, $type)
    {
        $this->setName($name)->setType($type);
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
}