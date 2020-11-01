<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    //Menghubungkan model dengan table
    protected $table = 'tbl_nilai';

    protected $primaryKey = 'id_nilai';

    //Menentukan field yang boleh diisi
    protected $fillable = [
        'id_jadwal', 'nilai_tugas', 'nilai_uts', 'nilai_uas', 'nis','nilai', 'status'
    ];

    public function jadwal()
    {
        return $this->belongsTo('App\Jadwal', 'id_jadwal', 'id_jadwal');
    }

    public function siswa()
    {
        return $this->belongsTo('App\Siswa', 'nis', 'nis');
    }

}
