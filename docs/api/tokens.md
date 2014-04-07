# [Tokens](https://github.com/jlinn/stripe-api-php/blob/master/src/Api/Tokens.php)
## Create a card token
The `createCardToken()` method takes a [`CreateCardTokenRequest`](https://github.com/jlinn/stripe-api-php/blob/master/src/Request/Tokens/CreateCardTokenRequest.php) object as its only parameter.
```php
$request = $stripe->tokens->createCardTokenRequest("4242424242424242", 1, 2020);
$stripe->tokens->createCardToken($request);
```

## Create a bank account token
The `createBankAccountToken()` method takes a [`CreateBankAccountTokenRequest`](https://github.com/jlinn/stripe-api-php/blob/master/src/Request/Tokens/CreateBankAccountTokenRequest.php) object as its only parameter.
```php
$request = $stripe->tokens->createBankAccountTokenRequest("US", "110000000", "000123456789");
$stripe->tokens->createBankAccountToken($request);
```

## Retrieve a token
```php
$token = $stripe->tokens->getTOken("token_id");
```