<?php

namespace Jacek80\Bmserver;

use Illuminate\Support\ServiceProvider;

class bmserverServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes/api.php';
        $this->loadMigrationsFrom(__DIR__.'/migrations');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('jacek80\bmserver\ProductsController');
    }
}
