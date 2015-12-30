<?php


namespace Stripe\Response\LegalEntity;


use JMS\Serializer\Annotation\Type;

class DOBResponse
{
    /**
     * @Type("integer")
     * @var int
     */
    protected $day;

    /**
     * @Type("integer")
     * @var int
     */
    protected $month;

    /**
     * @Type("integer")
     * @var int
     */
    protected $year;

    /**
     * @return int
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * @param int $day
     * @return DOBResponse
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
     * @return DOBResponse
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
     * @return DOBResponse
     */
    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }

}