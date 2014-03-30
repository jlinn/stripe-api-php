stripe-api-php
==============

[![Build Status](https://secure.travis-ci.org/jlinn/stripe-api-php.png?branch=master)](http://travis-ci.org/jlinn/stripe-api-php)

A PHP client library for [Stripe](https://stripe.com/docs/api)'s API.

## Usage
### Installing via [Composer](https://getcomposer.org/)
```bash
php composer.phar require jlinn/stripe-api-php
```

### Making API Calls
#### Initialize the client object
```php
use Stripe\Stripe;
$stripe = new Stripe("your_api_key");
```

#### Customers calls
```php
use Stripe\Request\Customers\CreateCustomerRequest;

// create a customer
$request = new CreateCustomerRequest();
$request->setEmail("foo@bar.com")->setDescription("A customer!");
$customer = $stripe->customers()->createCustomer($request);
// get the newly-created customer's id
$customerId = $customer->getId();

// retrieve a customer
$customer = $stripe->customers()->getCustomer("customer_id");
```

## Development Status
This library is a work in progress. Currently, handling of the following resources has been implemented:

* accounts
* balance
* cards
* charges
* coupons
* customers
* discounts
* disputes
* invoice items
* invoices
* plans
* recipients
* subscriptions
* tokens
* transfers
