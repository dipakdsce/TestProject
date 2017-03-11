<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TestProjectServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerService();
    }

    public function registerService()
    {
        $this->app->singleton('testproject', 'App\Services\TestProjectService');
    }


    public function provides()
    {
        return [
        'testproject'
        ];
    }
}
