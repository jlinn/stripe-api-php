<?php
/**
 * User: Joe Linn
 * Date: 3/29/2014
 * Time: 6:30 PM
 */

namespace Stripe\Response\Recipients;


use JMS\Serializer\Annotation\Type;
use Stripe\Response\AbstractListResponse;

class ListRecipientsResponse extends AbstractListResponse
{
    /**
     * @Type("array<Stripe\Response\Recipients\RecipientResponse>")
     * @var RecipientResponse[]
     */
    protected $data;

    /**
     * @return RecipientResponse[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param RecipientResponse[] $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
}