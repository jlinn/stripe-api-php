<?php
/**
 * User: Don Gilbert
 * Date: 3/27/2014
 * Time: 4:50 PM
 */

namespace Stripe\Response\Tokens;

use JMS\Serializer\Annotation\Type;

class TokenResponse
{
    /**
     * @Type("string")
     * @var string
     */
    protected $id;

    /**
     * @Type("boolean")
     * @var bool
     */
    protected $livemode;

    /**
     * @Type("integer")
     * @var int
     */
    protected $created;

    /**
     * @Type("boolean")
     * @var bool
     */
    protected $used;

    /**
     * @Type("string")
     * @var string
     */
    protected $object;

    /**
     * @Type("string")
     * @var string
     */
    protected $type;

    /**
     * @Type("Stripe\Response\Tokens\CardResponse")
     * @var CardResponse
     */
    protected $card;

    /**
     * @Type("Stripe\Response\Tokens\BankAccountResponse")
     * @var BankAccountResponse
     */
    protected $bankAccount;

    /**
     * @param BankAccountResponse $bankAccount
     * @return $this
     */
    public function setBankAccount($bankAccount)
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }

    /**
     * @return BankAccountResponse
     */
    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    /**
     * @param CardResponse $card
     * @return $this
     */
    public function setCard($card)
    {
        $this->card = $card;
        return $this;
    }

    /**
     * @return CardResponse
     */
    public function getCard()
    {
        return $this->card;
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
     * @return int
     */
    public function getCreated()
    {
        return $this->created;
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
     * @return string
     */
    public function getId()
    {
        return $this->id;
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
     * @return boolean
     */
    public function getLivemode()
    {
        return $this->livemode;
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
     * @return string
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param boolean $used
     * @return $this
     */
    public function setUsed($used)
    {
        $this->used = $used;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUsed()
    {
        return $this->used;
    }


}
