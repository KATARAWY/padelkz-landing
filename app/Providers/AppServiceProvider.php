<?php

namespace App\Providers;

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
        // Ссылки в canonical, sitemap, RSS и llms.txt всегда на основной домен, с какого бы адреса ни пришёл запрос
        if ($root = config('app.url')) {
            \Illuminate\Support\Facades\URL::forceRootUrl($root);
            if (str_starts_with($root, 'https://')) {
                \Illuminate\Support\Facades\URL::forceScheme('https');
            }
        }
    }
}
