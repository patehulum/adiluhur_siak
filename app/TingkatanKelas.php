<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TingkatanKelas extends Model
{
    //Menghubungkan model dengan table
    protected $table = 'tbl_tingkatan_kelas';

    //Menentukan field yang boleh diisi
    protected $fillable = [
        'kd_tingkatan', 'nama_tinkatan'
    ];
}
