<?php
/**
 * User: Joe Linn
 * Date: 3/29/2014
 * Time: 10:14 PM
 */

namespace Stripe\Response\Transfers;

use JMS\Serializer\Annotation\Type;
use Stripe\Response\AbstractListResponse;

class ListTransfersResponse extends AbstractListResponse
{
    /**
     * @Type("array<Stripe\Response\Transfers\TransferResponse>")
     * @var TransferResponse[]
     */
    protected $data;

    /**
     * @return TransferResponse[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param TransferResponse[] $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
}