<?php
/**
 * User: Joe Linn
 * Date: 3/28/2014
 * Time: 9:03 PM
 */

namespace Stripe\Response\Coupons;


use JMS\Serializer\Annotation\Type;
use Stripe\Response\AbstractListResponse;

class ListCouponsResponse extends AbstractListResponse
{
    /**
     * @Type("array<Stripe\Response\Coupons\ListCouponsResponse>")
     * @var CouponResponse[]
     */
    protected $data;

    /**
     * @return CouponResponse[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param CouponResponse[] $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
}