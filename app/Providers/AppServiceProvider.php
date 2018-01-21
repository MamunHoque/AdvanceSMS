<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Http\Controllers\VoyagerBreadController;
use App\Http\Controllers\SchoolController;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       // $this->app->bind(VoyagerBreadController::class, SchoolController::class);
    }
}
