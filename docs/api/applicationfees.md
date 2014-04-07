# [Application Fees](https://github.com/jlinn/stripe-api-php/blob/master/src/Api/ApplicationFees.php)
## Retrieve an application fee
```php
$fee = $stripe->applicationFees->getApplicationFee("fee_id");
```

## Refund an application fee
```php
$stripe->applicationFees->refundApplicationFee("fee_id");
```

## List application fees
```php
$fees = $stripe->applicationFess->listApplicationFees();
```