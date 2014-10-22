<?php
/**
 * User: Joe Linn
 * Date: 7/28/2014
 * Time: 3:14 PM
 */

namespace Stripe\Api;


use Stripe\Request\Refunds\CreateRefundRequest;
use Stripe\Response\Refunds\ListRefundsResponse;
use Stripe\Response\Refunds\RefundResponse;

class Refunds extends AbstractApi
{
    const REFUND_RESPONSE_CLASS = 'Stripe\Response\Refunds\RefundResponse';
    const LIST_REFUNDS_RESPONSE_CLASS = 'Stripe\Response\Refunds\ListRefundsResponse';

    /**
     * Create a refund
     * @param string $chargeId
     * @param CreateRefundRequest $request
     * @return RefundResponse
     * @link https://stripe.com/docs/api#create_refund
     */
    public function createRefund($chargeId, CreateRefundRequest $request = null)
    {
        return $this->client->post($this->buildUrl($chargeId), self::REFUND_RESPONSE_CLASS, $request);
    }

    /**
     * Retrieve a refund
     * @param string $chargeId
     * @param string $refundId
     * @return RefundResponse
     * @link https://stripe.com/docs/api#retrieve_refund
     */
    public function getRefund($chargeId, $refundId)
    {
        return $this->client->get($this->buildUrl($chargeId, $refundId), self::REFUND_RESPONSE_CLASS);
    }

    /**
     * Update a refund
     * @param string $chargeId
     * @param string $refundId
     * @param array $metadata
     * @return RefundResponse
     * @link https://stripe.com/docs/api#update_refund
     */
    public function updateRefund($chargeId, $refundId, array $metadata)
    {
        return $this->client->post($this->buildUrl($chargeId, $refundId), self::REFUND_RESPONSE_CLASS, array('metadata' => $metadata));
    }

    /**
     * List refunds associated with the given charge
     * @param string $chargeId
     * @param int $limit
     * @param string $startingAfter
     * @param string $endingBefore
     * @return ListRefundsResponse
     * @link https://stripe.com/docs/api#list_refunds
     */
    public function listRefunds($chargeId, $limit = 10, $startingAfter = null, $endingBefore = null)
    {
        return $this->client->get($this->buildUrl($chargeId), self::LIST_REFUNDS_RESPONSE_CLASS, null, array(
            "ending_before" => $endingBefore,
            "starting_after" => $startingAfter,
            "limit" => $limit
        ));
    }

    /**
     * Build a URL for a refund request
     * @param string $chargeId
     * @param string $refundId
     * @return string
     */
    protected function buildUrl($chargeId, $refundId = null)
    {
        $url = "charges/" . $chargeId . "/refunds";
        if (!is_null($refundId)) {
            $url .= "/" . $refundId;
        }
        return $url;
    }
} 