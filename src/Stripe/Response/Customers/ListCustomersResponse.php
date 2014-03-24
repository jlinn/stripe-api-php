<?php
/**
 * User: Joe Linn
 * Date: 3/24/2014
 * Time: 12:05 PM
 */

namespace Stripe\Response\Customers;


use JMS\Serializer\Annotation\Type;
use Stripe\Response\AbstractListResponse;

class ListCustomersResponse extends AbstractListResponse
{
    /**
     * @Type("array<Stripe\Response\Customers\CustomerResponse>")
     * @var CustomerResponse[]
     */
    protected $data;

    /**
     * @return CustomerResponse[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param CustomerResponse[] $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
}