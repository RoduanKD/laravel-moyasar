<?php

namespace RoduanKD\LaravelMoyasar\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RoduanKD\LaravelMoyasar\LaravelMoyasar
 */
class LaravelMoyasar extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'moyasar';
    }
}
