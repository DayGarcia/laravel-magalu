<?php

namespace DayGarcia\LaravelMagalu\Facades;

use \Illuminate\Support\Facades\Facade;

class Magalu extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'magalu';
    }
}
