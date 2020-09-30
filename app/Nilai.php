<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    //Menghubungkan model dengan table
    protected $table = 'tbl_nilai';

    //Menentukan field yang boleh diisi
    protected $fillable = [
        'id_jadwal', 'nilai_tugas', 'nilai_uts', 'nilai_uas', 'nis','nilai', 'status'
    ];
}
