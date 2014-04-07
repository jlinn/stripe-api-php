# [Invoice Items](https://github.com/jlinn/stripe-api-php/blob/master/src/Api/InvoiceItems.php)
## Create an invoice item
The `createInvoiceItem()` method takes a [`CreateInvoiceItemRequest`](https://github.com/jlinn/stripe-api-php/blob/master/src/Request/InvoiceItems/CreateInvoiceItemRequest.php) object as its only parameter.
```php
$request = $stripe->invoiceItems->createInvoiceItemRequest("customer_id", 350, "usd");
$stripe->invoiceItems->createInvoiceItem($requet);
```

## Retrieve an invoice item
```php
$item = $stripe->invoiceItems->getInvoiceItem("invoice_item_id");
```

## Update an invoice item
```php
$stripe->invoiceItems->updateInvoiceItem("invoice_item_id", 500, "New description.");
```

## Delete an invoice item
```php
$stripe->invoiceItems->deleteInvoiceItem("invoice_item_id");
```

## List invoice items
```php
$items = $stripe->invoiceItems->listInvoiceItems();
```