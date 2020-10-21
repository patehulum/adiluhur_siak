<?php

namespace App\Http\Controllers;

use App\TingkatanKelas;
use Illuminate\Http\Request;

class TingkatanController extends DashboardBaseController
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
        $tingkatan = TingkatanKelas::all();

        return view('/tingkatan/index', compact('sql_menu', 'menu', 'tingkatan'));
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

        return view('/tingkatan/create', compact('sql_menu', 'menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TingkatanKelas::create([
            'kd_tingkatan' => $request->kd_tingkatan,
            'nama_tingkatan' => $request->nama_tingkatan
        ]);

        return redirect()->action('TingkatanController@index')->with('store', 'Data Tingkatan Kelas Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($kd_tingkatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($kd_tingkatan)
    {
        $menu = $this->view[0]->menu;
        $sql_menu = $this->view[0]->sql_menu;
        $tingkatan = TingkatanKelas::where('kd_tingkatan',$kd_tingkatan)->firstOrFail();

        return view('/tingkatan/edit', compact('sql_menu', 'menu', 'tingkatan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kd_tingkatan)
    {
        TingkatanKelas::where('kd_tingkatan', $kd_tingkatan)
            ->update([
                'kd_tingkatan' => $request->kd_tingkatan,
                'nama_tingkatan' => $request->nama_tingkatan,
            ]);
        
            return redirect()->action('TingkatanController@index')->with('update','Data Tingkatan Kelas Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kd_tingkatan)
    {
        TingkatanKelas::destroy($kd_tingkatan);

        return redirect()->action('TingkatanController@index')->with('delete', 'Data Tingkatan Kelas Berhasil Dihapus');
    }
}
