# [Charges](https://github.com/jlinn/stripe-api-php/blob/master/src/Api/Charges.php)
## Create a charge
The `createCharge()` method takes a [`CreateChargeRequest`](https://github.com/jlinn/stripe-api-php/blob/master/src/Request/Charges/CreateChargeRequest.php) object as its only parameter.
```php
$request = $stripe->charges->createChargeRequest(350, "usd");
$stripe->charges->createCharge($request); 
```

## Retrieve a charge
```php
$charge = $stripe->charges->getCharge("charge_id");
```

## Update a charge
```php
$stripe->charges->updateCharge("charge_id", "A new description.");
```

## Refund a charge
```php
$stripe->charges->refundCharge("charge_id");
```

## Capture a charge
```php
$stripe->charges->captureCharge("charge_id");
```

## List multiple charges
```php
$charges = $stripe->carges->listCharges();
```