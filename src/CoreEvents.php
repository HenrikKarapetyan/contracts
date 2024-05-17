<?php

declare(strict_types=1);

namespace Hk\Contracts;

interface CoreEvents
{
    public const PARSE_ATTRIBUTES    = 'PARSE_ATTRIBUTES';
    public const SIMPLE_EVENTS       = 'SIMPLE_EVENTS';
    public const HTTP_REQUEST_EVENTS = 'HTTP_REQUEST_EVENTS';
}