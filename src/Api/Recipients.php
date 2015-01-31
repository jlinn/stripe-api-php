<?php
/**
 * User: Joe Linn
 * Date: 3/29/2014
 * Time: 6:24 PM
 */

namespace Stripe\Api;


use Stripe\Request\Recipients\CreateRecipientRequest;
use Stripe\Request\Recipients\ListRecipientsRequest;
use Stripe\Request\Recipients\UpdateRecipientRequest;
use Stripe\Response\DeleteResponse;
use Stripe\Response\Recipients\ListRecipientsResponse;
use Stripe\Response\Recipients\RecipientResponse;

class Recipients extends AbstractApi
{
    const RECIPIENT_RESPONSE_CLASS = 'Stripe\Response\Recipients\RecipientResponse';
    const LIST_RECIPIENTS_RESPONSE_CLASS = 'Stripe\Response\Recipients\ListRecipientsResponse';

    /**
     * @param CreateRecipientRequest $request
     * @return RecipientResponse
     * @link https://stripe.com/docs/api#create_recipient
     */
    public function createRecipient(CreateRecipientRequest $request)
    {
        return $this->client->post($this->buildUrl(), self::RECIPIENT_RESPONSE_CLASS, $request);
    }

    /**
     * @param string $recipientId
     * @return RecipientResponse
     * @link https://stripe.com/docs/api#retrieve_recipient
     */
    public function getRecipient($recipientId)
    {
        return $this->client->get($this->buildUrl($recipientId), self::RECIPIENT_RESPONSE_CLASS);
    }

    /**
     * @param string $recipientId
     * @param UpdateRecipientRequest $request
     * @return RecipientResponse
     * @link https://stripe.com/docs/api#update_recipient
     */
    public function updateRecipient($recipientId, UpdateRecipientRequest $request)
    {
        return $this->client->post($this->buildUrl($recipientId), self::RECIPIENT_RESPONSE_CLASS, $request);
    }

    /**
     * @param string $recipientId
     * @return DeleteResponse
     * @link https://stripe.com/docs/api#delete_recipient
     */
    public function deleteRecipient($recipientId)
    {
        return $this->client->delete($this->buildUrl($recipientId), self::DELETE_RESPONSE_CLASS);
    }

    /**
     * @param ListRecipientsRequest $request
     * @return ListRecipientsResponse
     * @link https://stripe.com/docs/api#list_recipients
     */
    public function listRecipients(ListRecipientsRequest $request = null)
    {
        return $this->client->get($this->buildUrl(), self::LIST_RECIPIENTS_RESPONSE_CLASS, null, $this->listRequestToParams($request));
    }

    /**
     * @param string $name
     * @param string $type
     * @return CreateRecipientRequest
     */
    public function createRecipientRequest($name, $type)
    {
        return new CreateRecipientRequest($name, $type);
    }

    /**
     * @return UpdateRecipientRequest
     */
    public function updateRecipientRequest()
    {
        return new UpdateRecipientRequest();
    }

    /**
     * @param string $recipientId
     * @return string
     */
    protected function buildUrl($recipientId = null)
    {
        $url = 'recipients';
        if (!is_null($recipientId)) {
            $url .= '/' . $recipientId;
        }
        return $url;
    }
} 