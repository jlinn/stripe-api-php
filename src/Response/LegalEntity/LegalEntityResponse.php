<?php


namespace Stripe\Response\LegalEntity;


use JMS\Serializer\Annotation\Type;

class LegalEntityResponse
{
    /**
     * @Type("array")
     * @var array
     */
    protected $additionalOwners;

    /**
     * @Type("Stripe\Response\LegalEntity\AddressResponse")
     * @var AddressResponse
     */
    protected $address;

    /**
     * @Type("string")
     * @var string
     */
    protected $businessName;

    /**
     * @Type("Stripe\Response\LegalEntity\DOBResponse")
     * @var DOBResponse
     */
    protected $dob;

    /**
     * @Type("string")
     * @var string
     */
    protected $firstName;

    /**
     * @Type("string")
     * @var string
     */
    protected $lastName;

    /**
     * @Type("Stripe\Response\LegalEntity\AddressResponse")
     * @var AddressResponse
     */
    protected $personalAddress;

    /**
     * @Type("string")
     * @var string
     */
    protected $personalIdNumberProvided;

    /**
     * @Type("string")
     * @var string
     */
    protected $ssnLast4Provided;

    /**
     * @Type("string")
     * @var string individual or company should be provided
     */
    protected $type;

    /**
     * @Type("array")
     * @var array
     */
    protected $verification;

    /**
     * @return array
     */
    public function getAdditionalOwners()
    {
        return $this->additionalOwners;
    }

    /**
     * @param array $additionalOwners
     * @return LegalEntityResponse
     */
    public function setAdditionalOwners($additionalOwners)
    {
        $this->additionalOwners = $additionalOwners;
        return $this;
    }

    /**
     * @return AddressResponse
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return LegalEntityResponse
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getBusinessName()
    {
        return $this->businessName;
    }

    /**
     * @param string $businessName
     * @return LegalEntityResponse
     */
    public function setBusinessName($businessName)
    {
        $this->businessName = $businessName;
        return $this;
    }

    /**
     * @return DOBResponse
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @param DOBResponse $dob
     * @return LegalEntityResponse
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return LegalEntityResponse
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return LegalEntityResponse
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return AddressResponse
     */
    public function getPersonalAddress()
    {
        return $this->personalAddress;
    }

    /**
     * @param AddressResponse $personalAddress
     * @return LegalEntityResponse
     */
    public function setPersonalAddress($personalAddress)
    {
        $this->personalAddress = $personalAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getPersonalIdNumberProvided()
    {
        return $this->personalIdNumberProvided;
    }

    /**
     * @param string $personalIdNumberProvided
     * @return LegalEntityResponse
     */
    public function setPersonalIdNumberProvided($personalIdNumberProvided)
    {
        $this->personalIdNumberProvided = $personalIdNumberProvided;
        return $this;
    }

    /**
     * @return string
     */
    public function getSsnLast4Provided()
    {
        return $this->ssnLast4Provided;
    }

    /**
     * @param string $ssnLast4Provided
     * @return LegalEntityResponse
     */
    public function setSsnLast4Provided($ssnLast4Provided)
    {
        $this->ssnLast4Provided = $ssnLast4Provided;
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
     * @param string $type
     * @return LegalEntityResponse
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return array
     */
    public function getVerification()
    {
        return $this->verification;
    }

    /**
     * @param array $verification
     * @return LegalEntityResponse
     */
    public function setVerification($verification)
    {
        $this->verification = $verification;
        return $this;
    }
}