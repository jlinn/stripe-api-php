stripe-api-php
==============

[![Build Status](https://secure.travis-ci.org/jlinn/stripe-api-php.png?branch=master)](http://travis-ci.org/jlinn/stripe-api-php)

A PHP client library for [Stripe](https://stripe.com/docs/api)'s API.

## Usage
### Installing via [Composer](https://getcomposer.org/)
```bash
$ php composer.phar require jlinn/stripe-api-php
```

### Making API Calls
#### Initialize the client object
```php
use Stripe\Stripe;
$stripe = new Stripe("your_api_key");
```

#### Customers calls
```php
use Stripe\Request\Cards\CreateCardRequest;

// create a customer
$request = $stripe->customers->createCustomerRequest();
$request->setEmail("foo@bar.com")->setDescription("A customer!");
$request->setCard(new CreateCardRequest("4242424242424242", 1, 2020));
$customer = $stripe->customers->createCustomer($request);
// get the newly-created customer's id
$customerId = $customer->getId();

// retrieve a customer
$customer = $stripe->customers()->getCustomer("customer_id");
```

#### Charges calls
```php
// create a charge
$request = $stripe->charges->createChargeRequest(350, "usd")->setCustomer($customer->getId());
$stripe->charges->createCharge($request);

// retrieve a charge
$charge = $stripe->charges->getCharge("charge_id");
```

## Development Status
Currently, all Stripe API calls which do not require [Stripe Connect](https://stripe.com/docs/connect) have been implemented.  Documentation and Stripe Connect calls are next on the to-do list.
