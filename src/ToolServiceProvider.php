<?php

namespace Abr4xas\NovaCustomPermission;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Abr4xas\NovaCustomPermission\Http\Middleware\Authorize;
use Vyuldashev\NovaPermission\ToolServiceProvider as VyuldashevServiceProvider;

class ToolServiceProvider extends VyuldashevServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'nova-custom-permission');
    }
}
