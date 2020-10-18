<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    //Menghubungkan model dengan table
    protected $table = 'tbl_jadwal';

    protected $primary = 'id_jadwal';

    //Menentukan field yang boleh diisi
    protected $fillable = [
        'id_tahun_akademik', 'semester', 'kd_jurusan', 'kd_tingkatan', 'kd_kelas', 'kd_mapel', 
        'id_guru', 'jam', 'kd_ruangan', 'hari'
    ];

    public function jurusan()
    {
        return $this->belongsTo('App\Jurusan', 'kd_jurusan' ,'kd_jurusan');
    }

    public function tahun()
    {
        return $this->belongsTo('App\TahunAkademik','id_tahun_akademik', 'id_tahun_akademik');
    }

    public function tingkatan()
    {
        return $this->belongsTo('App\TingkatanKelas','kd_tingkatan', 'kd_tingkatan');
    }

    public function kelas()
    {
        return $this->belongsTo('App\Kelas','kd_kelas', 'kd_kelas');
    }

    public function mapel()
    {
        return $this->belongsTo('App\Mapel','kd_mapel', 'kd_mapel');
    }

    public function guru()
    {
        return $this->belongsTo('App\Guru','id_guru', 'id_guru');
    }
 
    public function ruangan()
    {
        return $this->belongsTo('App\Ruangan','kd_ruangan', 'kd_ruangan');
    }


}
