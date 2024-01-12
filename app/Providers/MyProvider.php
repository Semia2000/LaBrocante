<?php

namespace App\Providers;

use App\Actions\MyAction;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;

class MyProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //

        Fortify::createUsersUsing(MyAction::class);
    }
}
