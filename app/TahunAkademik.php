<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahunAkademik extends Model
{
    //Menghubungkan model dengan table
    protected $table = 'tbl_tahun_akademik';

    protected $primaryKey = 'id_tahun_akademik';

    //Menentukan field yang boleh diisi
    protected $fillable = [
        'tahun_akademik', 'is_aktif', 'semester'
    ];
}
