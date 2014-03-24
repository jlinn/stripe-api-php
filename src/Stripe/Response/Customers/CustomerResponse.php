<?php
/**
 * User: Joe Linn
 * Date: 3/21/2014
 * Time: 4:46 PM
 */

namespace Stripe\Response\Customers;


use JMS\Serializer\Annotation\Type;
use Stripe\Response\Cards\ListCardsResponse;
use Stripe\Response\Discounts\DiscountResponse;
use Stripe\Response\Subscriptions\ListSubscriptionsResponse;

class CustomerResponse
{
    /**
     * @Type("string")
     * @var string
     */
    protected $id;

    /**
     * @Type("string")
     * @var string
     */
    protected $object;

    /**
     * @Type("boolean")
     * @var bool
     */
    protected $livemode;

    /**
     * @Type("Stripe\Response\Cards\ListCardsResponse")
     * @var ListCardsResponse
     */
    protected $cards;

    /**
     * @Type("integer")
     * @var int
     */
    protected $created;

    /**
     * @Type("integer")
     * @var int
     */
    protected $accountBalance;

    /**
     * @Type("string")
     * @var string
     */
    protected $currency;

    /**
     * @Type("string")
     * @var string
     */
    protected $defaultCard;

    /**
     * @Type("boolean")
     * @var bool
     */
    protected $delinquent;

    /**
     * @Type("string")
     * @var string
     */
    protected $description;

    /**
     * @Type("Stripe\Response\Discounts\DiscountResponse")
     * @var DiscountResponse
     */
    protected $discount;

    /**
     * @Type("string")
     * @var string
     */
    protected $email;

    /**
     * @Type("array")
     * @var array
     */
    protected $metadata;

    /**
     * @Type("Stripe\Response\Subscriptions\ListSubscriptionsResponse")
     * @var ListSubscriptionsResponse
     */
    protected $subscriptions;

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
     * @return \Stripe\Response\Cards\ListCardsResponse
     */
    public function getCards()
    {
        return $this->cards;
    }

    /**
     * @param \Stripe\Response\Cards\ListCardsResponse $cards
     * @return $this
     */
    public function setCards($cards)
    {
        $this->cards = $cards;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param int $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultCard()
    {
        return $this->defaultCard;
    }

    /**
     * @param string $defaultCard
     * @return $this
     */
    public function setDefaultCard($defaultCard)
    {
        $this->defaultCard = $defaultCard;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDelinquent()
    {
        return $this->delinquent;
    }

    /**
     * @param boolean $delinquent
     * @return $this
     */
    public function setDelinquent($delinquent)
    {
        $this->delinquent = $delinquent;
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
     * @return DiscountResponse
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param DiscountResponse $discount
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
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
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getLivemode()
    {
        return $this->livemode;
    }

    /**
     * @param boolean $livemode
     * @return $this
     */
    public function setLivemode($livemode)
    {
        $this->livemode = $livemode;
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

    /**
     * @return string
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param string $object
     * @return $this
     */
    public function setObject($object)
    {
        $this->object = $object;
        return $this;
    }

    /**
     * @return ListSubscriptionsResponse
     */
    public function getSubscriptions()
    {
        return $this->subscriptions;
    }

    /**
     * @param ListSubscriptionsResponse $subscriptions
     * @return $this
     */
    public function setSubscriptions($subscriptions)
    {
        $this->subscriptions = $subscriptions;
        return $this;
    }


} 