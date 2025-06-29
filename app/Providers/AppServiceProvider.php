<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;


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
      
       Route::middleware('web')
        ->prefix('admin')
        ->group(base_path('routes/backend.php'));
       
        Route::middleware('web')
        ->group(base_path('routes/frontend.php'));
    }
}
