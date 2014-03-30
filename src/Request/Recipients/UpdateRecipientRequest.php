<?php
/**
 * User: Joe Linn
 * Date: 3/29/2014
 * Time: 6:18 PM
 */

namespace Stripe\Request\Recipients;


class UpdateRecipientRequest
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $taxId;

    /**
     * @var array
     */
    protected $bankAccount;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var array
     */
    protected $metadata;

    /**
     * @return array
     */
    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    /**
     * @param string $country
     * @param int $routingNumber
     * @param int $accountNumber
     * @return $this
     */
    public function setBankAccount($country, $routingNumber, $accountNumber)
    {
        $this->bankAccount = array(
            'country' => $country,
            'routing_number' => $routingNumber,
            'account_number' => $accountNumber
        );
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

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxId()
    {
        return $this->taxId;
    }

    /**
     * @param string $taxId
     * @return $this
     */
    public function setTaxId($taxId)
    {
        $this->taxId = $taxId;
        return $this;
    }


} 