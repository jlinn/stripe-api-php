<?php
/**
 * User: Joe Linn
 * Date: 3/28/2014
 * Time: 9:30 PM
 */

namespace Stripe\Api;


use Stripe\Response\DeleteResponse;

class Discounts extends AbstractApi
{
    /**
     * @param string $customerId
     * @return DeleteResponse
     * @link https://stripe.com/docs/api#delete_discount
     */
    public function deleteCustomerDiscount($customerId)
    {
        return $this->client->delete('customers/' . $customerId . '/discount', self::DELETE_RESPONSE_CLASS);
    }

    /**
     * @param string $customerId
     * @param string $subscriptionId
     * @return DeleteResponse
     * @link https://stripe.com/docs/api#delete_subscription_discount
     */
    public function deleteSubscriptionDiscount($customerId, $subscriptionId)
    {
        return $this->client->delete('customers/' . $customerId . '/subscriptions/' . $subscriptionId . '/discount', self::DELETE_RESPONSE_CLASS);
    }
} 