<?php
/**
 * User: Joe Linn
 * Date: 3/20/2014
 * Time: 2:56 PM
 */

namespace Stripe\Tests;


use Guzzle\Tests\GuzzleTestCase;
use Stripe\Client;

abstract class StripeTestCase extends GuzzleTestCase
{
    const VISA_1 = "4242424242424242";
    const MASTERCARD_1 = "5555555555554444";

    const CARD_DECLINED = "4000000000000002";
    const INCORRECT_NUMBER = "4242424242424241";

    /**
     * @var Client
     */
    protected $client;

    protected function setUp()
    {
        parent::setUp();
        // the API_KEY value should be set in phpunit.xml
        $this->client = new Client($_SERVER['API_KEY']);
    }
}