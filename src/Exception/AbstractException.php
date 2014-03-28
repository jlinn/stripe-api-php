<?php
/**
 * User: Joe Linn
 * Date: 3/21/2014
 * Time: 10:22 AM
 */

namespace Stripe\Exception;


use Stripe\StripeException;

abstract class AbstractException extends StripeException
{
    public function __construct(StripeException $e)
    {
        parent::__construct($e->getMessage(), $e->getStatus(), $e->getCardErrorCode(), $e->getParam(), $e);
    }
} 