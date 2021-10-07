<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register Repository services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(
            \App\Repository\Interfaces\UserInterface::class,
            \App\Repository\UserRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
