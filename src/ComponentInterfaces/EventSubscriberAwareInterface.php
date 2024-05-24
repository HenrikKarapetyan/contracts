<?php

namespace Henrik\Contracts\ComponentInterfaces;

interface EventSubscriberAwareInterface
{
    /**
     * The declaration of this array must be like this
     * ['eventDispatcherDefinitionId' => 'subscriber'].
     *
     * @return array<string, string>
     */
    public function getEventSubscribers(): array;
}