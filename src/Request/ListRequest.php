<?php
/**
 * User: Joe Linn
 * Date: 1/27/2015
 * Time: 5:56 PM
 */

namespace Stripe\Request;


class ListRequest {
    /**
     * @var int|Created
     */
    protected $created;

    /**
     * @var string
     */
    protected $endingBefore;

    /**
     * @var integer
     */
    protected $limit;

    /**
     * @var string
     */
    protected $startingAfter;

    /**
     * @return int|Created
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param int|Created $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndingBefore()
    {
        return $this->endingBefore;
    }

    /**
     * @param string $endingBefore
     * @return $this
     */
    public function setEndingBefore($endingBefore)
    {
        $this->endingBefore = $endingBefore;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartingAfter()
    {
        return $this->startingAfter;
    }

    /**
     * @param string $startingAfter
     * @return $this
     */
    public function setStartingAfter($startingAfter)
    {
        $this->startingAfter = $startingAfter;
        return $this;
    }

    /**
     * Convert the properties of this object to a querystring-ready (one-dimensional) array
     * @return array
     */
    public function toParams()
    {
        $params = array();
        if (!is_null($this->created)) {
            if ($this->created instanceof Created) {
                $params = $this->created->toParams();
            } else {
                $params["created"] = $this->created;
            }
        }
        if (!is_null($this->endingBefore)) {
            $params["ending_before"] = $this->endingBefore;
        }
        if (!is_null($this->limit)) {
            $params["limit"] = $this->limit;
        }
        if (!is_null($this->startingAfter)) {
            $params["starting_after"] = $this->startingAfter;
        }
        return $params;
    }

}