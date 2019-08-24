<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\logo;
use App\link;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $logo=logo::all();
        View::share('thumnail', $logo[0]->thumnail);
        View::share('logo', $logo[0]->logo);
        View::share('link', link::all());
        Schema::defaultStringLength(254);
    }
}
