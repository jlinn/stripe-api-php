# [Transfers](https://github.com/jlinn/stripe-api-php/blob/master/src/Api/Transfers.php)
## Create a transfer
The `createTransfer()` method takes a [`CreateTransferRequest`](https://github.com/jlinn/stripe-api-php/blob/master/src/Request/Transfers/CreateTransferRequest.php) object as its only parameter.
```php
$request = $stripe->transfers->createTransferRequest(350, "usd", "self");
$stripe->transfers->createTransfer($request);
```

## Retrieve a transfer
```php
$transfer = $stripe->transfers->getTransfer("transfer_id");
```

## Update a transfer
```php
$stripe->transfers->updateTransfer("transfer_id", "Updated description.");
```

## Cancel a transfer
```php
$stripe->transfers->cancelTransfer("transfer_id");
```

## List transfers
```php
$transfers = $stripe->transers->listTransfers();
``