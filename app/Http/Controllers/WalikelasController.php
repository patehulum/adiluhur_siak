<?php

namespace App\Http\Controllers;

use App\Guru;
use App\Jurusan;
use App\Kelas;
use App\TahunAkademik;
use App\Walikelas;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\PseudoTypes\True_;

class WalikelasController extends DashboardBaseController
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
        $tahunakademik = TahunAkademik::where('is_aktif', TRUE)->first();
        $guru = Guru::all();
        $walikelas = Walikelas::where('id_tahun_akademik', $tahunakademik->id_tahun_akademik)
            ->with(['kelas','jurusan', 'tingkatan', 'guru'])->get();
        // $id = $walikelas->first();
        // $jurusan = Jurusan::where('kd_jurusan', $id->kd_kelas)->get();

        // $kelas = Kelas::select('nama_jurusan', 'nama_tingkatan')->where('kd_kelas', $walikelas->kd_kelas)->get();
        // return response()->json($walikelas);


        return view('/walikelas/index', compact('sql_menu', 'menu', 'walikelas', 'guru', 'tahunakademik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($guru, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function guru($guru, $id)
    {
        $data = Walikelas::where('id_walikelas', $id)
        ->update([
            'id_guru' => $guru
        ]);

        return response()->json($data);
        // return response()->json('Helo');
    }

}
