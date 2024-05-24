<?php

namespace Henrik\Contracts\ComponentInterfaces;

interface EventSubscriberAwareInterface
{
    /**
     * @return array<string>
     */
    public function getEventSubscribers(): array;
}