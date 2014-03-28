<?php
/**
 * User: Joe Linn
 * Date: 3/27/2014
 * Time: 10:35 PM
 */

namespace Stripe\Tests\Api;


use Stripe\Api\Customers;
use Stripe\Api\InvoiceItems;
use Stripe\Tests\StripeTestCase;

class InvoiceItemsTest extends StripeTestCase
{
    /**
     * @var InvoiceItems
     */
    protected $invoiceItems;

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
        $this->invoiceItems = new InvoiceItems($this->client);
        $this->customers = new Customers($this->client);
        $this->customerId = $this->customers->createCustomer()->getId();
    }

    protected function tearDown()
    {
        parent::tearDown();
        $this->customers->deleteCustomer($this->customerId);
    }

    public function testCreateInvoiceItem()
    {
        $request = $this->invoiceItems->createInvoiceItemRequest($this->customerId, 350, "usd");
        $createResponse = $this->invoiceItems->createInvoiceItem($request);

        $this->assertInstanceOf(InvoiceItems::INVOICE_ITEM_RESPONSE_CLASS, $createResponse);
        $this->assertEquals(350, $createResponse->getAmount());
    }

    public function testGetInvoiceItem()
    {
        $request = $this->invoiceItems->createInvoiceItemRequest($this->customerId, 350, "usd");
        $createResponse = $this->invoiceItems->createInvoiceItem($request);

        $this->assertInstanceOf(InvoiceItems::INVOICE_ITEM_RESPONSE_CLASS, $createResponse);

        $getResponse = $this->invoiceItems->getInvoiceItem($createResponse->getId());

        $this->assertInstanceOf(InvoiceItems::INVOICE_ITEM_RESPONSE_CLASS, $getResponse);
        $this->assertEquals($createResponse->getId(), $getResponse->getId());
    }

    public function testUpdateInvoiceItem()
    {
        $request = $this->invoiceItems->createInvoiceItemRequest($this->customerId, 350, "usd");
        $createResponse = $this->invoiceItems->createInvoiceItem($request);

        $this->assertInstanceOf(InvoiceItems::INVOICE_ITEM_RESPONSE_CLASS, $createResponse);

        $updateResponse = $this->invoiceItems->updateInvoiceItem($createResponse->getId(), 500);

        $this->assertInstanceOf(InvoiceItems::INVOICE_ITEM_RESPONSE_CLASS, $updateResponse);
        $this->assertEquals(500, $updateResponse->getAmount());
    }

    public function testDeleteInvoiceItem()
    {
        $request = $this->invoiceItems->createInvoiceItemRequest($this->customerId, 350, "usd");
        $createResponse = $this->invoiceItems->createInvoiceItem($request);

        $this->assertInstanceOf(InvoiceItems::INVOICE_ITEM_RESPONSE_CLASS, $createResponse);

        $deleteResponse = $this->invoiceItems->deleteInvoiceItem($createResponse->getId());

        $this->assertInstanceOf(InvoiceItems::DELETE_RESPONSE_CLASS, $deleteResponse);
        $this->assertTrue($deleteResponse->getDeleted());
        $this->assertEquals($createResponse->getId(), $deleteResponse->getId());
    }

    public function testListInvoiceItems()
    {
        $request = $this->invoiceItems->createInvoiceItemRequest($this->customerId, 350, "usd");
        $createResponse = $this->invoiceItems->createInvoiceItem($request);

        $this->assertInstanceOf(InvoiceItems::INVOICE_ITEM_RESPONSE_CLASS, $createResponse);

        $listResponse = $this->invoiceItems->listInvoiceItems();

        $this->assertInstanceOf(InvoiceItems::LIST_INVOICE_ITEMS_RESPONSE_CLASS, $listResponse);
        $itemFound = false;
        foreach ($listResponse->getData() as $invoiceItem) {
            $this->assertInstanceOf(InvoiceItems::INVOICE_ITEM_RESPONSE_CLASS, $invoiceItem);
            if ($invoiceItem->getId() == $createResponse->getId()) {
                $itemFound = true;
            }
        }
        $this->assertTrue($itemFound);
    }
}
 