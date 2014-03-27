<?php
/**
 * User: Joe Linn
 * Date: 3/24/2014
 * Time: 1:01 PM
 */

namespace Stripe\Tests;


use Stripe\Stripe;

class StripeTest extends \PHPUnit_Framework_TestCase
{
    public function testGetApi()
    {
        $stripe = new Stripe("key");
        $cards = $stripe->cards();
        $this->assertInstanceOf('Stripe\Api\Cards', $cards);

        $customers = $stripe->customers;
        $this->assertInstanceOf('Stripe\Api\Customers', $customers);
    }
}
