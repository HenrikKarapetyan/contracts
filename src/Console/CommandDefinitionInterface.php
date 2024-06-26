<?php

namespace Henrik\Contracts\Console;

interface CommandDefinitionInterface
{
    public function getClass(): ?string;

    public function setClass(string $class): void;

    public function getDescription(): ?string;

    public function setDescription(?string $description): void;
}