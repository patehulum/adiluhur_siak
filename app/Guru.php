<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    //Menghubungkan model dengan table
    protected $table = 'tbl_guru';

    //Menentukan field yang boleh diisi
    protected $fillable = [
        'nuptk', 'nama_guru', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'alamat_guru', 'status',
        'pendidikan_terakhir', 'tahun', 'no_telp', 'foto', 'username', 'password'
    ];
}
