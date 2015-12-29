# [Accounts](https://github.com/jlinn/stripe-api-php/blob/master/src/Api/Accounts.php)
## Retrieve default account data
```php
$account = $stripe->accounts->getAccount();
```

## Create an account
The `createAccount()` method takes a [`CreateAccountRequest`](https://github.com/jlinn/stripe-api-php/blob/master/src/Request/Accounts/CreateAccountRequest.php) object as its only parameter. This parameter is optional.
```php
$newAccount = new CreateAccountRequest();
$newAccount->setManaged(true);
$request = $stripe->accounts->createAccount($newAccount);
```

## Retrieve a connected account
```php
$customer = $stripe->accounts->getConnectedAccount("account_id");
```

## Update an account
The `UpdateAccount()` method takes an [`UpdateAccountRequest`](https://github.com/jlinn/stripe-api-php/blob/master/src/Request/Accounts/UpdateAccountRequest.php) object as its second parameter.
```php
$newAccount = new UpdateAccountRequest();
$newAccount->setManaged(false);
$request = $stripe->accounts->updateAccount($accountId, $newAccount);
```

## Delete an account
```php
$stripe->accounts->deleteAccount("$accountId");
```

## List accounts
```php
$accounts = $stripe->accounts->listAccounts();
```