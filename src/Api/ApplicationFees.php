<?php
/**
 * User: Joe Linn
 * Date: 3/30/2014
 * Time: 6:46 PM
 */

namespace Stripe\Api;


use Stripe\Response\ApplicationFees\ApplicationFeeResponse;
use Stripe\Response\ApplicationFees\ListApplicationFeesResponse;

class ApplicationFees extends AbstractApi
{
    const APPLICATION_FEE_RESPONSE_CLASS = 'Stripe\Response\ApplicationFees\ApplicationFeeResponse';
    const LIST_APPLICATION_FEES_RESPONSE_CLASS = 'Stripe\Response\ApplicationFees\ListApplicationFeesResponse';

    /**
     * @param string $applicationFeeId
     * @return ApplicationFeeResponse
     * @link https://stripe.com/docs/api#retrieve_application_fee
     */
    public function getApplicationFee($applicationFeeId)
    {
        return $this->client->get($this->buildUrl($applicationFeeId), self::APPLICATION_FEE_RESPONSE_CLASS);
    }

    /**
     * @param string $applicationFeeId
     * @param int $amount
     * @return ApplicationFeeResponse
     * @link https://stripe.com/docs/api#refund_application_fee
     */
    public function refundApplicationFee($applicationFeeId, $amount = null)
    {
        $request = null;
        if (!is_null($amount)) {
            $request = array('amount' => $amount);
        }
        return $this->client->post($this->buildUrl($applicationFeeId) . '/refund', self::APPLICATION_FEE_RESPONSE_CLASS, $request);
    }

    /**
     * @param string $charge
     * @param string|array $created
     * @param int $limit
     * @param string $startingAfter
     * @return ListApplicationFeesResponse
     * @link https://stripe.com/docs/api#list_application_fees
     */
    public function listApplicationFees($charge = null, $created = null, $limit = 10, $startingAfter = null)
    {
        $request = array('limit' => $limit);
        if (!is_null($charge)) {
            $request['charge'] = $charge;
        }
        if (!is_null($created)) {
            $request['created'] = $created;
        }
        if (!is_null($startingAfter)) {
            $request['starting_after'] = $startingAfter;
        }
        return $this->client->get($this->buildUrl(), self::LIST_APPLICATION_FEES_RESPONSE_CLASS, $request);
    }

    /**
     * @param string $applicationFeeId
     * @return string
     */
    protected function buildUrl($applicationFeeId = null)
    {
        $url = 'application_fees';
        if (!is_null($applicationFeeId)) {
            $url .= '/' . $applicationFeeId;
        }
        return $url;
    }
} 