<?php
/**
 * User: Joe Linn
 * Date: 3/24/2014
 * Time: 12:56 PM
 */

namespace Stripe;


use Stripe\Api\AbstractApi;
use Stripe\Api\Accounts;
use Stripe\Api\Cards;
use Stripe\Api\Charges;
use Stripe\Api\Customers;
use Stripe\Api\Invoices;
use Stripe\Api\Plans;
use Stripe\Api\Subscriptions;
use Stripe\Api\Tokens;

/**
 * Class Stripe
 *
 * @property Api\Accounts
 * @property Api\Cards $cards
 * @property Api\Charges $charges
 * @property Api\Customers $customers
 * @property Api\Invoices $invoices
 * @property Api\Plans $plans
 * @property Api\Subscriptions $subscriptions
 * @property Api\Tokens $tokens
 */
class Stripe
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var AbstractApi[]
     */
    protected $apis = array();

    /**
     * @param string $apiKey your Stripe api key
     */
    public function __construct($apiKey)
    {
        $this->client = new Client($apiKey);
    }

    /**
     * Convenience method for accessing non-existent but available properties
     *
     * @param $name
     * @throws \UnexpectedValueException
     * @return mixed
     */
    public function __get($name)
    {
        $allowed = array(
            'accounts', 'cards', 'charges', 'customers',
            'invoices', 'plans', 'subscriptions', 'tokens'
        );

        if (in_array($name, $allowed)) {
            return $this->{$name}();
        }

        throw new \UnexpectedValueException(sprintf('Invalid property: %s', $name));
    }

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @return Accounts
     */
    public function accounts()
    {
        return $this->getApi('Accounts');
    }

    /**
     * @return Cards
     */
    public function cards()
    {
        return $this->getApi('Cards');
    }

    /**
     * @return Charges
     */
    public function charges()
    {
        return $this->getApi('Charges');
    }

    /**
     * @return Customers
     */
    public function customers()
    {
        return $this->getApi('Customers');
    }

    /**
     * @return Invoices
     */
    public function invoices()
    {
        return $this->getApi('Invoices');
    }

    /**
     * @return Plans
     */
    public function plans()
    {
        return $this->getApi('Plans');
    }

    /**
     * @return Subscriptions
     */
    public function subscriptions()
    {
        return $this->getApi('Subscriptions');
    }

    /**
     * @return Tokens
     */
    public function tokens()
    {
        return $this->getApi('Tokens');
    }

    /**
     * @param string $class
     * @return AbstractApi
     */
    protected function getApi($class)
    {
        $class = "\\" . __NAMESPACE__ . "\\Api\\" . $class;
        if (!array_key_exists($class, $this->apis)) {
            $this->apis[$class] = new $class($this->client);
        }
        return $this->apis[$class];
    }
}
