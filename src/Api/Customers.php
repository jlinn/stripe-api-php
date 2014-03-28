<?php
/**
 * User: Joe Linn
 * Date: 3/21/2014
 * Time: 10:59 AM
 */

namespace Stripe\Api;


use Stripe\Request\Customers\CreateCustomerRequest;
use Stripe\Request\Customers\UpdateCustomerRequest;
use Stripe\Response\Customers\CustomerResponse;
use Stripe\Response\Customers\ListCustomersResponse;
use Stripe\Response\DeleteResponse;

class Customers extends AbstractApi
{
    const CUSTOMER_RESPONSE_CLASS = 'Stripe\Response\Customers\CustomerResponse';
    const LIST_CUSTOMERS_RESPONSE_CLASS = 'Stripe\Response\Customers\ListCustomersResponse';

    /**
     * @param CreateCustomerRequest $request
     * @return CustomerResponse
     * @link https://stripe.com/docs/api/curl#create_customer
     */
    public function createCustomer(CreateCustomerRequest $request = null)
    {
        return $this->client->post('customers', self::CUSTOMER_RESPONSE_CLASS, $request);
    }

    /**
     * @param string $customerId
     * @return CustomerResponse
     * @link https://stripe.com/docs/api/curl#retrieve_customer
     */
    public function getCustomer($customerId)
    {
        return $this->client->get($this->buildUrl($customerId), self::CUSTOMER_RESPONSE_CLASS);
    }

    /**
     * @param string $customerId
     * @param UpdateCustomerRequest $request
     * @return CustomerResponse
     * @link https://stripe.com/docs/api/curl#update_customer
     */
    public function updateCustomer($customerId, UpdateCustomerRequest $request)
    {
        return $this->client->post($this->buildUrl($customerId), self::CUSTOMER_RESPONSE_CLASS, $request);
    }

    /**
     * @param string $customerId
     * @return DeleteResponse
     * @link https://stripe.com/docs/api/curl#delete_customer
     */
    public function deleteCustomer($customerId)
    {
        return $this->client->delete($this->buildUrl($customerId), self::DELETE_RESPONSE_CLASS);
    }

    /**
     * @param int $count
     * @param int $offset
     * @param string|array $created
     * @return ListCustomersResponse
     * @link https://stripe.com/docs/api/curl#list_customers
     */
    public function listCustomers($count = 10, $offset = 0, $created = null)
    {
        $params = array(
            'count' => $count,
            'offset' => $offset
        );
        if (!is_null($created)) {
            $params['created'] = $created;
        }
        return $this->client->get('customers', self::LIST_CUSTOMERS_RESPONSE_CLASS, null, $params);
    }

    /**
     * @return CreateCustomerRequest
     */
    public function createCustomerRequest()
    {
        return new CreateCustomerRequest();
    }

    /**
     * @return UpdateCustomerRequest
     */
    public function updateCustomerRequest()
    {
        return new UpdateCustomerRequest();
    }

    /**
     * @param string $customerId
     * @return string
     */
    protected function buildUrl($customerId)
    {
        return 'customers/' . $customerId;
    }
} 