<?php

namespace Henrik\Contracts\ComponentInterfaces;

interface OnControllerAwareInterface
{
    public function getControllersPath(): string;
}