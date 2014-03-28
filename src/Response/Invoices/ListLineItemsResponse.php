<?php
/**
 * User: Don Gilbert
 * Date: 3/27/2014
 * Time: 9:06 AM
 */

namespace Stripe\Response\Invoices;

use JMS\Serializer\Annotation\Type;
use Stripe\Response\AbstractListResponse;

class ListLineItemsResponse extends AbstractListResponse
{
    /**
     * @Type("array<Stripe\Response\Invoices\LineItemResponse>")
     * @var LineItemResponse[]
     */
    protected $data;

    /**
     * @return LineItemResponse[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param LineItemResponse[] $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
}
