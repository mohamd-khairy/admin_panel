<?php

namespace App\Providers;

use App\Models\Footer;
use App\Models\Setting;
use App\Models\Social;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('path.public', function () {
            return env('CDN_CUSTOM_PATH', base_path('public'));
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        try {
            // view()->share('lang', App::getLocale());
            view()->share('footer', Schema::hasTable('footers') ? Footer::first() : null);
            view()->share('settings', Schema::hasTable('settings') ? Setting::first() : null);
            view()->share('social', Schema::hasTable('socials') ? Social::all() : null);
        } catch (\Throwable $th) {
            // view()->share('lang', App::getLocale());
        }
    }
}
