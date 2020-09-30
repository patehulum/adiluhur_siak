<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiwayatKelas extends Model
{
    //Menghubungkan model dengan table
    protected $table = 'tbl_agama';

    //Menentukan field yang boleh diisi
    protected $fillable = [
        'kd_kelas', 'nis', 'id_tahun_akademik'
    ];
}
