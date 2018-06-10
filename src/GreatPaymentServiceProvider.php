<?php

namespace GreatPay\GreatPayment;

use Illuminate\Support\ServiceProvider;

class GreatPaymentServiceProvider extends ServiceProvider
{
    /**
     * 服务提供者加是否延迟加载.
     *
     * @var bool
     */
    protected $defer = true;
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/greatpay.php' => config_path('greatpay.php'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('greatpayment', function ($app) {
            return new GreatPayment($app['config']);
        });
    }
    
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['greatpayment'];
    }
}
