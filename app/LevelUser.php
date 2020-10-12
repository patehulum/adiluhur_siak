<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LevelUser extends Model
{
    //Menghubungkan model dengan table
    protected $table = 'tbl_level_user';
    
    protected $primaryKey = 'id_level_user';

    //Menentukan field yang boleh diisi
    protected $fillable = [
        'nama_level'
    ];

    public function user(){
        return $this->hasMany('App\User');
    }
}
