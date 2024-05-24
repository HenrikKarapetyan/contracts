<?php

declare(strict_types=1);

namespace Henrik\Contracts;

interface CoreEvents
{
    public const SIMPLE_EVENTS       = 'SIMPLE_EVENTS';
    public const HTTP_REQUEST_EVENTS = 'HTTP_REQUEST_EVENTS';

    public const ROUTE_MATCH_EVENTS = 'ROUTE_MATCH_EVENTS';
    public const RESPONSE_EVENTS    = 'RESPONSE_EVENTS';
}