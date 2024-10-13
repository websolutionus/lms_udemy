<?php

namespace App\Providers;

use App\Service\SettingService;
use Illuminate\Support\ServiceProvider;

class SettingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(SettingService::class, function() {
            return new SettingService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        $settings = $this->app->make(SettingService::class);
        $settings->setGlobalSettings();
    }
}
