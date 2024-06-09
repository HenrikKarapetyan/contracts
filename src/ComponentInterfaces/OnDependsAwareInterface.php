<?php

namespace Henrik\Contracts\ComponentInterfaces;

interface OnDependsAwareInterface
{
    /**
     * @return array<string>
     */
    public function dependsOn(): array;
}