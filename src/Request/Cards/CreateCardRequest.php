<?php
/**
 * User: Joe Linn
 * Date: 3/20/2014
 * Time: 2:39 PM
 */

namespace Stripe\Request\Cards;


class CreateCardRequest extends UpdateCardRequest
{
    protected $number;

    protected $cvc;

    /**
     * @param string $number
     * @param int $expMonth
     * @param int $expYear
     * @param mixed $cvc
     */
    public function __construct($number, $expMonth, $expYear, $cvc = null)
    {
        $this->number = $number;
        $this->expMonth = $expMonth;
        $this->expYear = $expYear;
        $this->cvc = $cvc;
    }

    /**
     * @return mixed
     */
    public function getCvc()
    {
        return $this->cvc;
    }

    /**
     * @param mixed $cvc
     * @return $this
     */
    public function setCvc($cvc)
    {
        $this->cvc = $cvc;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

}