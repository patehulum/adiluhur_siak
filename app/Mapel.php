<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    //Menghubungkan model dengan table
    protected $table = 'tbl_mapel';

    protected $primaryKey = 'kd_mapel';

    public $incrementing = false;

    //Menentukan field yang boleh diisi
    protected $fillable = [
        'kd_mapel','nama_mapel'
    ];

    public function detail(){
        return $this->hasMany('App\KurikulumDetail');
    }
}
