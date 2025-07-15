<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Dog; 
use App\Policies\DogPolicy; 
use App\Models\Cat; 
use App\Policies\CatPolicy; // 
class AppServiceProvider extends ServiceProvider
{
    /**
     * 
     * 
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
    }
}
