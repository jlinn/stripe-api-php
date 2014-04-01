<?php
/**
 * User: Joe Linn
 * Date: 3/31/2014
 * Time: 6:38 PM
 */

namespace Stripe\Tests\Api;


use Stripe\Api\Events;
use Stripe\Tests\StripeTestCase;

class EventsTest extends StripeTestCase
{
    /**
     * @var Events
     */
    protected $events;

    protected function setUp()
    {
        parent::setUp();
        $this->events = new Events($this->client);
    }

    public function testListEvents()
    {
        $list = $this->events->listEvents();

        $this->assertInstanceOf(Events::LIST_EVENTS_RESPONSE_CLASS, $list);

        foreach ($list->getData() as $event) {
            $this->assertInstanceOf(Events::EVENT_RESPONSE_CLASS, $event);
        }
    }

    public function testGetEvent()
    {
        $list = $this->events->listEvents();

        if (sizeof($list->getData()) > 0) {
            $data = $list->getData();
            $eventId = $data[0]->getId();
            $event = $this->events->getEvent($eventId);

            $this->assertInstanceOf(Events::EVENT_RESPONSE_CLASS, $event);
            $this->assertEquals($eventId, $event->getId());
        }
    }
}
 