<?php
/**
 * User: Joe Linn
 * Date: 1/28/2015
 * Time: 9:41 PM
 */

namespace Stripe\Request\InvoiceItems;


use Stripe\Request\ListRequest;

class ListInvoiceItemsRequest extends ListRequest
{
    /**
     * @var string
     */
    protected $customer;

    /**
     * @return string
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param string $customer
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return array
     */
    public function toParams()
    {
        $params = parent::toParams();
        if (!is_null($this->customer)) {
            $params["customer"] = $this->customer;
        }
        return $params;
    }
}