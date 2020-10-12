<?php

namespace App\Http\Controllers;

use App\Kurikulum;
use Illuminate\Http\Request;

class KurikulumController extends DashboardBaseController
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
        $kurikulum = Kurikulum::all();
        $menu = $this->view[0]->menu;
        $sql_menu = $this->view[0]->sql_menu;

        return view('/kurikulum/index', compact('kurikulum', 'sql_menu', 'menu'));
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

        return view('/kurikulum/create', compact('sql_menu', 'menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kurikulum::create([
            'nama_kurikulum' => $request->nama_kurikulum,
            'is_aktif' => $request->is_aktif
        ]);

        return redirect()->action('KurikulumController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_kurikulum
     * @return \Illuminate\Http\Response
     */
    public function show($id_kurikulum)
    {
        $kurikulum = Kurikulum::where('id_kurikulum', $id_kurikulum)->get();
        $menu = $this->view[0]->menu;
        $sql_menu = $this->view[0]->sql_menu;

        return view('/kurikulum/show', compact('kurikulum', 'sql_menu', 'menu'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_kurikulum
     * @return \Illuminate\Http\Response
     */
    public function edit($id_kurikulum)
    {
        $kurikulum = Kurikulum::where('id_kurikulum', $id_kurikulum)->firstOrFail();
        $menu = $this->view[0]->menu;
        $sql_menu = $this->view[0]->sql_menu;

        return view('/kurikulum/edit', compact('kurikulum', 'sql_menu', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_kurikulum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kurikulum)
    {
        Kurikulum::where('id_kurikulum', $id_kurikulum)
            ->update([
                'nama_kurikulum' => $request->nama_kurikulum,
                'is_aktif' => $request->is_aktif
            ]);

        return redirect()->action('KurikulumController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_kurikulum
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kurikulum)
    {
        Kurikulum::destroy($id_kurikulum);

        return redirect()->action('KurikulumController@index');
    }
}
