<?php

namespace Henrik\Contracts\Console;

use Psr\Container\ContainerInterface;

interface CommandsContainerInterface extends ContainerInterface
{
    public function set(string $id, mixed $value): void;
}