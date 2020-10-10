<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    //Menghubungkan model dengan table
    protected $table = 'tbl_jurusan';

    protected $primaryKey = 'kd_jurusan';

    public $incrementing = false;

    //Menentukan field yang boleh diisi
    protected $fillable = [
        'kd_jurusan', 'nama_jurusan'
    ];

    public function kelas(){
        return $this->hasMany('App\Kelas');
    }
}
