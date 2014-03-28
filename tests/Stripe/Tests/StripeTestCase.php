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
    const VISA_2 = "4012888888881881";
    const MASTERCARD_1 = "5555555555554444";
    const MASTERCARD_2 = "5105105105105100";
    const AMEX_1 = "378282246310005";
    const AMEX_2 = "371449635398431";
    const DISCOVER_1 = "6011111111111117";
    const DISCOVER_2 = "6011000990139424";
    const DINERS_CLUB_1 = "30569309025904";
    const DINERS_CLUB_2 = "38520000023237";
    const JCB_1 = "3530111333300000";
    const JCB_2 = "3566002020360505";

    const ROUTING_NUMBER = "110000000";
    const ACCOUNT_NUMBER = "000123456789";

    const CARD_DECLINED = "4000000000000002";
    const INCORRECT_NUMBER = "4242424242424241";
    const EXPIRED_CARD = "4000000000000069";
    const PROCESSING_ERROR = "4000000000000119";

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
