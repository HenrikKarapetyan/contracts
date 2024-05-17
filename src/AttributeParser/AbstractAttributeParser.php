<?php

namespace Hk\Contracts\AttributeParser;

use Hk\Contracts\CoreEvents;
use Hk\Contracts\EventInterface;
use Hk\Contracts\EventSubscriberInterface;

abstract class AbstractAttributeParser implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            CoreEvents::PARSE_ATTRIBUTES => 'onParseAttributes',
        ];
    }

    abstract public function onParseAttributes(EventInterface $event): void;
}