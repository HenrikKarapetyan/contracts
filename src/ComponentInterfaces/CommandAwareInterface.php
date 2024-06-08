<?php

namespace Henrik\Contracts\ComponentInterfaces;

interface CommandAwareInterface
{
    /**
     * @return array<string>
     */
    public function getCommands(): array;
}