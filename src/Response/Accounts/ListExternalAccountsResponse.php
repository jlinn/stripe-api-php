<?php

namespace Stripe\Response\Accounts;

use JMS\Serializer\Annotation\Type;
use Stripe\Response\AbstractListResponse;

class ListExternalAccountsResponse extends AbstractListResponse
{
    /**
     * @Type("array<Stripe\Response\Accounts\ExternalAccountResponse>")
     * @var ExternalAccountResponse[]
     */
    protected $data;

    /**
     * @return ExternalAccountResponse[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param ExternalAccountResponse[] $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
} 