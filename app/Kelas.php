<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    //Menghubungkan model dengan table
    protected $table = 'tbl_kelas';
    
    protected $primaryKey = 'kd_kelas';

    public $incrementing = false;

    //Menentukan field yang boleh diisi
    protected $fillable = [
        'kd_kelas', 'nama_kelas', 'kd_tingkatan', 'kd_jurusan'
    ];


    public function siswa(){
        return $this->hasMany('App\Siswa');
    }

    public function tingkatan(){
        return $this->belongsTo('App\TingkatanKelas', 'kd_tingkatan', 'kd_tingkatan');
    }

    public function jurusan(){
        return $this->belongsTo('App\Jurusan', 'kd_jurusan', 'kd_jurusan');
    }

}
