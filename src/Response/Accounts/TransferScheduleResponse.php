<?php


namespace Stripe\Response\Accounts;


use JMS\Serializer\Annotation\Type;

class TransferScheduleResponse
{
    /**
     * @Type("integer")
     * @var integer
     */
    protected $delayDays;

    /**
     * @Type("string")
     * @var string Options are daily, weekly, or monthly
     */
    protected $interval;

    /**
     * @Type("integer")
     * @var integer
     */
    protected $monthlyAnchor;

    /**
     * @Type("string")
     * @var string
     */
    protected $weeklyAnchor;

    /**
     * @return int
     */
    public function getDelayDays()
    {
        return $this->delayDays;
    }

    /**
     * @param int $delayDays
     * @return TransferScheduleResponse
     */
    public function setDelayDays($delayDays)
    {
        $this->delayDays = $delayDays;
        return $this;
    }

    /**
     * @return string
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * @param string $interval
     * @return TransferScheduleResponse
     */
    public function setInterval($interval)
    {
        $this->interval = $interval;
        return $this;
    }

    /**
     * @return int
     */
    public function getMonthlyAnchor()
    {
        return $this->monthlyAnchor;
    }

    /**
     * @param int $monthlyAnchor
     * @return TransferScheduleResponse
     */
    public function setMonthlyAnchor($monthlyAnchor)
    {
        $this->monthlyAnchor = $monthlyAnchor;
        return $this;
    }

    /**
     * @return string
     */
    public function getWeeklyAnchor()
    {
        return $this->weeklyAnchor;
    }

    /**
     * @param string $weeklyAnchor
     * @return TransferScheduleResponse
     */
    public function setWeeklyAnchor($weeklyAnchor)
    {
        $this->weeklyAnchor = $weeklyAnchor;
        return $this;
    }

}