<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewKelas extends Model
{
    //Menghubungkan model dengan table
    protected $table = 'view_kelas';

    //Menentukan field yang boleh diisi
    protected $fillable = [
        'kd_kelas', 'nama_kelas', 'kd_tingkatan', 'kd_jurusan', 'nama_tingkatan', 'nama_jurusan'
    ];
}
