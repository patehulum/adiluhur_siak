<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //Menghubungkan model dengan table
    protected $table = 'tabel_menu';

    protected $primaryKey = 'id';

    //Menentukan field yang boleh diisi
    protected $fillable = [
        'nama_menu', 'link', 'icon', 'is_main_menu'
    ];
    
    public function rule(){
        return $this->hasMany('App\UserRule', 'id_menu');
    }

    public function users(){
        return $this->hasMany('App\User');
    }
}
