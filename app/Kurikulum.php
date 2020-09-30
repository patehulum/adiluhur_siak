<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
    //Menghubungkan model dengan table
    protected $table = 'tbl_kurikulum';

    //Menentukan field yang boleh diisi
    protected $fillable = [
        'nama_kurikulum', 'is_aktif'
    ];
}
