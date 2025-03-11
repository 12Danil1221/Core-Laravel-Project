<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength(191);
        // Логируем запросы дольше 100мс
        DB::listen(function($query) {
            if ($query->time > 100) {
                Log::channel('daily')->info('Медленный запрос: ' . $query->sql . 'Время выполнения: ' . $query->time . 'ms');
            }
        });
    }
}