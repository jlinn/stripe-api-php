<?php
/**
 * User: Don Gilbert
 * Date: 3/27/2014
 * Time: 4:50 PM
 */

namespace Stripe\Api;

use Stripe\Exception\CardDeclinedException;
use Stripe\Exception\IncorrectNumberException;
use Stripe\Exception\InvalidCvcException;
use Stripe\Exception\InvalidExpiryMonthException;
use Stripe\Exception\InvalidExpiryYearException;
use Stripe\Request\Tokens\CreateBankAccountTokenRequest;
use Stripe\Request\Tokens\CreateCardTokenRequest;
use Stripe\Response\Tokens\TokenResponse;
use Stripe\StripeException;

class Tokens extends AbstractApi
{
    const TOKEN_RESPONSE_CLASS = 'Stripe\Response\Tokens\TokenResponse';

    /**
     * @param CreateCardTokenRequest $request
     * @return TokenResponse
     * @link https://stripe.com/docs/api/curl#create_card_token
     */
    public function createCardToken(CreateCardTokenRequest $request)
    {
        return $this->client->post('tokens', self::TOKEN_RESPONSE_CLASS, array('card' => $request));
    }

    /**
     * @param CreateBankAccountTokenRequest $request
     * @return TokenResponse
     * @link https://stripe.com/docs/api/curl#create_bank_account_token
     */
    public function createBankAccountToken(CreateBankAccountTokenRequest $request)
    {
        return $this->client->post('tokens', self::TOKEN_RESPONSE_CLASS, array('bank_account' => $request));
    }

    /**
     * @param string $tokenId
     * @return TokenResponse
     * @link https://stripe.com/docs/api/curl#retrieve_token
     */
    public function getToken($tokenId)
    {
        return $this->client->get('tokens/' . $tokenId, self::TOKEN_RESPONSE_CLASS);
    }

    /**
     * @param string $number
     * @param string $expMonth
     * @param string $expYear
     * @param string $cvc
     * @return CreateCardTokenRequest
     */
    public function createCardTokenRequest($number, $expMonth, $expYear, $cvc = null)
    {
        return new CreateCardTokenRequest($number, $expMonth, $expYear, $cvc);
    }

    /**
     * @param string $country
     * @param string $routingNumber
     * @param string $accountNumber
     * @return CreateBankAccountTokenRequest
     */
    public function createBankAccountTokenRequest($country, $routingNumber, $accountNumber)
    {
        return new CreateBankAccountTokenRequest($country, $routingNumber, $accountNumber);
    }

    /**
     * @param StripeException $e
     * @return CardDeclinedException|IncorrectNumberException|InvalidCvcException|InvalidExpiryMonthException|InvalidExpiryYearException|StripeException
     */
    protected function handleError(StripeException $e)
    {
        if ($e->getType() == "card_error") {
            switch ($e->getCardErrorCode()) {
                case "incorrect_number":
                    return new IncorrectNumberException($e);
                case "card_declined":
                    return new CardDeclinedException($e);
                case "invalid_expiry_month":
                    return new InvalidExpiryMonthException($e);
                case "invalid_expiry_year":
                    return new InvalidExpiryYearException($e);
                case "invalid_cvc":
                    return new InvalidCvcException($e);
                default:
                    return $e;
            }
        }
        return $e;
    }
}
