<?php
/**
 * User: Joe Linn
 * Date: 3/21/2014
 * Time: 3:40 PM
 */

namespace Stripe\Response\Subscriptions;


use JMS\Serializer\Annotation\Type;
use Stripe\Response\AbstractListResponse;

class ListSubscriptionsResponse extends AbstractListResponse
{
    /**
     * @Type("array<Stripe\Response\Subscriptions\SubscriptionResponse>")
     * @var SubscriptionResponse[]
     */
    protected $data;

    /**
     * @return SubscriptionResponse[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param SubscriptionResponse[] $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
}