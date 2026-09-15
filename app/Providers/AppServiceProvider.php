<?php

namespace App\Providers;

use App\Models\MailSetting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        require_once app_path('helpers.php');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $appUrl = config('app.url');
        if (is_string($appUrl) && $appUrl !== '') {
            URL::forceRootUrl($appUrl);
        }

        Paginator::useBootstrapFive();

        try {
            MailSetting::current()?->applyToConfig();
        } catch (\Throwable) {
            // DB may be unavailable during install/migrate.
        }
    }
}
