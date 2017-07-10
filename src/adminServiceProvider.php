<?php

namespace sojib\admin;

use Illuminate\Support\ServiceProvider;

class adminServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        if (!$this->app->routesAreCached()) {

            require __DIR__ . '/routes.php';
        }
            $this->loadViewsFrom(base_path('resources/views'), 'admin');
            $this->publishes([

               __DIR__.'/views' => base_path('resources/views')
            ]);


        $this->publishes([

            __DIR__.'/migrations' => database_path('migrations')
        ], 'migrations');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}