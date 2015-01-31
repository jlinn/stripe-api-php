<?php
/**
 * User: Joe Linn
 * Date: 3/29/2014
 * Time: 10:19 PM
 */

namespace Stripe\Api;


use Stripe\Request\Transfers\CreateTransferRequest;
use Stripe\Request\Transfers\ListTransfersRequest;
use Stripe\Response\Transfers\ListTransfersResponse;
use Stripe\Response\Transfers\TransferResponse;

class Transfers extends AbstractApi
{
    const TRANSFER_RESPONSE_CLASS = 'Stripe\Response\Transfers\TransferResponse';
    const LIST_TRANSFERS_RESPONSE_CLASS = 'Stripe\Response\Transfers\ListTransfersResponse';

    /**
     * @param CreateTransferRequest $request
     * @return TransferResponse
     * @link https://stripe.com/docs/api#create_transfer
     */
    public function createTransfer(CreateTransferRequest $request)
    {
        return $this->client->post($this->buildUrl(), self::TRANSFER_RESPONSE_CLASS, $request);
    }

    /**
     * @param string $transferId
     * @return TransferResponse
     * @link https://stripe.com/docs/api#retrieve_transfer
     */
    public function getTransfer($transferId)
    {
        return $this->client->get($this->buildUrl($transferId), self::TRANSFER_RESPONSE_CLASS);
    }

    /**
     * @param string $transferId
     * @param string $description
     * @param array $metadata
     * @return TransferResponse
     * @link https://stripe.com/docs/api#update_transfer
     */
    public function updateTransfer($transferId, $description = null, array $metadata = null)
    {
        $request = array();
        if (!is_null($description)) {
            $request['description'] = $description;
        }
        if (!is_null($metadata)) {
            $request['metadata'] = $metadata;
        }
        return $this->client->post($this->buildUrl($transferId), self::TRANSFER_RESPONSE_CLASS, $request);
    }

    /**
     * @param string $transferId
     * @return TransferResponse
     * @link https://stripe.com/docs/api#cancel_transfer
     */
    public function cancelTransfer($transferId)
    {
        return $this->client->post($this->buildUrl($transferId) . '/cancel', self::TRANSFER_RESPONSE_CLASS);
    }

    /**
     * @param ListTransfersRequest $request
     * @return ListTransfersResponse
     * @link https://stripe.com/docs/api#list_transfers
     */
    public function listTransfers(ListTransfersRequest $request = null)
    {
        return $this->client->get($this->buildUrl(), self::LIST_TRANSFERS_RESPONSE_CLASS, null, $this->listRequestToParams($request));
    }

    /**
     * @param int $amount
     * @param string $currency
     * @param string $recipient
     * @return CreateTransferRequest
     */
    public function createTransferRequest($amount, $currency, $recipient)
    {
        return new CreateTransferRequest($amount, $currency, $recipient);
    }

    /**
     * @param string $transferId
     * @return string
     */
    protected function buildUrl($transferId = null)
    {
        $url = 'transfers';
        if (!is_null($transferId)) {
            $url .= '/' . $transferId;
        }
        return $url;
    }
} 