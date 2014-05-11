<?php
/**
 * User: Joe Linn
 * Date: 3/24/2014
 * Time: 12:56 PM
 */

namespace Stripe;

use Stripe\Api\AbstractApi;
use Stripe\Api\Accounts;
use Stripe\Api\ApplicationFees;
use Stripe\Api\Cards;
use Stripe\Api\Charges;
use Stripe\Api\Coupons;
use Stripe\Api\Customers;
use Stripe\Api\Discounts;
use Stripe\Api\Disputes;
use Stripe\Api\Events;
use Stripe\Api\InvoiceItems;
use Stripe\Api\Invoices;
use Stripe\Api\Plans;
use Stripe\Api\Recipients;
use Stripe\Api\Subscriptions;
use Stripe\Api\Tokens;
use Stripe\Api\Transfers;

/**
 * Class Stripe
 *
 * @property Api\Accounts $accounts
 * @property Api\ApplicationFees $applicationFees
 * @property Api\Balance $balance
 * @property Api\Cards $cards
 * @property Api\Charges $charges
 * @property Api\Coupons $coupons
 * @property Api\Customers $customers
 * @property Api\Discounts $discounts
 * @property Api\Disputes $disputes
 * @property Api\Events $events
 * @property Api\InvoiceItems $invoiceItems
 * @property Api\Invoices $invoices
 * @property Api\Plans $plans
 * @property Api\Recipients $recipients
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
            'accounts', 'applicationFees', 'balance', 'cards', 'charges', 'coupons', 'customers', 'discounts',
            'disputes', 'events', 'invoiceItems', 'invoices', 'plans', 'recipients', 'subscriptions', 'tokens',
            'transfers'
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
     * @return ApplicationFees
     */
    public function applicationFees()
    {
        return $this->getApi('ApplicationFees');
    }

    public function balance()
    {
        return $this->getApi('Balance');
    }

    /**
     * @return Cards
     */
    public function cards()
    {
        return $this->getApi('Cards');
    }

    /**
     * @return Coupons
     */
    public function coupons()
    {
        return $this->getApi('Coupons');
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
     * @return Discounts
     */
    public function discounts()
    {
        return $this->getApi('Discounts');
    }

    /**
     * @return Disputes
     */
    public function disputes()
    {
        return $this->getApi('Disputes');
    }

    /**
     * @return Events
     */
    public function events()
    {
        return $this->getApi('Events');
    }

    /**
     * @return InvoiceItems
     */
    public function invoiceItems()
    {
        return $this->getApi('InvoiceItems');
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
     * @return Recipients
     */
    public function recipients()
    {
        return $this->getApi('Recipients');
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
     * @return Transfers
     */
    public function transfers()
    {
        return $this->getApi('Transfers');
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
