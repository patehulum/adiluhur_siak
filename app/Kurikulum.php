<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
    //Menghubungkan model dengan table
    protected $table = 'tbl_kurikulum';

    protected $primaryKey = 'id_kurikulum';

    //Menentukan field yang boleh diisi
    protected $fillable = [
        'nama_kurikulum', 'is_aktif'
    ];

    public function jurusan(){
        return $this->hasMany('App\Jurusan');
    }

    public function kelas(){
        return $this->hasMany('App\Kelas');
    }

    public function detail(){
        return $this->hasMany('App\KurikulumDetail');
    }
}
