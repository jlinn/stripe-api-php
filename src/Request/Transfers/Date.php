<?php
/**
 * User: Joe Linn
 * Date: 1/30/2015
 * Time: 6:05 PM
 */

namespace Stripe\Request\Transfers;


use Stripe\Request\Created;

class Date extends Created
{
    /**
     * @param string $propertyName
     * @return string
     */
    protected function getParamName($propertyName)
    {
        return "date[" . $propertyName . "]";
    }
}