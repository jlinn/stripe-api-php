<?php
/**
 * User: Joe Linn
 * Date: 1/27/2015
 * Time: 9:05 PM
 */

namespace Stripe\Request\Balance;


use Stripe\Request\Created;

class AvailableOn extends Created
{
    /**
     * @param string $propertyName
     * @return string
     */
    protected function getParamName($propertyName)
    {
        return "available_on[" . $propertyName . "]";
    }

}