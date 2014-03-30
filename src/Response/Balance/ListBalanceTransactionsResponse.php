<?php
/**
 * User: Joe Linn
 * Date: 3/30/2014
 * Time: 1:47 PM
 */

namespace Stripe\Response\Balance;


use JMS\Serializer\Annotation\Type;
use Stripe\Response\AbstractListResponse;

class ListBalanceTransactionsResponse extends AbstractListResponse
{
    /**
     * @Type("array<Stripe\Response\Balance\BalanceTransactionResponse>")
     * @var BalanceTransactionResponse[]
     */
    protected $data;

    /**
     * @return BalanceTransactionResponse[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param BalanceTransactionResponse[] $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
}