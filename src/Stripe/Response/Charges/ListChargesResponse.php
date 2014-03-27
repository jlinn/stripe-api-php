<?php
/**
 * User: Joe Linn
 * Date: 3/26/2014
 * Time: 11:07 PM
 */

namespace Stripe\Response\Charges;


use JMS\Serializer\Annotation\Type;
use Stripe\Response\AbstractListResponse;

class ListChargesResponse extends AbstractListResponse
{
    /**
     * @Type("Stripe\Response\Charges\ChargeResponse")
     * @var ChargeResponse[]
     */
    protected $data;

    /**
     * @return ChargeResponse[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param ChargeResponse[] $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
}