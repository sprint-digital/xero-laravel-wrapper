<?php

namespace Sprintdigital\XeroLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sprintdigital\XeroLaravel\XeroLaravel
 */
class XeroLaravel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Sprintdigital\XeroLaravel\XeroLaravel::class;
    }
}
