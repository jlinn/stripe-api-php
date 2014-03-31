<?php
/**
 * User: Joe Linn
 * Date: 3/30/2014
 * Time: 6:52 PM
 */

namespace Stripe\Response\ApplicationFees;


use Stripe\Response\AbstractListResponse;
use JMS\Serializer\Annotation\Type;

class ListApplicationFeesResponse extends AbstractListResponse{
    /**
     * @Type("array<Stripe\Response\ApplicationFees\ApplicationFeeResponse>")
     * @var ApplicationFeeResponse[]
     */
    protected $data;

    /**
     * @return ApplicationFeeResponse[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param ApplicationFeeResponse[] $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
}