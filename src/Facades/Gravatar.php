<?php

namespace LaravelGravatar\Facades;

use Illuminate\Support\Facades\Facade;

class Gravatar extends Facade
{
    /**
     * The facade accessor string.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'gravatar';
    }
}
