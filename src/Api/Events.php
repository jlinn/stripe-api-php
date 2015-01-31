<?php
/**
 * User: Joe Linn
 * Date: 3/31/2014
 * Time: 6:29 PM
 */

namespace Stripe\Api;


use Stripe\Request\Events\ListEventsRequest;
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
     * @param ListEventsRequest $request
     * @return ListEventsResponse
     * @link https://stripe.com/docs/api#list_events
     */
    public function listEvents(ListEventsRequest $request = null)
    {
        return $this->client->get($this->buildUrl(), self::LIST_EVENTS_RESPONSE_CLASS, null, $this->listRequestToParams($request));
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