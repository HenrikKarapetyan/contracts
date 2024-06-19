<?php

namespace Henrik\Contracts\Console;

use Psr\Container\ContainerInterface;

interface CommandsContainerInterface extends ContainerInterface
{
    public function set(string $id, mixed $value): void;

    /** @return  array<string, CommandDefinitionInterface> */
    public function getAll(): array;
}