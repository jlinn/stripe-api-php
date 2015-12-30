<?php


namespace Stripe\Request\Accounts;

use DateTime;

class CreateTOSAcceptance
{
    /**
     * @var DateTime
     */
    protected $date;

    /**
     * @var string
     */
    protected $ip;

    /**
     * @var string
     */
    protected $userAgent;

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     * @return CreateTOSAcceptance
     */
    public function setDate(DateTime $date)
    {
        $this->date = $date->getTimestamp();
        return $this;
    }

    /**
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     * @return CreateTOSAcceptance
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * @param string $userAgent
     * @return CreateTOSAcceptance
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;
        return $this;
    }

}