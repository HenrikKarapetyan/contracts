<?php

namespace Hk\Contracts;

class BaseComponent implements ComponentInterface
{
    private string $basePath;

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

    public function setBasePath(string $basePath): void
    {
        $this->basePath = $basePath;
    }

    public function getBasePath(): string
    {
        return $this->basePath;
    }
}