<?php
/**
 * User: Don Gilbert
 * Date: 3/27/2014
 * Time: 9:06 AM
 */

namespace Stripe\Response\Invoices;

use JMS\Serializer\Annotation\Type;
use Stripe\Response\AbstractListResponse;

class ListInvoicesResponse extends AbstractListResponse
{
    /**
     * @Type("array<Stripe\Response\Invoices\InvoiceResponse>")
     * @var InvoiceResponse[]
     */
    protected $data;

    /**
     * @return InvoiceResponse[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param InvoiceResponse[] $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
}
