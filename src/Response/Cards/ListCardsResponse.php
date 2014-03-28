<?php
/**
 * User: Joe Linn
 * Date: 3/20/2014
 * Time: 5:20 PM
 */

namespace Stripe\Response\Cards;

use JMS\Serializer\Annotation\Type;
use Stripe\Response\AbstractListResponse;

class ListCardsResponse extends AbstractListResponse
{
    /**
     * @Type("array<Stripe\Response\Cards\CardResponse>")
     * @var CardResponse[]
     */
    protected $data;

    /**
     * @return CardResponse[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param CardResponse[] $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
} 