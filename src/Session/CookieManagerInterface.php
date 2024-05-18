<?php

namespace Hk\Contracts\Session;

interface CookieManagerInterface
{
    /**
     * @param callable $callback
     */
    public function newCookie(callable $callback): void;

    /**
     * @return array<string, mixed>
     */
    public function getCookies(): array;
}