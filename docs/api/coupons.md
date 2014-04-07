# [Coupons](https://github.com/jlinn/stripe-api-php/blob/master/src/Api/Coupons.php)
## Create a coupon
The `createCoupon()` method takes a [`CreateCouponRequest`](https://github.com/jlinn/stripe-api-php/blob/master/src/Request/Coupons/CreateCouponRequest.php) object as its only parameter.
```php
$request = $stripe->coupons->createCouponRequest("once")->setPercentOff(50);
$stripe->coupons->createCoupon($request);
```

## Retrieve a coupon
```php
$coupon = $stripe->coupons->getCoupon("coupon_id");
```

## Delete a coupon
```php
$stripe->coupons->deleteCoupon("coupon_id");
```

## List coupons
```php
$coupons = $stripe->coupons->listCoupons();
```