<?php


namespace Stripe\Request\LegalEntity;

use DateTime;

class CreateDOBRequest
{

    /**
     * @var int
     */
    protected $day;

    /**
     * @var int
     */
    protected $month;

    /**
     * @var int
     */
    protected $year;

    public function __construct(DateTime $dob)
    {
        $this->day = $dob->format('j');
        $this->month = $dob->format('n');
        $this->year = $dob->format('Y');
    }

    /**
     * @return int
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * @param int $day
     * @return CreateDOBRequest
     */
    public function setDay($day)
    {
        $this->day = $day;
        return $this;
    }

    /**
     * @return int
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * @param int $month
     * @return CreateDOBRequest
     */
    public function setMonth($month)
    {
        $this->month = $month;
        return $this;
    }

    /**
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param int $year
     * @return CreateDOBRequest
     */
    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }

}