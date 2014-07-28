<?php
/**
 * User: Joe Linn
 * Date: 7/28/2014
 * Time: 12:56 PM
 */

namespace Stripe\Response\Refunds;


use JMS\Serializer\Annotation\Type;
use Stripe\Response\AbstractListResponse;

class ListRefundsResponse extends AbstractListResponse{
    /**
     * @Type("Stripe\Response\Refunds\RefundResponse")
     * @var RefundResponse[]
     */
    protected $data;

    /**
     * @return RefundResponse[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param RefundResponse[] $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
} 