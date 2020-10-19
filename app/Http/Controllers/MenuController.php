<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

class MenuController extends DashboardBaseController
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
        $index = menu::all();

        return view('/menu/index', compact('sql_menu', 'menu', 'index'));
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
        $index = menu::all();

        return view('/menu/create', compact('sql_menu', 'menu', 'index'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Menu::create([
        'nama_menu' => $request->nama_menu,
        'link' => $request->link,
        'icon' => $request->icon,
        'is_main_menu' => $request->is_main_menu,
        ]);

        // return response()->json();

        return redirect()->action('MenuController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        $index = menu::where('id', $id);
        $m = $index->first();

        return view('/menu/edit', compact('sql_menu', 'menu', 'index', 'm'));
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
        Menu::where('id', $id)
            ->update([
                'nama_menu' => $request->nama_menu,
                'link' => $request->link,
                'icon' => $request->icon,
                'is_main_menu' => $request->is_main_menu,
            ]);
        
            return redirect()->action('MenuController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Menu::destroy($id);
        
        return redirect()->action('MenuController@index');
    }
}
