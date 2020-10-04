<?php

namespace App\Http\Controllers;

use App\Menu;
use App\UserRule;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user = Auth::user()->id_level_user;
        $collection = UserRule::select('id_menu')->where('id_level_user', $user);
        // $sql_menu = Menu::where('id', $collection);

        $menu = new Menu;
        $sql_menu = $menu->whereHas('rule', function ($query) use ($collection) {
            $query->whereIn('id', $collection)
                    ->where('is_main_menu', 0);
        })->get();
        // $array = Arr::add(['is_mine_menu' => 'id']);
        // $sql_menu = "SELECT * FROM `tabel_menu` WHERE id IN(SELECT id_menu FROM tbl_user_rule WHERE id_level_user =
        // $id_level_user) AND is_main_menu = 0";

        // $sql_menu =  Menu::whereIn('id', function($query){
        // $query->select('id_menu')
        // ->from(with(new UserRule)->getTable())
        // ->select('id_level_user')
        // ->from(with(new Auth)->get())
        // ->whereIn('id_level_user',$user)
        // ->where('active', );
        // })->get();

        // select('nama_menu', 'link', 'icon', 'is_main_menu')->where('id', $collection);
        // dd($submenu);
        return view('home', compact('sql_menu', 'collection', 'user', 'menu'));
    }
}
