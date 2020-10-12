<?php

namespace App\Http\Controllers;

use App\Jurusan;
use App\Kelas;
use App\TingkatanKelas;
use Illuminate\Http\Request;

class KelasController extends DashboardBaseController
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
        $kelas = Kelas::all();
        $menu = $this->view[0]->menu;
        $sql_menu = $this->view[0]->sql_menu;

        return view('/kelas/index', compact('kelas', 'sql_menu', 'menu'));
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
        // $kelas = Kelas::all();
        $tingkatan = TingkatanKelas::all();
        $jurusan = Jurusan::all();

        return view('/kelas/create', compact('sql_menu', 'menu', 'tingkatan', 'jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kelas::create([
            'kd_kelas' => $request->kd_kelas,
            'nama_kelas' => $request->nama_kelas,
            'kd_tingkatan' => $request->kd_tingkatan,
            'kd_jurusan' => $request->kd_jurusan
        ]);

        return redirect()->action('KelasController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $kd_kelas
     * @return \Illuminate\Http\Response
     */
    public function show($kd_kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $kd_kelas
     * @return \Illuminate\Http\Response
     */
    public function edit($kd_kelas)
    {
        $kelas = Kelas::where('kd_kelas', $kd_kelas)->firstOrFail();
        $menu = $this->view[0]->menu;
        $sql_menu = $this->view[0]->sql_menu;
        $tingkatan = TingkatanKelas::all();
        $jurusan = Jurusan::all();

        return view('/kelas/edit', compact('kelas', 'sql_menu', 'menu', 'tingkatan', 'jurusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $kd_kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kd_kelas)
    {
        Kelas::where('kd_kelas', $kd_kelas)
            ->update([
            'kd_kelas' => $request->kd_kelas,
            'nama_kelas' => $request->nama_kelas,
            'kd_tingkatan' => $request->kd_tingkatan,
            'kd_jurusan' => $request->kd_jurusan
        ]);

        return redirect()->action('KelasController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $kd_kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy($kd_kelas)
    {
        Kelas::destroy($kd_kelas);

        return redirect()->action('KelasController@index');
    }

    public function kelas($jurusan){
        $j = Kelas::where('kd_jurusan', $jurusan)->get();
 
        return response()->json($j);
    }
}
