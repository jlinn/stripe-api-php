<?php
/**
 * User: Joe Linn
 * Date: 3/24/2014
 * Time: 12:56 PM
 */

namespace Stripe;


use Stripe\Api\AbstractApi;
use Stripe\Api\Cards;
use Stripe\Api\Customers;
use Stripe\Api\Plans;
use Stripe\Api\Subscriptions;

class Stripe {
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
    public function __construct($apiKey){
        $this->client = new Client($apiKey);
    }

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @return Cards
     */
    public function cards(){
        return $this->getApi('Cards');
    }

    /**
     * @return Customers
     */
    public function customers(){
        return $this->getApi('Customers');
    }

    /**
     * @return Plans
     */
    public function plans(){
        return $this->getApi('Plans');
    }

    /**
     * @return Subscriptions
     */
    public function subscriptions(){
        return $this->getApi('Subscriptions');
    }

    /**
     * @param string $class
     * @return AbstractApi
     */
    protected function getApi($class){
        $class = "\\".__NAMESPACE__."\\Api\\".$class;
        if(!array_key_exists($class, $this->apis)){
            $this->apis[$class] = new $class($this->client);
        }
        return $this->apis[$class];
    }
}