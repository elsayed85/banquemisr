<?php

namespace Elsayed85\Banquemisr\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Elsayed85\Banquemisr\Banquemisr
 */
class Banquemisr extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Elsayed85\Banquemisr\Banquemisr::class;
    }
}
