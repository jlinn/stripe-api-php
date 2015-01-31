<?php
/**
 * User: Joe Linn
 * Date: 3/30/2014
 * Time: 6:46 PM
 */

namespace Stripe\Api;


use Stripe\Request\ApplicationFees\ListApplicationFeesRequest;
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
     * @param ListApplicationFeesRequest $request
     * @return ListApplicationFeesResponse
     * @link https://stripe.com/docs/api#list_application_fees
     */
    public function listApplicationFees(ListApplicationFeesRequest $request = null)
    {
        return $this->client->get($this->buildUrl(), self::LIST_APPLICATION_FEES_RESPONSE_CLASS, null, $this->listRequestToParams($request));
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