<?php
/**
 * User: Don Gilbert
 * Date: 3/27/2014
 * Time: 9:06 AM
 */

namespace Stripe\Request\Invoices;


class CreateInvoiceRequest
{
    /**
     * @var string
     */
    protected $customer;

    /**
     * @var int
     */
    protected $applicationFee;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var array
     */
    protected $metadata;

    /**
     * @var string
     */
    protected $subscription;

    /**
     * @param string $customer
     */
    public function __construct($customer)
    {
        $this->setCustomer($customer);
    }

    /**
     * @param int $applicationFee
     * @return $this
     */
    public function setApplicationFee($applicationFee)
    {
        $this->applicationFee = $applicationFee;
        return $this;
    }

    /**
     * @return int
     */
    public function getApplicationFee()
    {
        return $this->applicationFee;
    }

    /**
     * @param string $customer
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomer()
    {
        return $this->customer;
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
    public function getDescription()
    {
        return $this->description;
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
     * @return array
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param string $subscription
     * @return $this
     */
    public function setSubscription($subscription)
    {
        $this->subscription = $subscription;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubscription()
    {
        return $this->subscription;
    }


}
