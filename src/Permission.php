<?php

namespace Abr4xas\NovaCustomPermission;

use Vyuldashev\NovaPermission\Permission as VyuldashevPermission;

class Permission extends VyuldashevPermission
{
    /**
     * Indicates if the resource should be displayed in the sidebar.
     *
     * @var bool
     */
    public static $displayInNavigation = false;

    /**
     * Get the logical group associated with the resource.
     *
     * @return string
     */
    public static function group()
    {
        return static::$group;
    }
}