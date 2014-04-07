# [Discounts](https://github.com/jlinn/stripe-api-php/blob/master/src/Api/Discounts.php)
## Delete a customer discount
```php
$stripe->discounts->deleteCustomerDiscount("customer_id");
```

## Delete a subscription discount
```php
$stripe->discounts->deleteSubscriptionDiscount("customer_id", "subscription_id");
```