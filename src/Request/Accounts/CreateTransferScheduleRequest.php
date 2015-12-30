<?php


namespace Stripe\Request\Accounts;


class CreateTransferScheduleRequest
{

    /**
     * @var integer
     */
    protected $delayDays;

    /**
     * @var string Options are daily, weekly, or monthly
     */
    protected $interval;

    /**
     * @var integer
     */
    protected $monthlyAnchor;

    /**
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
     * @return CreateTransferScheduleRequest
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
     * @return CreateTransferScheduleRequest
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
     * @return CreateTransferScheduleRequest
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
     * @return CreateTransferScheduleRequest
     */
    public function setWeeklyAnchor($weeklyAnchor)
    {
        $this->weeklyAnchor = $weeklyAnchor;
        return $this;
    }

}