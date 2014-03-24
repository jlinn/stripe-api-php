<?php
/**
 * User: Joe Linn
 * Date: 3/21/2014
 * Time: 12:24 PM
 */

namespace Stripe\Response;

use JMS\Serializer\Annotation\Type;

abstract class AbstractListResponse
{
    /**
     * @Type("string")
     * @var string
     */
    protected $object;

    /**
     * @Type("string")
     * @var string
     */
    protected $url;

    /**
     * @Type("integer")
     * @var int
     */
    protected $count;

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param int $count
     * @return $this
     */
    public function setCount($count)
    {
        $this->count = $count;
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
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }


} 