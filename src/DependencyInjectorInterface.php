<?php

namespace Hk\Contracts;

interface DependencyInjectorInterface
{
    /**
     * @param array<string, array<string, int|string>>|string $services
     *
     * @return void
     */
    public function load(array|string $services): void;

    public function get(string $id, bool $throwError = true): mixed;

    public function has(string $getName): bool;

    public function dumpContainer(): void;

    public function setMode(InjectorModesInterface $mode): void;

    public function getMode(): InjectorModesInterface;

    /**
     * @param object               $obj
     * @param array<string, mixed> $params
     *
     * @return object
     */
    public function initializeParams(object $obj, array $params): object;
}