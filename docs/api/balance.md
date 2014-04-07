# [Balance](https://github.com/jlinn/stripe-api-php/blob/master/src/Api/Balance.php)
## Retrieve account balance
```php
$balance = $stripe->balance->getBalance();
```

## Retrieve a balance transaction
```php
$balanceTransaction = $stripe->balance->getBalanceTransaction("transaction_id");
```

## List balance history
```php
$balanceHistory = $stripe->balance->listBalanceHistory();
```