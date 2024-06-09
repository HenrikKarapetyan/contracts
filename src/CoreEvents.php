<?php

declare(strict_types=1);

namespace Henrik\Contracts;

interface CoreEvents
{
    public const SIMPLE_EVENTS       = 'SIMPLE_EVENTS';
    public const HTTP_REQUEST_EVENTS = 'HTTP_REQUEST_EVENTS';

    public const ROUTE_MATCH_EVENTS = 'ROUTE_MATCH_EVENTS';
    public const RESPONSE_EVENTS    = 'RESPONSE_EVENTS';

    public const CACHE_DISPOSE_EVENT = 'CACHE_DISPOSE_EVENT';

    public const CACHE_COMMIT_EVENT = 'CACHE_COMMIT_EVENT';

    public const COMMAND_MATCH_EVENTS = 'COMMAND_MATCH_EVENTS';

    public const ROUTE_DISPATCHER_DEFAULT_DEFINITION_ID = 'routeEventDispatcher';

    public const COMMAND_DISPATCHER_DEFAULT_DEFINITION_ID = 'commandEventDispatcher';

    public const CACHE_DISPATCHER_DEFAULT_DEFINITION_ID = 'cacheEventDispatcher';
}