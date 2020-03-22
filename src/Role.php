<?php

namespace Abr4xas\NovaCustomPermission;

use Vyuldashev\NovaPermission\Role as VyuldashevRole;

class Role extends VyuldashevRole
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