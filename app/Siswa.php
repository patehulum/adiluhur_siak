<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //Menghubungkan model dengan table
    protected $table = 'tbl_siswa';

    //Menentukan field yang boleh diisi
    protected $fillable = [
        'nama', 'jenis_kelamin', 'alamat_siswa', 'tanggal_lahir', 'tempat_lahir', 'nama_ayah', 'nama_ibu',
        'alamat_ortu', 'no_telp_ortu', 'no_telp_siswa', 'no_ijazah', 'asal_sekolah', 'kd_agama', 'foto',
        'kd_kelas', 'status_siswa', 'email', 'password'
    ];

    public function menu(){
    return $this->belongsTo('App\Menu');
    }
}
