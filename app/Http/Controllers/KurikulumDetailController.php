<?php

namespace App\Http\Controllers;

use App\Jurusan;
use App\Kurikulum;
use App\KurikulumDetail;
use App\Mapel;
use App\TingkatanKelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KurikulumDetailController extends DashboardBaseController
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $kurikulum = KurikulumDetail::all();
        // $jurusan = Jurusan::all();
        // $mapel = Mapel::all();
        // $tingkatan = TingkatanKelas::all();
        // $menu = $this->view[0]->menu;
        // $sql_menu = $this->view[0]->sql_menu;

        // return view('/kurikulum_detail/create', compact('jurusan', 'mapel', 'tingkatan', 'kurikulum', 'sql_menu', 'menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // KurikulumDetail::where('id_kurikulum', $id_kurikulum)
        //     ->create([
        //         'id_kurikulum' => $request->id_kurikulum,
        //         'kd_mapel' => $request->kd_mapel,
        //         'kd_jurusan' => $request->kd_jurusan,
        //         'kd_tingkatan' => $request->kd_tingkatan,
        //     ]);
 
 
        // return redirect()->action('KurikulumDetailController@show', ['id_kurikulum'=>$id_kurikulum]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_kurikulum)
    {
        $kurikulum = Kurikulum::where('id_kurikulum', $id_kurikulum)->firstOrFail();
        $jurusan = Jurusan::all();
        $mapel = Mapel::all();
        $tingkatan = TingkatanKelas::all();
        $menu = $this->view[0]->menu;
        $sql_menu = $this->view[0]->sql_menu;

        return view('/kurikulum_detail/show', compact('jurusan', 'mapel', 'tingkatan', 'kurikulum', 'sql_menu', 'menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_kurikulum)
    {
        $kurikulum = Kurikulum::where('id_kurikulum', $id_kurikulum)->firstOrFail();
        $jurusan = Jurusan::all();
        $mapel = Mapel::all();
        $tingkatan = TingkatanKelas::all();
        $menu = $this->view[0]->menu;
        $sql_menu = $this->view[0]->sql_menu;

        return view('/kurikulum_detail/edit', compact('jurusan', 'mapel', 'tingkatan', 'kurikulum', 'sql_menu', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kurikulum)
    {
        KurikulumDetail::where('id_kurikulum', $id_kurikulum)
            ->create([
                'id_kurikulum' => $id_kurikulum,
                'kd_mapel' => $request->kd_mapel,
                'kd_jurusan' => $request->kd_jurusan,
                'kd_tingkatan' => $request->kd_tingkatan,
            ]);


        return redirect()->action('KurikulumDetailController@show', ['id_kurikulum'=>$id_kurikulum]);
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

    public function get($kurikulum, $tingkat_kelas, $jurusan)
    {
        $k = KurikulumDetail::where([
            ['id_kurikulum', $kurikulum], 
            ['kd_tingkatan', $tingkat_kelas],
            ['kd_jurusan', $jurusan],
            ])->with(['kurikulum','mapel','jurusan','tingkatan'])->get();

         return response()->json($k);
    }
}
