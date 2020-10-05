<?php

namespace App\Providers;

use App\Menu;
use App\UserRule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
    //     $data['user'] = Auth::user('id_level_user');
    //     $data['collection'] = UserRule::select('id_menu')->where('id_level_user', Auth::user('id_level_user'));
        
    //     $data['menu'] = new Menu();
        
          

    //    $shareddata = [
    //    'user' => $data['user'],
    //    'collection' => $data['collection'],
    //    'menu' => $data['menu'],
    //    'sql_menu' => $data['sql_menu'],
    //    ];
    //    View::share($shareddata);
    }
}
