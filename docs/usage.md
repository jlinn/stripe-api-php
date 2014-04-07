# Basic Usage

## Instantiate the client object
```php
use Stripe\Stripe;

$stripe = new Stripe("your_api_key");
```

## Create a customer
```php
use Stripe\Request\Cards\CreateCardRequest;

$request = $stripe->customers->createCustomerRequest()
	->setEmail("foo@bar.com")->setDescription("A customer!")
	->setCard(new CreateCardRequest("4242424242424242", 1, 2020));
$customer = $stripe->customers->createCustomer($request);
```

## Charge a customer
```php
$request = $stripe->charges->createChargeRequest(350, "usd")->setCustomer($customer->getId());
$stripe->charges->createCharge($request);
```