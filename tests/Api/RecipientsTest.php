<?php
/**
 * User: Joe Linn
 * Date: 3/29/2014
 * Time: 6:34 PM
 */

namespace Stripe\Tests\Api;


use Stripe\Api\Recipients;
use Stripe\Tests\StripeTestCase;

class RecipientsTest extends StripeTestCase
{
    /**
     * @var Recipients
     */
    protected $recipients;

    protected function setUp()
    {
        parent::setUp();
        $this->recipients = new Recipients($this->client);
    }

    public function testCreateRecipient()
    {
        $name = "Robert Loblaw";
        $type = "individual";
        $request = $this->recipients->createRecipientRequest($name, $type)->setBankAccount("US", self::ROUTING_NUMBER, self::ACCOUNT_NUMBER);
        $createResponse = $this->recipients->createRecipient($request);

        $this->assertInstanceOf(Recipients::RECIPIENT_RESPONSE_CLASS, $createResponse);
        $this->assertEquals($name, $createResponse->getName());
        $this->assertEquals($type, $createResponse->getType());

        $this->client->delete('recipients/' . $createResponse->getId());
    }

    public function testGetRecipient()
    {
        $createResponse = $this->createRecipient();

        $this->assertInstanceOf(Recipients::RECIPIENT_RESPONSE_CLASS, $createResponse);

        $getResponse = $this->recipients->getRecipient($createResponse->getId());

        $this->assertInstanceOf(Recipients::RECIPIENT_RESPONSE_CLASS, $getResponse);
        $this->assertEquals($createResponse->getId(), $getResponse->getId());

        $this->client->delete('recipients/' . $createResponse->getId());
    }

    public function testUpdateRecipient()
    {
        $createResponse = $this->createRecipient();

        $this->assertInstanceOf(Recipients::RECIPIENT_RESPONSE_CLASS, $createResponse);

        $email = "bob@loblaw.com";
        $request = $this->recipients->updateRecipientRequest()->setEmail($email);
        $updateResponse = $this->recipients->updateRecipient($createResponse->getId(), $request);

        $this->assertInstanceOf(Recipients::RECIPIENT_RESPONSE_CLASS, $updateResponse);
        $this->assertEquals($email, $updateResponse->getEmail());

        $this->client->delete('recipients/' . $createResponse->getId());
    }

    public function testDeleteRecipient()
    {
        $createResponse = $this->createRecipient();

        $this->assertInstanceOf(Recipients::RECIPIENT_RESPONSE_CLASS, $createResponse);

        $deleteResponse = $this->recipients->deleteRecipient($createResponse->getId());

        $this->assertInstanceOf(Recipients::DELETE_RESPONSE_CLASS, $deleteResponse);
        $this->assertEquals($createResponse->getId(), $deleteResponse->getId());
        $this->assertTrue($deleteResponse->getDeleted());
    }

    public function testListRecipients()
    {
        $listResponse = $this->recipients->listRecipients();

        $this->assertInstanceOf(Recipients::LIST_RECIPIENTS_RESPONSE_CLASS, $listResponse);
    }

    /**
     * @return \Stripe\Response\Recipients\RecipientResponse
     */
    protected function createRecipient()
    {
        $name = "Robert Loblaw";
        $type = "individual";
        $request = $this->recipients->createRecipientRequest($name, $type)->setBankAccount("US", self::ROUTING_NUMBER, self::ACCOUNT_NUMBER);
        return $this->recipients->createRecipient($request);
    }
}
 