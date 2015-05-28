<?php
/**
 * User: Don Gilbert
 * Date: 3/27/2014
 * Time: 9:06 AM
 */

namespace Stripe\Api;


use Stripe\Request\Invoices\CreateInvoiceRequest;
use Stripe\Request\ListRequest;
use Stripe\Response\Invoices\InvoiceResponse;
use Stripe\Response\Invoices\ListInvoicesResponse;
use Stripe\Response\Invoices\ListLineItemsResponse;

class Invoices extends AbstractApi
{
    const INVOICE_RESPONSE_CLASS = 'Stripe\Response\Invoices\InvoiceResponse';

    /**
     * @param CreateInvoiceRequest $request
     * @return InvoiceResponse
     * @link https://stripe.com/docs/api/curl#create_plan
     */
    public function createInvoice(CreateInvoiceRequest $request)
    {
        return $this->client->post('invoices', self::INVOICE_RESPONSE_CLASS, $request);
    }

    /**
     * @param string $invoiceId
     * @return InvoiceResponse
     * @link https://stripe.com/docs/api/curl#retrieve_plan
     */
    public function getInvoice($invoiceId)
    {
        return $this->client->get('invoices/' . $invoiceId, self::INVOICE_RESPONSE_CLASS);
    }

    /**
     * @param string $invoiceId
     * @param string $applicationFee
     * @param bool $closed
     * @param string $description
     * @param array $metadata
     * @param float $taxPercent
     * @return InvoiceResponse
     * @link https://stripe.com/docs/api/curl#update_plan
     */
    public function updateInvoice($invoiceId, $applicationFee = null, $closed = null, $description = null, $metadata = null, $taxPercent = null)
    {
        $data = array();
        if (!is_null($applicationFee)) {
            $data['application_fee'] = $applicationFee;
        }
        if (!is_null($closed)) {
            $data['closed'] = $closed;
        }
        if (!is_null($description)) {
            $data['description'] = $description;
        }
        if (!is_null($metadata)) {
            $data['metadata'] = $metadata;
        }
        if (!is_null($taxPercent)) {
            $data["tax_percent"] = $taxPercent;
        }
        return $this->client->post('invoices/' . $invoiceId, self::INVOICE_RESPONSE_CLASS, $data);
    }

    /**
     * @param string $invoiceId
     * @return InvoiceResponse
     * @link https://stripe.com/docs/api/curl#delete_plan
     */
    public function payInvoice($invoiceId)
    {
        return $this->client->post('invoices/' . $invoiceId . '/pay', self::INVOICE_RESPONSE_CLASS);
    }

    /**
     * @param ListRequest $request
     * @return ListInvoicesResponse
     * @link https://stripe.com/docs/api/curl#list_plans
     */
    public function listInvoices(ListRequest $request = null)
    {
        return $this->client->get('invoices', 'Stripe\Response\Invoices\ListInvoicesResponse', null, $this->listRequestToParams($request));
    }

    /**
     * @param string $invoiceId
     * @param int $count
     * @param int $offset
     * @return mixed
     * @return ListLineItemsResponse
     * @link https://stripe.com/docs/api/curl#invoice_lines
     */
    public function listInvoiceLineItems($invoiceId, $count = 10, $offset = 0)
    {
        return $this->client->get('invoices/' . $invoiceId . '/lines', 'Stripe\Response\Invoices\ListLineItemsResponse', null, array('count' => $count, 'offset' => $offset));
    }

    /**
     * @param string $customer
     * @param string $subscription
     * @return InvoiceResponse
     * @link https://stripe.com/docs/api/curl#retrieve_customer_invoice
     */
    public function getUpcomingInvoice($customer, $subscription = null)
    {
        $data = array('customer' => $customer);
        if (!is_null($subscription)) {
            $data['subscription'] = $subscription;
        }
        return $this->client->get('invoices/upcoming', self::INVOICE_RESPONSE_CLASS, null, $data);
    }

    /**
     * @param string $customer
     * @return CreateInvoiceRequest
     */
    public function createInvoiceRequest($customer)
    {
        return new CreateInvoiceRequest($customer);
    }
}
