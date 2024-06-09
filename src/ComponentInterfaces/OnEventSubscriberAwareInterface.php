<?php

namespace Henrik\Contracts\ComponentInterfaces;

interface OnEventSubscriberAwareInterface
{
    /**
     * The declaration of this array must be like this
     * [
     *      'eventDispatcherDefinitionId' => [
     *          'subscriberDefinitionId_1',
     *          ''subscriberDefinitionId_2',
     *          ...,
     *          ]
     * ].
     *
     * @return array<string, array<string>>
     */
    public function getEventSubscribers(): array;
}