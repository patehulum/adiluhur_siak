<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Siswa;
use App\UserRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SiswaController extends DashboardBaseController
{
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

        return view('/siswa/index',compact('sql_menu', 'menu', 'siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user()->id_level_user;

        $collection = UserRule::select('id_menu')->where('id_level_user', $user);

        $menu = new Menu;

        $sql_menu = $menu->whereHas('rule', function ($query) use ($collection) {
        $query->whereIn('id', $collection)
        ->where('is_main_menu', 0);
        })->get();
        return view('/siswa/create',compact('sql_menu', 'collection', 'user', 'menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $siswa = new Siswa;
        $siswa->nama = $request->nama;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->agama = $request->agama;
        $siswa->alamat_siswa = $request->alamat_siswa;
        $siswa->no_telp_siswa = $request->no_telp_siswa;
        $siswa->sekolah_asal = $request->sekolah_asal;
        $siswa->no_ijazah = $request->no_ijazah;
        $siswa->nama_ayah = $request->nama_ayah;
        $siswa->nama_ibu = $request->nama_ibu;
        $siswa->alamat_ortu = $request->alamat_ortu;
        $siswa->no_telp_ortu = $request->no_telp_ortu;
        $siswa->userfile = Storage::put('Siswa', $request->userfile);
        $siswa->kelas = $request->kelas;
        $siswa->status_siswa = $request->status_siswa;
        $siswa->email = $request->email;
        $siswa->password = $request->password;
        $siswa->save;

        return redirect()->action('SiswaController@index');
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
    public function update(Request $request, $id)
    {
        //
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
}
