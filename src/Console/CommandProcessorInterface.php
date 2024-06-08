<?php

namespace Henrik\Contracts\Console;

interface CommandProcessorInterface
{
    /**
     * @param string                $command
     *
     * @return void
     */
    public function process(string $command): void;
}