<?php
/**
 * User: Joe Linn
 * Date: 3/31/2014
 * Time: 6:29 PM
 */

namespace Stripe\Api;


use Stripe\Response\Events\EventResponse;
use Stripe\Response\Events\ListEventsResponse;

class Events extends AbstractApi
{
    const EVENT_RESPONSE_CLASS = 'Stripe\Response\Events\EventResponse';
    const LIST_EVENTS_RESPONSE_CLASS = 'Stripe\Response\Events\ListEventsResponse';

    /**
     * @param string $eventId
     * @return EventResponse
     * @link https://stripe.com/docs/api#retrieve_event
     */
    public function getEvent($eventId)
    {
        return $this->client->get($this->buildUrl($eventId), self::EVENT_RESPONSE_CLASS);
    }

    /**
     * @param string|array $created
     * @param string $type
     * @param int $limit
     * @param string $startingAfter
     * @return ListEventsResponse
     * @link https://stripe.com/docs/api#list_events
     */
    public function listEvents($created = null, $type = null, $limit = 10, $startingAfter = null)
    {
        $request = array('limit' => $limit);
        if (!is_null($created)) {
            $request['created'] = $created;
        }
        if (!is_null($type)) {
            $request['type'] = $type;
        }
        if (!is_null($startingAfter)) {
            $request['starting_after'] = $startingAfter;
        }
        return $this->client->get($this->buildUrl(), self::LIST_EVENTS_RESPONSE_CLASS, null, $request);
    }

    /**
     * @param string $eventId
     * @return string
     */
    protected function buildUrl($eventId = null)
    {
        $url = 'events';
        if (!is_null($eventId)) {
            $url .= '/' . $eventId;
        }
        return $url;
    }
} 