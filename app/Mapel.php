<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    //Menghubungkan model dengan table
    protected $table = 'tbl_mapel';

    //Menentukan field yang boleh diisi
    protected $fillable = [
        'nama_mapel'
    ];
}
