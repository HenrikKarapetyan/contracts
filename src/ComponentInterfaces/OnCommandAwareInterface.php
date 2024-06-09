<?php

namespace Henrik\Contracts\ComponentInterfaces;

interface OnCommandAwareInterface
{
    /**
     * @return string
     */
    public function getCommandsPath(): string;
}