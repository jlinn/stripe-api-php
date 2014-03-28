<?php
/**
 * User: Joe Linn
 * Date: 3/24/2014
 * Time: 12:10 PM
 */

namespace Stripe\Tests\Api;


use Stripe\Api\Customers;
use Stripe\Request\Customers\CreateCustomerRequest;
use Stripe\Request\Customers\UpdateCustomerRequest;
use Stripe\Tests\StripeTestCase;

class CustomersTest extends StripeTestCase
{
    /**
     * @var Customers
     */
    protected $customers;

    protected function setUp()
    {
        parent::setUp();
        $this->customers = new Customers($this->client);
    }

    public function testCreateCustomer()
    {
        $balance = -500;
        $description = "testing";
        $request = new CreateCustomerRequest();
        $request->setAccountBalance($balance)->setDescription($description);
        $response = $this->customers->createCustomer($request);

        $this->assertInstanceOf(Customers::CUSTOMER_RESPONSE_CLASS, $response);
        $this->assertEquals($balance, $response->getAccountBalance());
        $this->assertEquals($description, $request->getDescription());

        $this->client->delete('customers/' . $response->getId());
    }

    public function testGetCustomer()
    {
        $createResponse = $this->customers->createCustomer();
        $getResponse = $this->customers->getCustomer($createResponse->getId());

        $this->assertInstanceOf(Customers::CUSTOMER_RESPONSE_CLASS, $getResponse);
        $this->assertEquals($createResponse->getId(), $getResponse->getId());

        $this->client->delete('customers/' . $getResponse->getId());
    }

    public function testUpdateCustomer()
    {
        $createResponse = $this->customers->createCustomer();

        $email = "foo@bar.com";
        $description = "a test client";
        $request = new UpdateCustomerRequest();
        $request->setEmail($email)->setDescription($description);
        $updateResponse = $this->customers->updateCustomer($createResponse->getId(), $request);

        $this->assertInstanceOf(Customers::CUSTOMER_RESPONSE_CLASS, $updateResponse);
        $this->assertEquals($email, $updateResponse->getEmail());
        $this->assertEquals($description, $updateResponse->getDescription());

        $this->client->delete('customers/' . $updateResponse->getId());
    }

    public function testDeleteCustomer()
    {
        $createResponse = $this->customers->createCustomer();
        $deleteResponse = $this->customers->deleteCustomer($createResponse->getId());

        $this->assertInstanceOf(Customers::DELETE_RESPONSE_CLASS, $deleteResponse);
        $this->assertTrue($deleteResponse->getDeleted());
        $this->assertEquals($createResponse->getId(), $deleteResponse->getId());
    }

    public function testListCustomers()
    {
        $customer1 = $this->customers->createCustomer();
        $customer2 = $this->customers->createCustomer();

        $list = $this->customers->listCustomers();

        $this->assertInstanceOf(Customers::LIST_CUSTOMERS_RESPONSE_CLASS, $list);

        $this->customers->deleteCustomer($customer1->getId());
        $this->customers->deleteCustomer($customer2->getId());
    }
}
 