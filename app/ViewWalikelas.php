<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewWalikelas extends Model
{
    //Menghubungkan model dengan table
    protected $table = 'view_walikelas';

    //Menentukan field yang boleh diisi
    protected $fillable = [
        'nama_guru', 'nama_kelas', 'id_walikelas', 'id_tahun_akademik', 'nama_jurusan','nama_tingkatan', 'tahun_akademik'
    ];
}
