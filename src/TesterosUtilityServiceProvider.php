<?php

namespace Harveywd\TesterosUtility;

use Illuminate\Support\ServiceProvider;

class TesterosUtilityServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
         $this->loadRoutesFrom(__DIR__.'/routes.php');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment('production')) {
            throw new Exception('It is unsafe to run Testeros Utilities in production.');
        }
    }
}
