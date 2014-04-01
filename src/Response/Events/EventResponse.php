<?php
/**
 * User: Joe Linn
 * Date: 3/31/2014
 * Time: 6:25 PM
 */

namespace Stripe\Response\Events;

use JMS\Serializer\Annotation\Type;

class EventResponse
{
    /**
     * @Type("string")
     * @var string
     */
    protected $id;

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
     * @Type("integer")
     * @var int
     */
    protected $created;

    /**
     * @Type("array")
     * @var array
     */
    protected $data;

    /**
     * @Type("integer")
     * @var int
     */
    protected $pendingWebhooks;

    /**
     * @Type("string")
     * @var string
     */
    protected $type;

    /**
     * @Type("string")
     * @var string
     */
    protected $request;

    /**
     * @return int
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param int $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
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
     * @return int
     */
    public function getPendingWebhooks()
    {
        return $this->pendingWebhooks;
    }

    /**
     * @param int $pendingWebhooks
     * @return $this
     */
    public function setPendingWebhooks($pendingWebhooks)
    {
        $this->pendingWebhooks = $pendingWebhooks;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param string $request
     * @return $this
     */
    public function setRequest($request)
    {
        $this->request = $request;
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
}