<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    //Menghubungkan model dengan table
    protected $table = 'tbl_ruangan';

    //Menentukan field yang boleh diisi
    protected $fillable = [
        'nama_ruangan', 'kapasitas'
    ];
}
