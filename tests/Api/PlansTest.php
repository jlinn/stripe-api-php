<?php
/**
 * User: Joe Linn
 * Date: 3/21/2014
 * Time: 12:28 PM
 */

namespace Stripe\Tests\Api;


use Stripe\Api\Plans;
use Stripe\Request\Plans\CreatePlanRequest;
use Stripe\Tests\StripeTestCase;

class PlansTest extends StripeTestCase
{
    /**
     * @var Plans
     */
    protected $plans;

    protected function setUp()
    {
        parent::setUp();
        $this->plans = new Plans($this->client);
    }

    public function testCreatePlan()
    {
        $response = $this->plans->createPlan(new CreatePlanRequest("test_plan", 350, "usd", "month", "test plan"));
        $this->assertInstanceOf(Plans::PLAN_RESPONSE_CLASS, $response);
        $this->assertEquals("test_plan", $response->getId());

        $this->client->request('DELETE', 'plans/' . $response->getId());
    }

    public function testGetPlan()
    {
        $createResponse = $this->plans->createPlan(new CreatePlanRequest("test_plan", 350, "usd", "month", "test plan"));
        $getResponse = $this->plans->getPlan($createResponse->getId());

        $this->assertInstanceOf(Plans::PLAN_RESPONSE_CLASS, $getResponse);
        $this->assertEquals($createResponse->getId(), $getResponse->getId());
        $this->assertEquals($createResponse->getAmount(), $getResponse->getAmount());


        $this->client->request('DELETE', 'plans/' . $getResponse->getId());
    }

    public function testUpdatePlan()
    {
        $createResponse = $this->plans->createPlan(new CreatePlanRequest("test_plan", 350, "usd", "month", "test plan"));
        $name = "updated name";
        $updateResponse = $this->plans->updatePlan($createResponse->getId(), $name);
        $this->assertEquals($name, $updateResponse->getName());


        $this->client->request('DELETE', 'plans/' . $createResponse->getId());
    }

    public function testDeletePlan()
    {
        $createResponse = $this->plans->createPlan(new CreatePlanRequest("test_plan", 350, "usd", "month", "test plan"));
        $deleteResponse = $this->plans->deletePlan($createResponse->getId());

        $this->assertInstanceOf(Plans::DELETE_RESPONSE_CLASS, $deleteResponse);
        $this->assertTrue($deleteResponse->getDeleted());
    }
}
 