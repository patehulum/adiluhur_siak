<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KurikulumDetail extends Model
{
    //Menghubungkan model dengan table
    protected $table = 'tbl_kurikulum_detail';

    protected $primaryKey = 'id_kurikulum_detail';

    //Menentukan field yang boleh diisi
    protected $fillable = [
        'id_kurikulum', 'kd_mapel', 'kd_jurusan', 'kd_tingkatan'
    ];

    public function kurikulum(){
        return $this->belongsTo('App\Kurikulum', 'id_kurikulum', 'id_kurikulum');
    }
    
    public function mapel(){
        return $this->belongsTo('App\Mapel', 'kd_mapel', 'kd_mapel');
    }

    public function jurusan(){
        return $this->belongsTo('App\Jurusan', 'kd_jurusan', 'kd_jurusan');
    }

    public function tingkatan(){
        return $this->belongsTo('App\TingkatanKelas', 'kd_tingkatan', 'kd_tingkatan');
    }
}
