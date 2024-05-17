<?php

declare(strict_types=1);

namespace Hk\Contracts;

interface ServiceScopeInterface
{
    /**
     * DI singletons.
     */
    public const SINGLETON = 'SINGLETON';

    /**
     * DI prototypes.
     */
    public const PROTOTYPE = 'PROTOTYPE';

    /**
     * DI factories.
     */
    public const FACTORY = 'FACTORY';
    /**
     * DI parameters.
     */
    public const PARAM = 'PARAM';

    /**
     * DI Aliases.
     */
    public const ALIAS = 'ALIAS';
}