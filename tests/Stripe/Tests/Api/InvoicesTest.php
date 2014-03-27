<?php
/**
 * User: Don Gilbert
 * Date: 3/27/2014
 * Time: 9:06 AM
 */

namespace Stripe\Tests\Api;


use Stripe\Api\Invoices;
use Stripe\Response\Invoices\InvoiceResponse;
use Stripe\Tests\StripeTestCase;

class InvoicesTest extends StripeTestCase
{
    /**
     * @var Invoices
     */
    protected $invoices;

    protected function setUp()
    {
        parent::setUp();
        $this->invoices = new Invoices($this->client);
    }

    public function testCreateInvoice()
    {
        $this->markTestIncomplete("Can't complete until InvoiceItems are completed.");

        $request = $this->invoices->createInvoiceRequest('cus_3kB8eDAq7nCO0P');
        $invoice = $this->invoices->createInvoice($request);

        $this->assertInstanceOf('Stripe\\Response\\Invoices\\InvoiceResponse', $invoice);
    }

    public function testGetInvoice()
    {
        $invoice = $this->invoices->getInvoice('in_103kBJ2eZvKYlo2CHhxDPH2k');
        $this->assertInstanceOf('Stripe\\Response\\Invoices\\InvoiceResponse', $invoice);
    }

    public function testUpdateInvoice()
    {
        $this->markTestIncomplete("Can't complete until InvoiceItems are completed.");

        $request = $this->invoices->createInvoiceRequest('cus_3kB8eDAq7nCO0P');
        $invoice = $this->invoices->createInvoice($request);

        $updatedInvoice = $this->invoices->updateInvoice($invoice->getId(), null, false, 'Updated Description', array('updated' => 'metadata'));
        $this->assertInstanceOf('Stripe\\Response\\Invoices\\InvoiceResponse', $updatedInvoice);

        $this->assertEquals(null, $updatedInvoice->getApplicationFee());
        $this->assertEquals(true, $updatedInvoice->getClosed());
        $this->assertEquals('Updated Description', $updatedInvoice->getDescription());
        $this->assertEquals(array('updated' => 'metadata'), $updatedInvoice->getMetadata());
    }

    public function testPayInvoice()
    {
        $this->markTestIncomplete("Can't complete until InvoiceItems are completed.");
    }

    public function testListInvoices()
    {
        $invoices = $this->invoices->listInvoices();
        $this->assertInstanceOf('Stripe\\Response\\Invoices\\ListInvoicesResponse', $invoices);
    }

    public function testListInvoiceLineItems()
    {
        $this->markTestIncomplete("Can't complete until InvoiceItems are completed.");
    }

    public function testGetUpcomingInvoice()
    {
        $this->markTestIncomplete("Can't complete until InvoiceItems are completed.");

        $invoices = $this->invoices->getUpcomingInvoice('cus_3kB8eDAq7nCO0P');
        $this->assertInstanceOf('Stripe\\Response\\Invoices\\ListInvoiceItemsResponse', $invoices);
    }
}
