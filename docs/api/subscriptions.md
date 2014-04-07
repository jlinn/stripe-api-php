# [Subscriptions](https://github.com/jlinn/stripe-api-php/blob/master/src/Api/Subscriptions.php)
## Create a subscription
The `createSubscription()` method takes a [`CreateSubscriptionRequest`](https://github.com/jlinn/stripe-api-php/blob/master/src/Request/Subscriptions/CreateSubscriptionRequest.php) object as its second parameter.
```php
$request = $stripe->subscriptions->createSubscriptionRequest("plan_id");
$stripe->subscriptions->createSubscription("customer_id", $request);
```

## Retrieve a subscription
```php
$subscription = $stripe->subscriptions->getSubscription("customer_id", "subscription_id");
```

## Update a subscription
The `updateSubscription()` method takes an [`UpdateSubscriptionRequest`](https://github.com/jlinn/stripe-api-php/blob/master/src/Request/Subscriptions/UpdateSubscriptionRequest.php) object as its third parameter.
```php
$request = $stripe->subscriptions->updateSubscriptionRequest()->setQuantity(2);
$stripe->subscriptions->updateSubscription("customer_id", "subscription_id", $request);
```

## Cancel a subscription
```php
$stripe->subscriptions->cancelSubscription("customer_id", "subscription_id");
```

## List a customer's subscriptions
```php
$subscriptions = $stripe->subscriptions->listSubscriptions("customer_id");
```