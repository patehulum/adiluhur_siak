<?php

namespace App\Http\Controllers;

use App\Guru;
use App\Menu;
use App\Ruangan;
use App\Siswa;
use App\User;
use App\UserRule;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class HomeController extends DashboardBaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $users = User::select('id')->count();
        $guru = Guru::select('id_guru')->count();
        $siswa = Siswa::select('nis')->count();
        $ruangan = Ruangan::select('kd_ruangan')->count();
        $menu = $this->view[0]->menu;
        $sql_menu = $this->view[0]->sql_menu;

        

        return view('/home', compact(
            'users', 'guru', 'siswa', 'ruangan', 'menu', 'sql_menu'
        ));
    }
}
