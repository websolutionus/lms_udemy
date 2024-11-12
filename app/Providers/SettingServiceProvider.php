<?php

namespace App\Providers;

use App\Service\SettingService;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class SettingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(SettingService::class, function () {
            return new SettingService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $settings = $this->app->make(SettingService::class);
        $settings->setGlobalSettings();


        // set mail config
        Config::set('mail.mailers.smtp', [
            'transport' => config('settings.mail_mailer'),
            'host' => config('settings.mail_host'),
            'port' => config('settings.mail_port'),
            'username' => config('settings.mail_username'),
            'password' => config('settings.mail_password'),
            'encryption' => config('settings.mail_encryption'),
        ]);

        Config::set('mail_queue.is_queue', config('settings.mail_queue'));

        Config::set('mail.from', [
            'address' => config('settings.sender_email'),
            'name' => config('settings.site_name'),
        ]);
    }
}
