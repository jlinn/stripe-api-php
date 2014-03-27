<?php
/**
 * User: Don Gilbert
 * Date: 3/27/2014
 * Time: 9:06 AM
 */

namespace Stripe\Tests\Api;


use Stripe\Api\Invoices;
use Stripe\Request\Invoices\CreateInvoiceRequest;
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
}
