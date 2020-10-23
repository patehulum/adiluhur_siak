<?php

namespace App\Http\Controllers;

use App\Guru;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GuruController extends DashboardBaseController
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
        $guru = Guru::all();

        return view('/guru/index', compact('sql_menu', 'menu', 'guru'));
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

        return view('/guru/create', compact('sql_menu', 'menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $guru = Guru::create($this->validateRequest());
        $this->storeImage($guru);

        User::create([
            'nama_lengkap' => $request->nama_guru,
            'email' => $request->email,
            'password' => $request->password,
            'id_level_user' => 3,
        ]);

        return redirect()->action('GuruController@index')->with('store', 'Data Guru Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_guru)
    {
        $guru = Guru::where('id_guru', $id_guru)->get();
        $menu = $this->view[0]->menu;
        $sql_menu = $this->view[0]->sql_menu;

        return view('/guru/show', compact('sql_menu', 'menu', 'guru'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_guru)
    {
        $guru = Guru::where('id_guru', $id_guru)->firstOrFail();
        $menu = $this->view[0]->menu;
        $sql_menu = $this->view[0]->sql_menu;

        // dd($agama);
        return view('/guru/edit', compact('guru', 'sql_menu', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_guru)
    {
        $guru = Guru::where('id_guru', $id_guru);
        $guru->update($this->validateRequest());
        $this->storeImage($guru);

        User::where('email', $request->email)
            ->update([
                'email' => $request->email,
                'password' => $request->password,
        ]);

        return redirect()->action('GuruController@index')->with('update', 'Data Guru Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_guru)
    {
        Guru::destroy($id_guru);

        return redirect()->action('GuruController@index');
    }

    public function validateRequest()
    {
        return tap(request()->validate([
            'nuptk'                 => 'required',
            'nama_guru'             => 'required',
            'tempat_lahir'          => 'required',
            'tanggal_lahir'         => 'required',
            'jenis_kelamin'         => 'required',
            'alamat_guru'           => 'required',
            'status'                => 'required',
            'pendidikan_terakhir'   => 'required',
            'tahun'                 => 'required',
            'no_telp'               => 'required',
            'status'                => 'required',
            'email'                 => 'required',
            'password'              => 'required',
        ]), function(){
            if (request()->hasFile('foto')){
            request()->validate([
                'foto' => 'required|image',
            ]);
        }
        });
    }

    public function storeImage($guru)
    {
        if(request()->has('foto')){
            $guru->update([
                'foto' => Storage::put('Guru', request()->foto),
            ]);
        }
    }
}
