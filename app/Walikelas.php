<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Walikelas extends Model
{
    //Menghubungkan model dengan table
    protected $table = 'tbl_walikelas';

    //Menentukan field yang boleh diisi
    protected $fillable = [
        'id_guru', 'id_tahun_akademik', 'kd_kelas'
    ];
}
