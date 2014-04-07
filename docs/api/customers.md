# [Customers](https://github.com/jlinn/stripe-api-php/blob/master/src/Api/Customers.php)
## Create a customer
The `createCustomer()` method takes a [`CreateCustomerRequest`](https://github.com/jlinn/stripe-api-php/blob/master/src/Request/Customers/CreateCustomerRequest.php) object as its only parameter. This parameter is optional.
```php
$request = $stripe->customers->createCustomerRequest()->setAccountBalance(-500);
$stripe->customers->createCustomer($request);
```

## Retrieve a customer
```php
$customer = $stripe->customers->getCustomer("customer_id");
```

## Update a customer
The `UpdateCustomer()` method takes an [`UpdateCustomerRequest`](https://github.com/jlinn/stripe-api-php/blob/master/src/Request/Customers/UpdateCustomerRequest.php) object as its second parameter.
```php
$request = $stripe->customers->updateCustomerRequest()->setEmail("foo@bar.com");
$stripe->customers->updateCustomer("customer_id", $request);
```

## Delete a customer
```php
$stripe->customers->deleteCustomer("customer_id");
```

## List customers
```php
$customers = $stripe->customers->listCustomers();
```