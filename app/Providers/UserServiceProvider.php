<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Contracts\UserServiceInterface;
// use App\Services\SqliteOneUserService;
use App\Services\SqliteTwoUserService;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
         $this->app->singleton(UserServiceInterface::class, function ($app) {
            // return new SqliteOneUserService();
            return new SqliteTwoUserService();
        });
    
    }
}
