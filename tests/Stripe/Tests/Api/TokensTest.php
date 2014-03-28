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

    public function testGetToken()
    {
        $createRequest = $this->tokens->createCardTokenRequest(self::VISA_1, 1, 2020);
        $createResponse = $this->tokens->createCardToken($createRequest);

        $token = $this->tokens->getToken($createResponse->getId());

        $this->assertInstanceOf(Tokens::TOKEN_RESPONSE_CLASS, $token);
        $this->assertEquals('card', $token->getType());
    }

    public function testCreateCardToken()
    {
        $createRequest = $this->tokens->createCardTokenRequest(self::VISA_1, 1, 2020);
        $createResponse = $this->tokens->createCardToken($createRequest);

        $this->assertInstanceOf(Tokens::TOKEN_RESPONSE_CLASS, $createResponse);
        $this->assertEquals('card', $createResponse->getType());
    }

    public function testCreateBankAccountToken()
    {
        $createRequest = $this->tokens->createBankAccountTokenRequest('US', self::ROUTING_NUMBER, self::ACCOUNT_NUMBER);
        $createResponse = $this->tokens->createBankAccountToken($createRequest);

        $this->assertInstanceOf(Tokens::TOKEN_RESPONSE_CLASS, $createResponse);
        $this->assertEquals('bank_account', $createResponse->getType());
    }
}
