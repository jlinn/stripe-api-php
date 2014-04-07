# [Cards](https://github.com/jlinn/stripe-api-php/blob/master/src/Api/Cards.php)
## Create a card from a token
```php
$stripe->cards->createCardFromToken("customer_id", "token");
```

## Create a card
The `createCard()` method takes a [`CreateCardRequest`](https://github.com/jlinn/stripe-api-php/blob/master/src/Request/Cards/CreateCardRequest.php) object as its only parameter.
```php
$request = $stripe->cards->createCardRequest("4242424242424242", 1, 2020);
$card = $stripe->cards->createCard("customer_id", $request);
```

## Update a card
Like `createCard()`, `updateCard()` takes an [`UpdateCardRequest`](https://github.com/jlinn/stripe-api-php/blob/master/src/Request/Cards/UpdateCardRequest.php) object.
```php
$request = $stripe->cards->updateCardRequest()->setExpMonth(3)->setExpYear(2031);
$stripe->cards->updateCard("customer_id", $card->getId(), $request); 
```

## Retrieve a card
```php
$card = $stripe->cards->getCard("customer_id", "card_id");
```

## Delete a card
```php
$stripe->cards->deleteCard("customer_id", "card_id");
```

## List all cards associated with the given customer
```php
$cards = $stripe->cards->listCards("customer_id");
```