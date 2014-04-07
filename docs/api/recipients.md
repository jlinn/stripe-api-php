# [Recipients](https://github.com/jlinn/stripe-api-php/blob/master/src/Api/Recipients.php)
## Create a recipient
The `createRecipient()` method takes a [`CreateRecipientRequest`](https://github.com/jlinn/stripe-api-php/blob/master/src/Request/Recipients/CreateRecipientRequest.php) object as its only parameter.
```php
$request = $stripe->recipients->createRecipientRequest("Robert Loblaw", "individual")
	->setBankAccount("US", "110000000", "000123456789");
$stripe->recipients->createRecipient($request);
```

## Retrieve a recipient
```php
$recipient = $stripe->recipients->getRecipient("recipient_id");
```

## Update a recipient
The `updateRecipient()` method takes an [`UpdateRecipientRequest`](https://github.com/jlinn/stripe-api-php/blob/master/src/Request/Recipients/UpdateRecipientRequest.php) object as its second parameter.
```php
$request = $stripe->recipients->updateRecipientRequest()->setEmail("bob@loblaw.com");
$stripe->recipients->updateRecipient("recipient_id", $request);
```

## Delete a recipient
```php
$stripe->recipients->deleteRecipient("recipient_id");
```

## List recipients
```php
$recipients = $stripe->recipients->listRecipients();
```