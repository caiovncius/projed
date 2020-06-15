<?php

namespace App\Providers;

use App\Account\Contracts\AccountCreatorable;
use App\Account\Services\AccountCreator;
use Illuminate\Support\ServiceProvider;

class AccountServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AccountCreatorable::class, AccountCreator::class);
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
