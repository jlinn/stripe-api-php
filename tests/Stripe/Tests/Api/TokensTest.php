<?php
/**
 * User: Don Gilbert
 * Date: 3/27/2014
 * Time: 4:50 PM
 */

namespace Stripe\Tests\Api;


use Stripe\Api\Tokens;
use Stripe\Tests\StripeTestCase;

class TokensTest extends StripeTestCase
{
    /**
     * @var Tokens
     */
    protected $tokens;

    /**
     * @var string
     */
    protected $customerId;

    protected function setUp()
    {
        parent::setUp();
        $this->tokens = new Tokens($this->client);
    }
}
