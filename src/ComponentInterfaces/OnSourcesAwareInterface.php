<?php

namespace Henrik\Contracts\ComponentInterfaces;

interface OnSourcesAwareInterface
{

    /**
     * @return string[]
     */
    public function getSourcesDirectories(): array;


    public function getRootNamespace(): string;
}