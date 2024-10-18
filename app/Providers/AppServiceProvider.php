<?php

namespace App\Providers;

use App\Services\SeoServices;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::directive('header_seo', static function () {
            return '{!! seo_data() !!}';
        });
    }
}
