<?php

namespace Stripe\Response\Accounts;


use JMS\Serializer\Annotation\Type;
use Stripe\Response\AbstractListResponse;

class ListAccountsResponse extends AbstractListResponse
{
    /**
     * @Type("array<Stripe\Response\Accounts\AccountResponse>")
     * @var AccountResponse[]
     */
    protected $data;

    /**
     * @return AccountResponse[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param AccountResponse[] $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
}