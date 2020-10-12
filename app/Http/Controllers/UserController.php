<?php

namespace App\Http\Controllers;

use App\LevelUser;
use App\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends DashboardBaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = $this->view[0]->menu;
        $sql_menu = $this->view[0]->sql_menu;
        $user = User::all();

        return view('/user/index', compact('sql_menu', 'menu', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = $this->view[0]->menu;
        $sql_menu = $this->view[0]->sql_menu;
        $user = User::all();

        return view('/user/create', compact('sql_menu', 'menu', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'id_level_user' => $request->id_level_user,
            'foto' => Storage::put('User', $request->foto),
        ]);

        return redirect()->action('UserController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menu = $this->view[0]->menu;
        $sql_menu = $this->view[0]->sql_menu;
        $user = User::all();

        return view('/user/rule', compact('sql_menu', 'menu', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $menu = $this->view[0]->menu;
        $sql_menu = $this->view[0]->sql_menu;
        $user = User::where('id', $id)->firstOrFail();
        $level = LevelUser::all();

        return view('/user/edit', compact('sql_menu', 'menu', 'user','level'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $foto = $request->file('foto')->store('User');
        User::where('id', $id)
            ->update([
                'nama_lengkap' => $request->nama_lengkap,
                'email' => $request->email,
                'password' => ($request->password) ? 'password' : Hash::make($request->password),
                'foto' => $foto,
            ]);

        return redirect()->action('UserController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);

        return redirect()->action('UserController@index');
    }

    public function rule()
    {
        $menu = $this->view[0]->menu;
        $sql_menu = $this->view[0]->sql_menu;
        $user = User::all();

        return view('/user/rule', compact('sql_menu', 'menu', 'user'));
    }
}
