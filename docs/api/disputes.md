# [Disputes](https://github.com/jlinn/stripe-api-php/blob/master/src/Api/Disputes.php)
## Update a dispute
```php
$stripe->disputes->updateDispute("charge_id", "Evidence!");
```

## Close a dispute
```php
$stripe->disputes->closeDispute("charge_id");
```