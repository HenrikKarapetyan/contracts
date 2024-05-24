<?php

namespace Henrik\Contracts;

abstract class BaseComponent implements ComponentInterface
{
    public function getServices(): array
    {
        return [];
    }

    public function getControllersPath(): string
    {
        return '';
    }

    public function getTemplatesPath(): string
    {
        return '';
    }

    public function getEventSubscribers(): array
    {
        return [];
    }

    public function dependsOn(): array
    {
        return [];
    }

    public function getAttributesAndParsers(): array
    {
        return [];
    }
}