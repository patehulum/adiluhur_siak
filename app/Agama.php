<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
    //Menghubungkan model dengan table
    protected $table = 'tbl_agama';

    //Menentukan field yang boleh diisi
    protected $fillable = [
        'nama_agama'
    ];

    protected $primaryKey = 'kd_agama';

    public function siswa(){
        return $this->hasMany('App\Siswa');
    }

    public function guru(){
        return $this->hasMany('App\Guru');
    }
}
