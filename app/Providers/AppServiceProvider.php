<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use A17\Twill\Facades\TwillNavigation;
use A17\Twill\View\Components\Navigation\NavigationLink;



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
        TwillNavigation::addLink(
            NavigationLink::make()->forModule('posts')
        );

        TwillNavigation::addLink(
            NavigationLink::make()->forModule('locations')
        );
        TwillNavigation::addLink(
            NavigationLink::make()->forModule('properties')
        );
        TwillNavigation::addLink(
            NavigationLink::make()->forModule('rooms')
        );
    }
}
