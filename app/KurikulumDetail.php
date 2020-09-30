<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KurikulumDetail extends Model
{
    //Menghubungkan model dengan table
    protected $table = 'tbl_kurikulum_detail';

    //Menentukan field yang boleh diisi
    protected $fillable = [
        'id_kurikulum', 'kd_mapel', 'kd_jurusan', 'kd_tingkatan'
    ];
}
