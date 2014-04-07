# [Invoices](https://github.com/jlinn/stripe-api-php/blob/master/src/Api/Invoices.php)
## Create an invoice
The `createInvoice()` method takes a [`CreateInvoiceRequest`](https://github.com/jlinn/stripe-api-php/blob/master/src/Request/Invoices/CreateInvoiceRequest.php) object as its only parameter.
```php
$request = $stripe->invoices->createInvoiceRequest("customer_id");
$stripe->invoices->createInvoice($request);
```

## Retrieve an invoice
```php
$invoice = $stripe->invoices->getInvoice("invoice_id");
```

## Update an invoice
```php
$stripe->invoices->updateInvoice("invoice_id", null, false, "New description.");
```

## Pay an invoice
```php
$stripe->invoices->payInvoice("invoice_id");
```

## List invoices
```php
$invoices = $stripe->invoices->listInvoices();
```