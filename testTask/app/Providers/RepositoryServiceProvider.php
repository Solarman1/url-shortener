<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\RedirectRepository;
use App\Repository\Interfaces\RedirectRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(
            RedirectRepositoryInterface::class, 
            RedirectRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
