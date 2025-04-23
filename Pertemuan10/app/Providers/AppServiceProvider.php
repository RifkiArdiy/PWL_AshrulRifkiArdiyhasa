<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use Yajra\DataTables\Html\Builder;

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
        //
        // View::share('key', 'value');
        Builder::useVite(); 
    }
}
