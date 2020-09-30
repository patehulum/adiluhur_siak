<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewUser extends Model
{
    //Menghubungkan model dengan table
    protected $table = 'view_user';

    //Menentukan field yang boleh diisi
    protected $fillable = [
        'nama_lengkap', 'username', 'password', 'id_level_user', 'foto', 'nama_level'
    ];
}
