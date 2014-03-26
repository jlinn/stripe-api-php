<?php
/**
 * User: Joe Linn
 * Date: 3/21/2014
 * Time: 12:12 PM
 */

namespace Stripe\Api;


use Stripe\Request\Plans\CreatePlanRequest;
use Stripe\Response\DeleteResponse;
use Stripe\Response\Plans\ListPlansResponse;
use Stripe\Response\Plans\PlanResponse;

class Plans extends AbstractApi
{
    const PLAN_RESPONSE_CLASS = 'Stripe\Response\Plans\PlanResponse';

    /**
     * @param CreatePlanRequest $request
     * @return PlanResponse
     * @link https://stripe.com/docs/api/curl#create_plan
     */
    public function createPlan(CreatePlanRequest $request)
    {
        return $this->client->request('POST', 'plans', self::PLAN_RESPONSE_CLASS, $request);
    }

    /**
     * @param string $planId
     * @return PlanResponse
     * @link https://stripe.com/docs/api/curl#retrieve_plan
     */
    public function getPlan($planId)
    {
        return $this->client->request('GET', 'plans/' . $planId, self::PLAN_RESPONSE_CLASS);
    }

    /**
     * @param string $planId
     * @param string $name
     * @param array $metadata
     * @return PlanResponse
     * @link https://stripe.com/docs/api/curl#update_plan
     */
    public function updatePlan($planId, $name = null, $metadata = null)
    {
        $data = array();
        if (!is_null($name)) {
            $data['name'] = $name;
        }
        if (!is_null($metadata)) {
            $data['metadata'] = $metadata;
        }
        return $this->client->request('POST', 'plans/' . $planId, self::PLAN_RESPONSE_CLASS, $data);
    }

    /**
     * @param string $planId
     * @return DeleteResponse
     * @link https://stripe.com/docs/api/curl#delete_plan
     */
    public function deletePlan($planId)
    {
        return $this->client->request('DELETE', 'plans/' . $planId, self::DELETE_RESPONSE_CLASS);
    }

    /**
     * @param int $count
     * @param int $offset
     * @return ListPlansResponse
     * @link https://stripe.com/docs/api/curl#list_plans
     */
    public function listPlans($count = 10, $offset = 0)
    {
        return $this->client->request('GET', 'plans', 'Stripe\Response\Plans\ListPlansResponse', null, array('count' => $count, 'offset' => $offset));
    }

    /**
     * @param string $id
     * @param int $amount
     * @param string $currency
     * @param int $interval
     * @param string $name
     * @return CreatePlanRequest
     */
    public function createPlanRequest($id, $amount, $currency, $interval, $name)
    {
        return new CreatePlanRequest($id, $amount, $currency, $interval, $name);
    }
} 