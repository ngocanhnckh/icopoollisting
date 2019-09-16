<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\logo;
use App\link;
use App\admin;
use App\blog;
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
        View::share('mail', admin::find(1)->email);
        View::share('linktwitter', blog::find(1)->link);
        Schema::defaultStringLength(254);
    }
}
