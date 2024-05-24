<?php

declare(strict_types=1);

namespace Henrik\Contracts;

interface ComponentInterface
{
    /**
     * @return array<string, array<mixed>> $services
     */
    public function getServices(): array;

    public function getControllersPath(): string;

    public function getTemplatesPath(): string;

    /**
     * @return array<string>
     */
    public function getEventSubscribers(): array;

    /**
     * @return array<string>
     */
    public function dependsOn(): array;

    /**
     * @return array<string, string>
     */
    public function getAttributesAndParsers(): array;
}