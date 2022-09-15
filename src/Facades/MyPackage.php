<?php

namespace :uc:vendor\:uc:package\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class :uc:package
 *
 * @author :author_name <:author_email>
 */
class :uc:package extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return ':lc:package';
    }
}
