<?php

namespace App\Providers;

use A17\Twill\Facades\TwillNavigation;
use A17\Twill\View\Components\Navigation\NavigationLink;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);

        TwillNavigation::addLink(
            NavigationLink::make()->forModule('posts')
        )->addLink(
            NavigationLink::make()->forModule('locations')
        )->addLink(
            NavigationLink::make()->forModule('properties')
        )->addLink(
            NavigationLink::make()->forModule('rooms')
        )->addLink(
            NavigationLink::make()
                ->title('Custom Page')
                ->forModule('customPages')
        );
    }
}
