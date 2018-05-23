<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\Coche\CochesRepository::class, \App\Repositories\Coche\CochesRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CocheCocheRepository::class, \App\Repositories\CocheCocheRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Coche\CocheRepository::class, \App\Repositories\Coche\CocheRepositoryEloquent::class);
        //:end-bindings:
    }
}
