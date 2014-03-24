<?php
/**
 * User: Joe Linn
 * Date: 3/20/2014
 * Time: 5:09 PM
 */

namespace Stripe\Response;

use JMS\Serializer\Annotation\Type;

class DeleteResponse
{
    /**
     * @Type("boolean")
     * @var bool
     */
    protected $deleted;

    /**
     * @Type("string")
     * @var string
     */
    protected $id;

    /**
     * @return boolean
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param boolean $deleted
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
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
}