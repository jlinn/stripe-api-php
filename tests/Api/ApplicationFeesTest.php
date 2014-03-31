<?php
/**
 * User: Joe Linn
 * Date: 3/30/2014
 * Time: 6:59 PM
 */

namespace Stripe\Tests\Api;


use Stripe\Api\ApplicationFees;
use Stripe\Tests\StripeTestCase;

class ApplicationFeesTest extends StripeTestCase
{
    /**
     * @var ApplicationFees
     */
    protected $applicationFees;

    protected function setUp()
    {
        parent::setUp();
        $this->applicationFees = new ApplicationFees($this->client);
    }

    //TODO: test retrieval and refunding of application fees when Stripe Connect has been implemented

    public function testListApplicationFees()
    {
        $list = $this->applicationFees->listApplicationFees();

        $this->assertInstanceOf(ApplicationFees::LIST_APPLICATION_FEES_RESPONSE_CLASS, $list);
    }
}
 