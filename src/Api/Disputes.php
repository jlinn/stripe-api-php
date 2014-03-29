<?php
/**
 * User: Joe Linn
 * Date: 3/29/2014
 * Time: 3:58 PM
 */

namespace Stripe\Api;


use Stripe\Response\Disputes\DisputeResponse;

class Disputes extends AbstractApi
{
    const DISPUTE_RESPONSE_CLASS = 'Stripe\Response\Disputes\DisputeResponse';

    /**
     * @param string $chargeId
     * @param string $evidence
     * @return DisputeResponse
     * @link https://stripe.com/docs/api#update_dispute
     */
    public function updateDispute($chargeId, $evidence)
    {
        return $this->client->post($this->buildUrl($chargeId), self::DISPUTE_RESPONSE_CLASS, array('evidence' => $evidence));
    }

    /**
     * @param string $chargeId
     * @return DisputeResponse
     * @link https://stripe.com/docs/api#close_dispute
     */
    public function closeDispute($chargeId)
    {
        return $this->client->post($this->buildUrl($chargeId) . '/close', self::DISPUTE_RESPONSE_CLASS);
    }

    /**
     * @param string $chargeId
     * @return string
     */
    protected function buildUrl($chargeId)
    {
        return 'charges/' . $chargeId . '/dispute';
    }
} 