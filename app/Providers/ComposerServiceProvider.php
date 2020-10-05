<?php

namespace App\Providers;

use App\UserRule;
use App\Menu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {
       // Using class based composers...
       View::composer(
       ['user', 'collection','menu','sql_menu'],
       'App\Http\ViewComposers\UserComposer'
       );
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
