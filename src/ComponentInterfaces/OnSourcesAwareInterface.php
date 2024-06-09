<?php

namespace Henrik\Contracts\ComponentInterfaces;

interface OnSourcesAwareInterface
{

    /**
     * @return array<string, string>
     */
    public function getSourcesDirectories(): array;
}