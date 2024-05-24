<?php

namespace Henrik\Contracts\ComponentInterfaces;

interface EventAwareInterface
{
    /**
     * @return array<string>
     */
    public function getEventSubscribers(): array;
}