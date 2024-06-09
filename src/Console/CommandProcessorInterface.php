<?php

namespace Henrik\Contracts\Console;

interface CommandProcessorInterface
{
    /**
     * @param string $command
     *
     * @return mixed
     */
    public function process(string $command): mixed;
}