<?php
/**
 * User: Joe Linn
 * Date: 3/20/2014
 * Time: 12:33 PM
 */

namespace Stripe;


use Exception;

/**
 * Class StripeException
 * @package Stripe
 * @link https://stripe.com/docs/api/curl#errors
 */
class StripeException extends \Exception
{
    protected $status;

    protected $type;

    protected $cardErrorCode;

    protected $param;

    /**
     * @param string $message
     * @param int $status
     * @param string $type
     * @param string $code
     * @param string $param
     * @param Exception $previous
     */
    public function __construct($message, $status, $type, $code = null, $param = null, Exception $previous = null)
    {
        parent::__construct($message, $status, $previous);
        $this->type = $type;
        $this->status = $status;
        $this->cardErrorCode = $code;
        $this->param = $param;
    }

    /**
     * @return string For card errors, a short string from amongst those listed on the right describing the kind of card error that occurred.
     */
    public function getCardErrorCode()
    {
        return $this->cardErrorCode;
    }

    /**
     * @return string The parameter the error relates to if the error is parameter-specific.
     */
    public function getParam()
    {
        return $this->param;
    }

    /**
     * @return int the HTTP status code returned
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string the type of error returned
     */
    public function getType()
    {
        return $this->type;
    }


} 