# [Plans](https://github.com/jlinn/stripe-api-php/blob/master/src/Api/Plans.php)
## Create a plan
The `createPlan()` method takes a [`CreatePlanRequest`](https://github.com/jlinn/stripe-api-php/blob/master/src/Request/Plans/CreatePlanRequest.php) object as its only parameter.
```php
$request = $stripe->createPlanRequest("plan_name", 350, "usd", "month", "A new plan.");
$stripe->plans->createPlan($request);
```

## Retrieve a plan
```php
$plan = $stripe->plans->getPlan("plan_id");
```

## Update a plan
```php
$stripe->plans->updatePlan("plan_id", "New plan name.");
```

## Delete a plan
```php
$stripe->plans->deletePlan("plan_id");
```

## List plans
```php
$plans = $stripe->plans->listPlans();
```