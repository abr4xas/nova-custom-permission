<?php

namespace Abr4xas\NovaCustomPermission;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class NovaCustomPermission extends Tool
{

    public $roleResource = \Abr4xas\NovaCustomPermission\Role::class;
    public $permissionResource = \Abr4xas\NovaCustomPermission\Permission::class;

    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::resources([
            $this->roleResource,
            $this->permissionResource,
        ]);
    }

    /**
     * roleResource function
     *
     * @param string $roleResource
     * @return void
     */
    public function roleResource(string $roleResource)
    {
        $this->roleResource = $roleResource;

        return $this;
    }

    /**
     * permissionResource function
     *
     * @param string $permissionResource
     * @return void
     */
    public function permissionResource(string $permissionResource)
    {
        $this->permissionResource = $permissionResource;

        return $this;
    }

    /**
     * Build the view that renders the navigation links for the tool.
     *
     * @return \Illuminate\View\View
     */
    public function renderNavigation()
    {
        return view('nova-custom-permission::navigation');
    }
}
