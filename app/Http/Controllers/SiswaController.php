<?php

namespace App\Http\Controllers;

use App\Jurusan;
use App\Kelas;
use App\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SiswaController extends DashboardBaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $siswa = Siswa::all();

        return view('/siswa/index', compact('sql_menu', 'menu', 'siswa'));
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

        return view('/siswa/create', compact('sql_menu', 'menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Siswa::create([
            'nama'          => $request->nama,
            'tempat_lahir'  => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'kd_agama'      => $request->kd_agama,
            'alamat_siswa'  => $request->alamat_siswa,
            'no_telp_siswa' => $request->no_telp_siswa,
            'sekolah_asal'  => $request->sekolah_asal,
            'no_ijazah'     => $request->no_ijazah,
            'nama_ayah'     => $request->nama_ayah,
            'nama_ibu'      => $request->nama_ibu,
            'alamat_ortu'   => $request->alamat_ortu,
            'no_telp_ortu'  => $request->no_telp_ortu,
            'foto'          => Storage::put('Siswa', $request->foto),
            'kd_kelas'      => $request->kd_kelas,
            'status_siswa'  => $request->status_siswa,
            'email'         => $request->email,
            'password'      => $request->password,
        ]);


        return redirect()->action('SiswaController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nis)
    {
        $siswa = Siswa::where('nis', $nis)->get();
        $menu = $this->view[0]->menu;
        $sql_menu = $this->view[0]->sql_menu;

        return view('/siswa/show', compact('siswa', 'sql_menu', 'menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nis)
    {
        $siswa = Siswa::where('nis', $nis)->firstOrFail();
        $menu = $this->view[0]->menu;
        $sql_menu = $this->view[0]->sql_menu;

        // dd($agama);
        return view('/siswa/edit', compact('siswa', 'sql_menu', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nis)
    {
        dd($request);
        $foto = $request->file('foto')->store('Siswa');
        Siswa::where('nis', $nis)
            ->update([
                'nama' => $request->nama,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'kd_agama' => $request->kd_agama,
                'alamat_siswa' => $request->alamat_siswa,
                'no_telp_siswa' => $request->no_telp_siswa,
                'sekolah_asal' => $request->sekolah_asal,
                'no_ijazah' => $request->no_ijazah,
                'nama_ayah' => $request->nama_ayah,
                'nama_ibu' => $request->nama_ibu,
                'alamat_ortu' => $request->alamat_ortu,
                'no_telp_ortu' => $request->no_telp_ortu,
                'foto' => $foto,
                'kd_kelas' => $request->kd_kelas,
                'status_siswa' => $request->status_siswa,
                'email' => $request->email,
                'password' => $request->password,
            ]);

        return redirect()->action('SiswaController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nis)
    {
        Siswa::destroy($nis);

        return redirect()->action('SiswaController@index');
    }

    public function viewAktif()
    {
        $menu = $this->view[0]->menu;
        $sql_menu = $this->view[0]->sql_menu;
        $siswa = Siswa::all();
        $jurusan = Jurusan::all();

        return view('/siswa/aktif', compact('sql_menu', 'menu', 'siswa', 'jurusan'));
    }

    public function kelas($jurusan)
    {
        // $kelas = Kelas::where('kd_jurusan', $kd_jurusan)->get();

        return response()->json('Helo');
    }
}
