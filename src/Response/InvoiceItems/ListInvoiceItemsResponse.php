<?php
/**
 * User: Joe Linn
 * Date: 3/27/2014
 * Time: 10:18 PM
 */

namespace Stripe\Response\InvoiceItems;


use JMS\Serializer\Annotation\Type;
use Stripe\Response\AbstractListResponse;

class ListInvoiceItemsResponse extends AbstractListResponse
{
    /**
     * @Type("array<Stripe\Response\InvoiceItems\InvoiceItemResponse>")
     * @var InvoiceItemResponse[]
     */
    protected $data;

    /**
     * @return InvoiceItemResponse[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param InvoiceItemResponse[] $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
}