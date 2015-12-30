<?php
/**
 * User: Don Gilbert
 * Date: 3/27/2014
 * Time: 4:50 PM
 */

namespace Stripe\Tests\Api;


use Stripe\Api\Accounts;
use Stripe\Request\Accounts\CreateAccountRequest;
use Stripe\Request\Accounts\CreateDeclineChargeRequest;
use Stripe\Request\Accounts\CreateExternalAccountRequest;
use Stripe\Request\Accounts\CreateTOSAcceptance;
use Stripe\Request\Accounts\CreateTransferScheduleRequest;
use Stripe\Request\Accounts\UpdateAccountRequest;
use Stripe\Request\LegalEntity\CreateAddressRequest;
use Stripe\Request\LegalEntity\CreateDOBRequest;
use Stripe\Request\LegalEntity\CreateLegalEntityRequest;
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

    protected function tearDown()
    {
        parent::tearDown();
        $this->client->delete('accounts/' . $this->request->getId());
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

    public function testAdvancedCreateAccount()
    {
        $country = 'US';
        $currency = 'usd';
        $routingNumber = '110000000';
        $state = 'IN';
        $address = '5555 Test Dr.';
        $businessName = 'Test';
        $firstName = 'Aaron';
        $lastName = 'Woodland';
        $type = 'individual';
        $dob = new \DateTime('1975-01-01');
        $managed = true;
        $cvc = true;
        $avs = true;
        $delayDays = 3;
        $interval = 'daily';

        $bankAccountRequest = new CreateExternalAccountRequest('000123456789', $country, $currency);
        $bankAccountRequest->setRoutingNumber($routingNumber);
        $addressRequest = new CreateAddressRequest();
        $addressRequest->setState($state);
        $addressRequest->setLine1($address);
        $legalEntity = new CreateLegalEntityRequest();
        $legalEntity->setBusinessName($businessName);
        $legalEntity->setFirstName($firstName);
        $legalEntity->setLastName($lastName);
        $legalEntity->setAddress($addressRequest);
        $legalEntity->setType($type);
        $legalEntity->setDob(new CreateDOBRequest($dob));
        $tosAcceptance = new CreateTOSAcceptance();
        $tosAcceptance->setDate(new \DateTime());
        $tosAcceptance->setIp('127.0.0.1');
        $accountRequest = new CreateAccountRequest();
        $accountRequest->setManaged($managed);
        $accountRequest->setExternalAccount($bankAccountRequest);
        $accountRequest->setLegalEntity($legalEntity);
        $accountRequest->setTosAcceptance($tosAcceptance);
        $declineCharge = new CreateDeclineChargeRequest(true, true);
        $accountRequest->setDeclineChargeOn($declineCharge);
        $transferSchedule = new CreateTransferScheduleRequest();
        $transferSchedule->setDelayDays($delayDays);
        $transferSchedule->setInterval($interval);
        $accountRequest->setTransferSchedule($transferSchedule);

        $response = $this->accounts->createAccount($accountRequest);

        $this->assertInstanceOf(Accounts::ACCOUNT_RESPONSE_CLASS, $response);
        foreach ($response->getExternalAccounts()->getData() as $account) {
            $this->assertInstanceOf('Stripe\Response\Accounts\ExternalAccountResponse', $account);
            $this->assertEquals($country, $account->getCountry());
            $this->assertEquals($currency, $account->getCurrency());
            $this->assertEquals($routingNumber, $account->getRoutingNumber());
        }

        $this->assertInstanceOf('Stripe\Response\LegalEntity\LegalEntityResponse', $response->getLegalEntity());
        $this->assertInstanceOf('Stripe\Response\LegalEntity\AddressResponse', $response->getLegalEntity()->getAddress());
        $this->assertInstanceOf('Stripe\Response\LegalEntity\DOBResponse', $response->getLegalEntity()->getDob());
        $this->assertEquals($state, $response->getLegalEntity()->getAddress()->getState());
        $this->assertEquals($address, $response->getLegalEntity()->getAddress()->getLine1());
        $this->assertEquals($businessName, $response->getLegalEntity()->getBusinessName());
        $this->assertEquals($firstName, $response->getLegalEntity()->getFirstName());
        $this->assertEquals($lastName, $response->getLegalEntity()->getLastName());
        $this->assertEquals($type, $response->getLegalEntity()->getType());
        $this->assertEquals($managed, $response->isManaged());
        $this->assertInstanceOf('Stripe\Response\Accounts\DeclineChargeOnResponse', $response->getDeclineChargeOn());
        $this->assertEquals($cvc, $response->getDeclineChargeOn()->isCvcFailure());
        $this->assertEquals($avs, $response->getDeclineChargeOn()->isAvsFailure());
        $this->assertInstanceOf('Stripe\Response\Accounts\TransferScheduleResponse', $response->getTransferSchedule());
        $this->assertEquals($delayDays, $response->getTransferSchedule()->getDelayDays());
        $this->assertEquals($interval, $response->getTransferSchedule()->getInterval());
        $this->client->delete('accounts/' . $response->getId());

    }

    public function testGetConnectedAccount()
    {
        $getResponse = $this->accounts->getConnectedAccount($this->request->getId());

        $this->assertInstanceOf(Accounts::ACCOUNT_RESPONSE_CLASS, $getResponse);
        $this->assertEquals($getResponse->getId(), $getResponse->getId());
    }

    public function testUpdateAccount()
    {
        $email = "foo@bar.com";
        $request = new UpdateAccountRequest();
        $request->setEmail($email);
        $updateResponse = $this->accounts->updateAccount($this->request->getId(), $request);

        $this->assertInstanceOf(Accounts::ACCOUNT_RESPONSE_CLASS, $updateResponse);
        $this->assertEquals($email, $updateResponse->getEmail());
    }

    public function testDeleteAccount()
    {
        $request = $this->accounts->createAccountRequest();
        $request->setEmail("bob".$this->randomString()."@loblaw.com");
        $request->setManaged(true);
        $deleteAccount = $this->accounts->createAccount($request);

        $deleteResponse = $this->accounts->deleteConnectedAccount($deleteAccount->getId());

        $this->assertInstanceOf(Accounts::DELETE_RESPONSE_CLASS, $deleteResponse);
        $this->assertTrue($deleteResponse->getDeleted());
        $this->assertEquals($deleteAccount->getId(), $deleteResponse->getId());
    }

    public function testListAccounts()
    {
        $request = $this->accounts->createAccountRequest();
        $request->setEmail("bob".$this->randomString()."@loblaw.com");
        $request->setManaged(true);
        $account1 = $this->accounts->createAccount($request);
        $account2 = $this->accounts->createAccount($request);
        $account3 = $this->accounts->createAccount($request);

        $request = new ListRequest();
        $request->setLimit(2);
        $list = $this->accounts->listConnectedAccounts($request);

        $this->assertInstanceOf(Accounts::LIST_ACCOUNT_RESPONSE_CLASS, $list);
        $this->assertEquals(2, sizeof($list->getData()));

        $this->accounts->deleteConnectedAccount($account1->getId());
        $this->accounts->deleteConnectedAccount($account2->getId());
        $this->accounts->deleteConnectedAccount($account3->getId());
    }
}
