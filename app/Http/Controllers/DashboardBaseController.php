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

        //Tambahkan beberapa validasi pada Kernel
        $user=Auth::user()->id_level_user;
        $menu = new Menu();
        $collection = UserRule::select('id_menu')->where('id_level_user', $user);
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
