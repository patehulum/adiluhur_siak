<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRule extends Model
{
    //Menghubungkan model dengan table
    protected $table = 'tbl_user_rules';

    //Menentukan field yang boleh diisi
    protected $fillable = [
        'id_menu', 'id_level_user'
    ];

    public function rules(){
        return $this->hasMany('App\User');
    }

    public function menu(){
        return $this->belongsTo('App\Menu', 'id');
    }
}
