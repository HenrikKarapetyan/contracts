<?php

namespace Henrik\Contracts\Console;

interface CommandProcessorInterface
{
    public function process(CommandDefinitionInterface $commandDefinition): void;
}