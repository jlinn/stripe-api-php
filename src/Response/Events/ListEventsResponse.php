<?php
/**
 * User: Joe Linn
 * Date: 3/31/2014
 * Time: 6:27 PM
 */

namespace Stripe\Response\Events;

use JMS\Serializer\Annotation\Type;
use Stripe\Response\AbstractListResponse;

class ListEventsResponse extends AbstractListResponse
{
    /**
     * @Type("array<Stripe\Response\Events\EventResponse>")
     * @var EventResponse[]
     */
    protected $data;

    /**
     * @return EventResponse[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param EventResponse[] $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
}