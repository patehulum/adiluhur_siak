<?php

namespace App\Http\Controllers;

use App\Mapel;
use Illuminate\Http\Request;

class MapelController extends DashboardBaseController
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
        $mapel = Mapel::all();

        return view('/mapel/index', compact('sql_menu', 'menu', 'mapel'));
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

        return view('/mapel/create', compact('sql_menu', 'menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request);
        Mapel::create([
            'kd_mapel' => $request->kd_mapel,
            'nama_mapel' => $request->nama_mapel,
        ]);

        return redirect()->action('MapelController@index');
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
    public function edit($kd_mapel)
    {
        $menu = $this->view[0]->menu;
        $sql_menu = $this->view[0]->sql_menu;
        $mapel = Mapel::where('kd_mapel',$kd_mapel)->firstOrFail();

        return view('/mapel/edit', compact('sql_menu', 'menu', 'mapel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kd_mapel)
    {
        // dd($request);
        Mapel::where('kd_mapel', $kd_mapel)
            ->update([
                'kd_mapel' => $request->kd_mapel,
                'nama_mapel' => $request->nama_mapel,
            ]);
        // dd($request);

        return redirect()->action('MapelController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kd_mapel)
    {
        Mapel::destroy($kd_mapel);

        return redirect()->action('MapelController@index');
    }
}
