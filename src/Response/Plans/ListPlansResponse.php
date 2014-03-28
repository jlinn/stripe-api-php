<?php
/**
 * User: Joe Linn
 * Date: 3/21/2014
 * Time: 12:26 PM
 */

namespace Stripe\Response\Plans;

use JMS\Serializer\Annotation\Type;
use Stripe\Response\AbstractListResponse;

class ListPlansResponse extends AbstractListResponse
{
    /**
     * @Type("array<Stripe\Response\Plans\PlanResponse>")
     * @var PlanResponse[]
     */
    protected $data;

    /**
     * @return PlanResponse[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param PlanResponse[] $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
}