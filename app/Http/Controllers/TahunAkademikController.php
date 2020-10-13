<?php

namespace App\Http\Controllers;

use App\TahunAkademik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TahunAkademikController extends DashboardBaseController
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
        $tahun = TahunAkademik::all();

        return view('/tahunakademik/index', compact('menu', 'sql_menu', 'tahun'));
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

        return view('/tahunakademik/create', compact('menu', 'sql_menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TahunAkademik::create([
            'tahun_akademik' => $request->tahun_akademik,
            'is_aktif' => $request->is_aktif,
        ]);

        return redirect()->action('TahunAkademikController@index');
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
    public function edit($id_tahun_akademik)
    {
        $menu = $this->view[0]->menu;
        $sql_menu = $this->view[0]->sql_menu;
        $tahun = TahunAkademik::where('id_tahun_akademik', $id_tahun_akademik)->firstOrFail();

        return view('/tahunakademik/edit', compact('menu', 'sql_menu', 'tahun'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_tahun_akademik)
    {
        TahunAkademik::where('id_tahun_akademik', $id_tahun_akademik)
            ->update([
                'tahun_akademik' => $request->tahun_akademik,
                'semester' => $request->semester,
            ]);

        return redirect()->action('TahunAkademikController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_tahun_akademik)
    {
        TahunAkademik::destroy($id_tahun_akademik);

        return redirect()->action('TahunAkademikController@index');
    }

    public function aktif($id_tahun_akademik)
    {
        // dd($id_tahun_akademik);
        // TahunAkademik::where([
        //     ['is_aktif'== 'Aktif'],
        //     ['id_tahun_akademik', $id_tahun_akademik]
        //     ])
        //     ->orWhere('id_tahun_akademik', $id_tahun_akademik)
        //     ->update(['is_aktif'== 'N']);

            DB::update('update tbl_tahun_akademik set is_aktif = "N" where is_aktif = "Y"');
            DB::update('update tbl_tahun_akademik set is_aktif = "Y" where id_tahun_akademik ='.$id_tahun_akademik);
            
        return redirect()->action('TahunAkademikController@index');


    }
}
