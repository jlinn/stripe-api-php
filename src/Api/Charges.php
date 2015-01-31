<?php
/**
 * User: Joe Linn
 * Date: 3/26/2014
 * Time: 11:09 PM
 */

namespace Stripe\Api;


use Stripe\Request\Charges\CreateChargeRequest;
use Stripe\Request\ListRequest;
use Stripe\Response\Charges\ChargeResponse;
use Stripe\Response\Charges\ListChargesResponse;

class Charges extends AbstractApi
{
    const CHARGE_RESPONSE_CLASS = 'Stripe\Response\Charges\ChargeResponse';
    const LIST_CHARGES_RESPONSE_CLASS = 'Stripe\Response\Charges\ListChargesResponse';

    /**
     * @param CreateChargeRequest $request
     * @return ChargeResponse
     * @link https://stripe.com/docs/api#create_charge
     */
    public function createCharge(CreateChargeRequest $request)
    {
        return $this->client->post($this->buildUrl(), self::CHARGE_RESPONSE_CLASS, $request);
    }

    /**
     * @param string $chargeId
     * @return ChargeResponse
     * @link https://stripe.com/docs/api#retrieve_charge
     */
    public function getCharge($chargeId)
    {
        return $this->client->get($this->buildUrl($chargeId), self::CHARGE_RESPONSE_CLASS);
    }

    /**
     * @param string $chargeId
     * @param string $description
     * @param array $metadata
     * @return ChargeResponse
     * @link https://stripe.com/docs/api#update_charge
     */
    public function updateCharge($chargeId, $description = null, $metadata = null)
    {
        $request = array();
        if (!is_null($description)) {
            $request['description'] = $description;
        }
        if (!is_null($metadata)) {
            $request['metadata'] = $metadata;
        }
        return $this->client->post($this->buildUrl($chargeId), self::CHARGE_RESPONSE_CLASS, $request);
    }

    /**
     * @param string $chargeId
     * @param int $amount
     * @param bool $refundApplicationFee
     * @return ChargeResponse
     * @link https://stripe.com/docs/api#refund_charge
     */
    public function refundCharge($chargeId, $amount = null, $refundApplicationFee = null)
    {
        $request = array();
        if (!is_null($amount)) {
            $request['amount'] = $amount;
        }
        if (!is_null($refundApplicationFee)) {
            $request['refund_application_fee'] = $refundApplicationFee;
        }
        return $this->client->post($this->buildUrl($chargeId) . '/refund', self::CHARGE_RESPONSE_CLASS, null, $request);
    }

    /**
     * @param string $chargeId
     * @param int $amount
     * @param int $applicationFee
     * @return ChargeResponse
     * @link https://stripe.com/docs/api#charge_capture
     */
    public function captureCharge($chargeId, $amount = null, $applicationFee = null)
    {
        $request = array();
        if (!is_null($amount)) {
            $request['amount'] = $amount;
        }
        if (!is_null($applicationFee)) {
            $request['application_fee'] = $applicationFee;
        }
        return $this->client->post($this->buildUrl($chargeId) . '/capture', self::CHARGE_RESPONSE_CLASS, $request);
    }

    /**
     * @param ListRequest $request
     * @return ListChargesResponse
     * @link https://stripe.com/docs/api#list_charges
     */
    public function listCharges(ListRequest $request = null)
    {
        return $this->client->get($this->buildUrl(), self::LIST_CHARGES_RESPONSE_CLASS, null, $this->listRequestToParams($request));
    }

    /**
     * @param int $amount
     * @param string $currency
     * @return CreateChargeRequest
     */
    public function createChargeRequest($amount, $currency)
    {
        return new CreateChargeRequest($amount, $currency);
    }

    /**
     * @param string $chargeId
     * @return string
     */
    protected function buildUrl($chargeId = null)
    {
        $url = 'charges';
        if (!is_null($chargeId)) {
            $url .= '/' . $chargeId;
        }
        return $url;
    }
} 