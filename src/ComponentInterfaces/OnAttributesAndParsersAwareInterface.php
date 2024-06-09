<?php

namespace Henrik\Contracts\ComponentInterfaces;

interface OnAttributesAndParsersAwareInterface
{
    /**
     * @return array<string, string>
     */
    public function getAttributesAndParsers(): array;
}