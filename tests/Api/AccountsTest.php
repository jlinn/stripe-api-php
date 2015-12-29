<?php
/**
 * User: Don Gilbert
 * Date: 3/27/2014
 * Time: 4:50 PM
 */

namespace Stripe\Tests\Api;


use Stripe\Api\Accounts;
use Stripe\Request\Accounts\CreateAccountRequest;
use Stripe\Request\Accounts\UpdateAccountRequest;
use Stripe\Request\ListRequest;
use Stripe\Tests\StripeTestCase;

class AccountsTest extends StripeTestCase
{
    /**
     * @var Accounts
     */
    protected $accounts;

    /**
     * @var CreateAccountRequest
     */
    protected $request;

    protected function setUp()
    {
        parent::setUp();
        $this->accounts = new Accounts($this->client);
        $request = $this->accounts->createAccountRequest();
        $request->setEmail("bob".$this->randomString()."@loblaw.com");
        $request->setManaged(true);
        $this->request = $this->accounts->createAccount($request);
    }

    public function testGetAccount()
    {
        $account = $this->accounts->getAccount();
        $this->assertInstanceOf(Accounts::ACCOUNT_RESPONSE_CLASS, $account);
    }

    public function testCreateAccount()
    {
        $this->assertInstanceOf(Accounts::ACCOUNT_RESPONSE_CLASS, $this->request);
    }

    public function testGetConnectedAccount()
    {
        $getResponse = $this->accounts->getConnectedAccount($this->request->getId());

        $this->assertInstanceOf(Accounts::ACCOUNT_RESPONSE_CLASS, $getResponse);
        $this->assertEquals($getResponse->getId(), $getResponse->getId());

        $this->accounts->deleteConnectedAccount($getResponse->getId());
    }

    public function testUpdateAccount()
    {
        $email = "foo@bar.com";
        $request = new UpdateAccountRequest();
        $request->setEmail($email);
        $updateResponse = $this->accounts->updateAccount($this->request->getId(), $request);

        $this->assertInstanceOf(Accounts::ACCOUNT_RESPONSE_CLASS, $updateResponse);
        $this->assertEquals($email, $updateResponse->getEmail());

        $this->client->delete('accounts/' . $updateResponse->getId());
    }

    public function testDeleteAccount()
    {
        $deleteResponse = $this->accounts->deleteConnectedAccount($this->request->getId());

        $this->assertInstanceOf(Accounts::DELETE_RESPONSE_CLASS, $deleteResponse);
        $this->assertTrue($deleteResponse->getDeleted());
        $this->assertEquals($this->request->getId(), $deleteResponse->getId());
    }

    public function testListAccounts()
    {
        $account1 = $this->request;
        $request = $this->accounts->createAccountRequest();
        $request->setEmail("bob".$this->randomString()."@loblaw.com");
        $request->setManaged(true);
        $account2 = $this->accounts->createAccount($request);
        $this->accounts->createAccount($request);

        $request = new ListRequest();
        $request->setLimit(2);
        $list = $this->accounts->listConnectedAccounts($request);

        $this->assertInstanceOf(Accounts::LIST_ACCOUNT_RESPONSE_CLASS, $list);
        $this->assertEquals(2, sizeof($list->getData()));

        $this->accounts->deleteConnectedAccount($account1->getId());
        $this->accounts->deleteConnectedAccount($account2->getId());
    }
}
