<?php
/**
 * User: Joe Linn
 * Date: 3/20/2014
 * Time: 3:30 PM
 */

namespace Stripe\Tests\Api;


use Stripe\Api\Cards;
use Stripe\Exception\CardDeclinedException;
use Stripe\Exception\IncorrectNumberException;
use Stripe\Exception\InvalidCvcException;
use Stripe\Exception\InvalidExpiryMonthException;
use Stripe\Exception\InvalidExpiryYearException;
use Stripe\Request\Cards\CreateCardRequest;
use Stripe\Request\Cards\UpdateCardRequest;
use Stripe\Request\ListRequest;
use Stripe\Tests\StripeTestCase;

class CardsTest extends StripeTestCase
{
    /**
     * @var Cards
     */
    protected $cards;

    /**
     * @var string
     */
    protected $customerId;

    protected function setUp()
    {
        parent::setUp();
        $this->cards = new Cards($this->client);
        $customer = $this->client->request('POST', 'customers');
        $this->customerId = $customer['id'];
    }

    protected function tearDown()
    {
        $this->client->request('DELETE', 'customers/' . $this->customerId);
    }

    public function testCreateCard()
    {
        $cardNumber = self::VISA_1;
        $request = new CreateCardRequest($cardNumber, 1, 2020);
        $response = $this->cards->createCard($this->customerId, $request);

        $this->assertInstanceOf('Stripe\Response\Cards\CardResponse', $response);
        $this->assertEquals(substr($cardNumber, -4), $response->getLast4());

        // test error handling

        $cardNumber = self::INCORRECT_NUMBER;
        $request = new CreateCardRequest($cardNumber, 1, 2020);
        $exceptionThrown = false;
        try {
            $this->cards->createCard($this->customerId, $request);
        } catch (IncorrectNumberException $e) {
            $exceptionThrown = true;
        }
        $this->assertTrue($exceptionThrown);

        $cardNumber = self::CARD_DECLINED;
        $request = new CreateCardRequest($cardNumber, 1, 2020);
        $exceptionThrown = false;
        try {
            $this->cards->createCard($this->customerId, $request);
        } catch (CardDeclinedException $e) {
            $exceptionThrown = true;
        }
        $this->assertTrue($exceptionThrown);

        $cardNumber = self::VISA_1;
        $request = new CreateCardRequest($cardNumber, 13, 2020);
        $exceptionThrown = false;
        try {
            $this->cards->createCard($this->customerId, $request);
        } catch (InvalidExpiryMonthException $e) {
            $exceptionThrown = true;
        }
        $this->assertTrue($exceptionThrown);

        $request = new CreateCardRequest($cardNumber, 12, 1984);
        $exceptionThrown = false;
        try {
            $this->cards->createCard($this->customerId, $request);
        } catch (InvalidExpiryYearException $e) {
            $exceptionThrown = true;
        }
        $this->assertTrue($exceptionThrown);

        $request = new CreateCardRequest($cardNumber, 12, 2020);
        $request->setCvc(23);
        $exceptionThrown = false;
        try {
            $this->cards->createCard($this->customerId, $request);
        } catch (InvalidCvcException $e) {
            $exceptionThrown = true;
        }
        $this->assertTrue($exceptionThrown);
    }

    public function testUpdateCard()
    {
        $createResponse = $this->cards->createCard($this->customerId, new CreateCardRequest(self::VISA_1, 1, 2020));
        $request = new UpdateCardRequest();
        $request->setExpYear(2021);
        $updateResponse = $this->cards->updateCard($this->customerId, $createResponse->getId(), $request);

        $this->assertEquals($createResponse->getId(), $updateResponse->getId());
        $this->assertEquals(2021, $updateResponse->getExpYear());
    }

    public function testGetCard()
    {
        $createResponse = $this->cards->createCard($this->customerId, new CreateCardRequest(self::VISA_1, 1, 2020));
        $card = $this->cards->getCard($this->customerId, $createResponse->getId());

        $this->assertInstanceOf('Stripe\Response\Cards\CardResponse', $card);
        $this->assertEquals($createResponse->getId(), $card->getId());
    }

    public function testListCards()
    {
        $request = new ListRequest();
        $request->setLimit(1);
        $this->cards->createCard($this->customerId, new CreateCardRequest(self::VISA_1, 1, 2020));
        $this->cards->createCard($this->customerId, new CreateCardRequest(self::MASTERCARD_1, 2, 2020));
        $cards = $this->cards->listCards($this->customerId, $request);

        $this->assertInstanceOf(Cards::LIST_CARDS_RESPONSE_CLASS, $cards);
        $this->assertEquals(1, sizeof($cards->getData()));

        foreach ($cards->getData() as $card) {
            $this->assertInstanceOf('Stripe\Response\Cards\CardResponse', $card);
        }
    }

    public function testDeleteCard()
    {
        $createResponse = $this->cards->createCard($this->customerId, new CreateCardRequest(self::VISA_1, 1, 2020));
        $deleteResponse = $this->cards->deleteCard($this->customerId, $createResponse->getId());

        $this->assertTrue($deleteResponse->getDeleted());
        $this->assertEquals($createResponse->getId(), $deleteResponse->getId());
    }
}
 