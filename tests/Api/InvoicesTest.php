<?php
/**
 * User: Don Gilbert
 * Date: 3/27/2014
 * Time: 9:06 AM
 */

namespace Stripe\Tests\Api;


use Stripe\Api\Customers;
use Stripe\Api\Invoices;
use Stripe\Request\Cards\CreateCardRequest;
use Stripe\Request\ListRequest;
use Stripe\Tests\StripeTestCase;

class InvoicesTest extends StripeTestCase
{
    /**
     * @var Invoices
     */
    protected $invoices;

    /**
     * @var Customers
     */
    protected $customers;

    /**
     * @var string
     */
    protected $customerId;

    protected function setUp()
    {
        parent::setUp();
        $this->invoices = new Invoices($this->client);
        $this->customers = new Customers($this->client);
        $customerRequest = $this->customers->createCustomerRequest()->setCard(new CreateCardRequest(self::VISA_1, 1, 2020, 123));
        $this->customerId = $this->customers->createCustomer($customerRequest)->getId();
    }

    protected function tearDown()
    {
        parent::tearDown();
        $this->customers->deleteCustomer($this->customerId);
    }


    public function testCreateInvoice()
    {
        $this->client->post('invoiceitems', null, array('customer' => $this->customerId, 'amount' => 350, 'currency' => 'usd'));
        $request = $this->invoices->createInvoiceRequest($this->customerId);
        $invoice = $this->invoices->createInvoice($request);

        $this->assertInstanceOf(Invoices::INVOICE_RESPONSE_CLASS, $invoice);
    }

    public function testGetInvoice()
    {
        $this->client->post('invoiceitems', null, array('customer' => $this->customerId, 'amount' => 350, 'currency' => 'usd'));

        $request = $this->invoices->createInvoiceRequest($this->customerId);
        $createResponse = $this->invoices->createInvoice($request);

        $this->assertInstanceOf(Invoices::INVOICE_RESPONSE_CLASS, $createResponse);

        $invoice = $this->invoices->getInvoice($createResponse->getId());
        $this->assertInstanceOf(Invoices::INVOICE_RESPONSE_CLASS, $invoice);
    }

    public function testUpdateInvoice()
    {
        $this->client->post('invoiceitems', null, array('customer' => $this->customerId, 'amount' => 350, 'currency' => 'usd'));

        $request = $this->invoices->createInvoiceRequest($this->customerId);
        $invoice = $this->invoices->createInvoice($request);

        $updatedInvoice = $this->invoices->updateInvoice($invoice->getId(), null, false, 'Updated Description', array('updated' => 'metadata'));
        $this->assertInstanceOf(Invoices::INVOICE_RESPONSE_CLASS, $updatedInvoice);

        $this->assertEquals(null, $updatedInvoice->getApplicationFee());
        $this->assertEquals(false, $updatedInvoice->getClosed());
        $this->assertEquals('Updated Description', $updatedInvoice->getDescription());
        $this->assertEquals(array('updated' => 'metadata'), $updatedInvoice->getMetadata());
    }

    public function testPayInvoice()
    {
        $this->client->post('invoiceitems', null, array('customer' => $this->customerId, 'amount' => 350, 'currency' => 'usd'));

        $request = $this->invoices->createInvoiceRequest($this->customerId);
        $invoice = $this->invoices->createInvoice($request);

        $payResponse = $this->invoices->payInvoice($invoice->getId());

        $this->assertInstanceOf(Invoices::INVOICE_RESPONSE_CLASS, $payResponse);
    }

    public function testListInvoices()
    {
        $request = new ListRequest();
        $request->setLimit(1);
        $invoices = $this->invoices->listInvoices($request);

        $this->assertInstanceOf('Stripe\\Response\\Invoices\\ListInvoicesResponse', $invoices);
        $this->assertEquals(1, sizeof($invoices->getData()));
    }

    public function testListInvoiceLineItems()
    {
        $this->client->post('invoiceitems', null, array('customer' => $this->customerId, 'amount' => 350, 'currency' => 'usd'));

        $request = $this->invoices->createInvoiceRequest($this->customerId);
        $invoice = $this->invoices->createInvoice($request);

        $lineItemsResponse = $this->invoices->listInvoiceLineItems($invoice->getId());

        $this->assertInstanceOf('Stripe\Response\Invoices\ListLineItemsResponse', $lineItemsResponse);
    }

    public function testGetUpcomingInvoice()
    {
        $this->client->post('invoiceitems', null, array('customer' => $this->customerId, 'amount' => 350, 'currency' => 'usd'));

        $invoices = $this->invoices->getUpcomingInvoice($this->customerId);
        $this->assertInstanceOf(Invoices::INVOICE_RESPONSE_CLASS, $invoices);
    }
}
