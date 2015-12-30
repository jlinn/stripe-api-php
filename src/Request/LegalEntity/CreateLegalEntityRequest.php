<?php


namespace Stripe\Request\LegalEntity;


class CreateLegalEntityRequest
{

    /**
     * @var array
     */
    protected $additionalOwners;

    /**
     * @var string
     */
    protected $address;

    /**
     * @var string
     */
    protected $businessName;

    /**
     * @var CreateDOBRequest
     */
    protected $dob;

    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @var CreateAddressRequest
     */
    protected $personalAddress;

    /**
     * @var string
     */
    protected $personalIdNumberProvided;

    /**
     * @var string
     */
    protected $ssnLast4Provided;

    /**
     * @var string individual or company should be provided
     */
    protected $type;

    /**
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
     * @return CreateLegalEntityRequest
     */
    public function setAdditionalOwners($additionalOwners)
    {
        $this->additionalOwners = $additionalOwners;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return CreateLegalEntityRequest
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
     * @return CreateLegalEntityRequest
     */
    public function setBusinessName($businessName)
    {
        $this->businessName = $businessName;
        return $this;
    }

    /**
     * @return CreateDOBRequest
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @param CreateDOBRequest $dob
     * @return CreateLegalEntityRequest
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
     * @return CreateLegalEntityRequest
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
     * @return CreateLegalEntityRequest
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return CreateAddressRequest
     */
    public function getPersonalAddress()
    {
        return $this->personalAddress;
    }

    /**
     * @param CreateAddressRequest $personalAddress
     * @return CreateLegalEntityRequest
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
     * @return CreateLegalEntityRequest
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
     * @return CreateLegalEntityRequest
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
     * @return CreateLegalEntityRequest
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
     * @return CreateLegalEntityRequest
     */
    public function setVerification($verification)
    {
        $this->verification = $verification;
        return $this;
    }

}