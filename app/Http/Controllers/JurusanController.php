<?php

namespace App\Http\Controllers;

use App\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends DashboardBaseController
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
        $jurusan = Jurusan::all();

        return view('/jurusan/index', compact('sql_menu', 'menu', 'jurusan'));
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

        return view('/jurusan/create', compact('sql_menu', 'menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Jurusan::create([
            'kd_jurusan' => $request->kd_jurusan,
            'nama_jurusan' =>$request->nama_jurusan,
        ]);

        return redirect()->action('JurusanController@index')->with('store', 'Data Jurusan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $kd_jurusan
     * @return \Illuminate\Http\Response
     */
    public function show($kd_jurusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $kd_jurusan
     * @return \Illuminate\Http\Response
     */
    public function edit($kd_jurusan)
    {
        $menu = $this->view[0]->menu;
        $sql_menu = $this->view[0]->sql_menu;
        $jurusan = Jurusan::where('kd_jurusan', $kd_jurusan)->firstOrFail();

        return view('/jurusan/edit', compact('sql_menu', 'menu', 'jurusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $kd_jurusan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kd_jurusan)
    {
        Jurusan::where('kd_jurusan', $kd_jurusan)
            ->update([
                'kd_jurusan' => $request->kd_jurusan,
                'nama_jurusan' => $request->nama_jurusan,
            ]);
        
            return redirect()->action('JurusanController@index')->with('update', 'Data Jurusan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $kd_jurusan
     * @return \Illuminate\Http\Response
     */
    public function destroy($kd_jurusan)
    {
        Jurusan::destroy($kd_jurusan);

        return redirect()->action('JurusanController@index')->with('delete', 'Data Jurusan Berhasil Dihapus');
    }
}
