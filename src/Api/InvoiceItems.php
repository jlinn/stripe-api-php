<?php
/**
 * User: Joe Linn
 * Date: 3/27/2014
 * Time: 10:20 PM
 */

namespace Stripe\Api;


use Stripe\Request\InvoiceItems\CreateInvoiceItemRequest;
use Stripe\Request\InvoiceItems\ListInvoiceItemsRequest;
use Stripe\Response\DeleteResponse;
use Stripe\Response\InvoiceItems\InvoiceItemResponse;
use Stripe\Response\InvoiceItems\ListInvoiceItemsResponse;

class InvoiceItems extends AbstractApi
{
    const INVOICE_ITEM_RESPONSE_CLASS = 'Stripe\Response\InvoiceItems\InvoiceItemResponse';
    const LIST_INVOICE_ITEMS_RESPONSE_CLASS = 'Stripe\Response\InvoiceItems\ListInvoiceItemsResponse';

    /**
     * @param CreateInvoiceItemRequest $request
     * @return InvoiceItemResponse
     * @link https://stripe.com/docs/api#create_invoiceitem
     */
    public function createInvoiceItem(CreateInvoiceItemRequest $request)
    {
        return $this->client->post($this->buildUrl(), self::INVOICE_ITEM_RESPONSE_CLASS, $request);
    }

    /**
     * @param string $invoiceItemId
     * @return InvoiceItemResponse
     * @link https://stripe.com/docs/api#retrieve_invoiceitem
     */
    public function getInvoiceItem($invoiceItemId)
    {
        return $this->client->get($this->buildUrl($invoiceItemId), self::INVOICE_ITEM_RESPONSE_CLASS);
    }

    /**
     * @param string $invoiceItemId
     * @param int $amount
     * @param string $description
     * @param array $metadata
     * @return InvoiceItemResponse
     * @link https://stripe.com/docs/api#update_invoiceitem
     */
    public function updateInvoiceItem($invoiceItemId, $amount = null, $description = null, array $metadata = null)
    {
        $request = array();
        if (!is_null($amount)) {
            $request['amount'] = $amount;
        }
        if (!is_null($description)) {
            $request['description'] = $description;
        }
        if (!is_null($metadata)) {
            $request['metadata'] = $metadata;
        }
        return $this->client->post($this->buildUrl($invoiceItemId), self::INVOICE_ITEM_RESPONSE_CLASS, $request);
    }

    /**
     * @param string $invoiceItemId
     * @return DeleteResponse
     * @link https://stripe.com/docs/api#delete_invoiceitem
     */
    public function deleteInvoiceItem($invoiceItemId)
    {
        return $this->client->delete($this->buildUrl($invoiceItemId), self::DELETE_RESPONSE_CLASS);
    }

    /**
     * @param ListInvoiceItemsRequest $request
     * @return ListInvoiceItemsResponse
     * @link https://stripe.com/docs/api#list_invoiceitems
     */
    public function listInvoiceItems(ListInvoiceItemsRequest $request = null)
    {
        return $this->client->get($this->buildUrl(), self::LIST_INVOICE_ITEMS_RESPONSE_CLASS, null, $this->listRequestToParams($request));
    }

    /**
     * @param string $customer
     * @param int $amount
     * @param string $currency
     * @return CreateInvoiceItemRequest
     */
    public function createInvoiceItemRequest($customer, $amount, $currency)
    {
        return new CreateInvoiceItemRequest($customer, $amount, $currency);
    }

    /**
     * @param string $invoiceItemId
     * @return string
     */
    protected function buildUrl($invoiceItemId = null)
    {
        $url = 'invoiceitems';
        if (!is_null($invoiceItemId)) {
            $url .= '/' . $invoiceItemId;
        }
        return $url;
    }
} 