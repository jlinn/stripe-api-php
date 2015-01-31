<?php
/**
 * User: Joe Linn
 * Date: 1/27/2015
 * Time: 6:00 PM
 */

namespace Stripe\Request;


class Created {
    /**
     * @var int
     */
    protected $gt;

    /**
     * @var int
     */
    protected $gte;

    /**
     * @var int
     */
    protected $lt;

    /**
     * @var int
     */
    protected $lte;

    /**
     * @return int
     */
    public function getGt()
    {
        return $this->gt;
    }

    /**
     * @param int $gt
     * @return $this
     */
    public function setGt($gt)
    {
        $this->gt = $gt;
        return $this;
    }

    /**
     * @return int
     */
    public function getGte()
    {
        return $this->gte;
    }

    /**
     * @param int $gte
     * @return $this
     */
    public function setGte($gte)
    {
        $this->gte = $gte;
        return $this;
    }

    /**
     * @return int
     */
    public function getLt()
    {
        return $this->lt;
    }

    /**
     * @param int $lt
     * @return $this
     */
    public function setLt($lt)
    {
        $this->lt = $lt;
        return $this;
    }

    /**
     * @return int
     */
    public function getLte()
    {
        return $this->lte;
    }

    /**
     * @param int $lte
     * @return $this
     */
    public function setLte($lte)
    {
        $this->lte = $lte;
        return $this;
    }

    /**
     * @return array
     */
    public function toParams()
    {
        $params = array();
        if (!is_null($this->gt)) {
            $params[$this->getParamName("gt")] = $this->gt;
        }
        if (!is_null($this->gte)) {
            $params[$this->getParamName("gte")] = $this->gte;
        }
        if (!is_null($this->lt)) {
            $params[$this->getParamName("lt")] = $this->lt;
        }
        if (!is_null($this->lte)) {
            $params[$this->getParamName("lte")] = $this->lte;
        }
        return $params;
    }

    /**
     * @param string $propertyName
     * @return string
     */
    protected function getParamName($propertyName)
    {
        return "created[" . $propertyName . "]";
    }
}