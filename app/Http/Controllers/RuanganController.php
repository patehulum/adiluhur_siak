<?php

namespace App\Http\Controllers;

use App\Ruangan;
use Illuminate\Http\Request;

class RuanganController extends DashboardBaseController
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
        $ruangan = Ruangan::all();

        return view('/ruangan/index', compact('sql_menu', 'menu', 'ruangan'));
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

        return view('/ruangan/create', compact('sql_menu', 'menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ruangan::create([
            'kd_ruangan' => $request->kd_ruangan,
            'nama_ruangan' => $request->nama_ruangan,
            'kapasitas' => $request->kapasitas,
        ]);

        return redirect()->action('RuanganController@index')->with('store', 'Data Ruangan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($kd_ruangan)
    {
        $menu = $this->view[0]->menu;
        $sql_menu = $this->view[0]->sql_menu;
        $ruangan = Ruangan::where('kd_ruangan', $kd_ruangan)->firstOrFail();

        return view('/ruangan/edit', compact('sql_menu', 'menu', 'ruangan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kd_ruangan)
    {
        Ruangan::where('kd_ruangan', $kd_ruangan)
            ->update([
                'kd_ruangan' => $request->kd_ruangan,
                'nama_ruangan' => $request->nama_ruangan,
                'kapasitas' => $request->kapasitas,
            ]);

        return redirect()->action('RuanganController@index')->with('update', 'Data Ruangan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kd_ruangan)
    {
        Ruangan::destroy($kd_ruangan);

        return redirect()->action('RuanganController@index')->with('delete', 'Data Ruangan Berhasil Dihapus');
    }
}
