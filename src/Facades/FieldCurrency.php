<?php

namespace Adaptcms\FieldCurrency\Facades;

use Illuminate\Support\Facades\Facade;

class FieldCurrency extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'FieldCurrency';
    }
}
