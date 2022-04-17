<?php

namespace Mht\Example\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mht\Example\Example
 */
class Example extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-example-package';
    }
}
