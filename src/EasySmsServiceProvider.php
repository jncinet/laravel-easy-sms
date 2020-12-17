<?php

namespace Jncinet\LaravelEasySms;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use Overtrue\EasySms\EasySms;

class EasySmsServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function provides()
    {
        return [EasySms::class];
    }

    public function register()
    {
        $this->app->singleton(EasySms::class, function () {
            return new EasySms(config('easy-sms'));
        });
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/easy-sms.php' => config_path('easy-sms.php')
            ], 'laravel-easy-sms');
        }

        $this->mergeConfigFrom(__DIR__.'/../config/easy-sms.php', 'easy-sms');
    }
}