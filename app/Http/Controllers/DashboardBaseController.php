<?php

namespace App\Http\Controllers;

use App\Menu;
use App\User;
use Illuminate\Auth\Authenticatable;
use App\UserRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardBaseController extends Controller
{
    public $view;
    public function __construct() {
        if (Auth::user()==null) {
            return view('auth/login');
        }else {
        //     $this->middleware('auth');
        // dd(Auth::user());
        //Tambahkan beberapa validasi pada Kernel
        $menu = new Menu();
        $collection = UserRule::select('id_menu')->where('id_level_user', Auth::user()->id_level_user);
        $sql_menu = $menu->whereHas('rule', function ($query) use ($collection) {
        $query->whereIn('id', $collection)
        ->where('is_main_menu', 0);
        })->get();
        $menu = $menu->all();
        
        $this->view[] = (object) array(
        'menu' => new Menu,
        'sql_menu' => $sql_menu
        );
        }

        
    }
}
