<?php

namespace Henrik\Contracts\Console;

interface CommandProcessorInterface
{
    /**
     * @param string                $command
     * @param array<string, scalar> $args
     *
     * @return void
     */
    public function process(string $command, array $args): void;
}