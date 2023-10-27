<?php

namespace Grilar\Theme\Facades;

use Grilar\Theme\Manager as ManagerSupport;
use Illuminate\Support\Facades\Facade;

/**
 * @method static void registerTheme(array|string $theme)
 * @method static array getAllThemes()
 * @method static array getThemes()
 *
 * @see \Grilar\Theme\Manager
 */
class Manager extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return ManagerSupport::class;
    }
}
