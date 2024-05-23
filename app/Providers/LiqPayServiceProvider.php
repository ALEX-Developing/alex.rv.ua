<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use LiqPay;

class LiqPayServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(LiqPay::class, function ($app) {
            return new LiqPay(
                config('liqpay.public_key'),
                config('liqpay.private_key')
            );
        });
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
