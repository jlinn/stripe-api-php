<?php
/**
 * User: Don Gilbert
 * Date: 3/27/2014
 * Time: 4:50 PM
 */

namespace Stripe\Tests\Api;


use Stripe\Api\Accounts;
use Stripe\Tests\StripeTestCase;

class CardsTest extends StripeTestCase
{
    /**
     * @var Accounts
     */
    protected $accounts;

    /**
     * @var string
     */
    protected $customerId;

    protected function setUp()
    {
        parent::setUp();
        $this->accounts = new Accounts($this->client);
    }

    public function testGetAccount()
    {
        $account = $this->accounts->getAccount();
        $this->assertInstanceOf(Accounts::ACCOUNT_RESPONSE_CLASS, $account);
    }
}
