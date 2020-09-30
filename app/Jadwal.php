<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    //Menghubungkan model dengan table
    protected $table = 'tbl_jadwal';

    //Menentukan field yang boleh diisi
    protected $fillable = [
        'id_tahun_akademik', 'semester', 'kd_jurusan', 'kd_tingkatan', 'kd_kelas', 'kd_mapel', 
        'id_guru', 'jam', 'kd_ruangan', 'hari'
    ];
}
