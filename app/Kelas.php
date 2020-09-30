<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    //Menghubungkan model dengan table
    protected $table = 'tbl_kelas';

    //Menentukan field yang boleh diisi
    protected $fillable = [
        'kd_kelas', 'nama_kelas', 'kd_tingkatan', 'kd_jurusan'
    ];
}
