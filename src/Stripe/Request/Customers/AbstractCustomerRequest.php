<?php
/**
 * User: Joe Linn
 * Date: 3/21/2014
 * Time: 11:53 AM
 */

namespace Stripe\Request\Customers;


use Stripe\Request\Cards\CreateCardRequest;


abstract class AbstractCustomerRequest
{
    /**
     *
     * @var int
     */
    protected $accountBalance;

    /**
     * @var string|CreateCardRequest
     */
    protected $card;

    /**
     * @var string
     */
    protected $coupon;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var array
     */
    protected $metadata;

    /**
     * @return int
     */
    public function getAccountBalance()
    {
        return $this->accountBalance;
    }

    /**
     * @param int $accountBalance
     * @return $this
     */
    public function setAccountBalance($accountBalance)
    {
        $this->accountBalance = $accountBalance;
        return $this;
    }

    /**
     * @return string|CreateCardRequest
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * @param string|CreateCardRequest $card
     * @return $this
     */
    public function setCard($card)
    {
        $this->card = $card;
        return $this;
    }

    /**
     * @return string
     */
    public function getCoupon()
    {
        return $this->coupon;
    }

    /**
     * @param string $coupon
     * @return $this
     */
    public function setCoupon($coupon)
    {
        $this->coupon = $coupon;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return array
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param array $metadata
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;
        return $this;
    }


} 