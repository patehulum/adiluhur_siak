<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRules extends Model
{
    //Menghubungkan model dengan table
    protected $table = 'tbl_user_rules';

    //Menentukan field yang boleh diisi
    protected $fillable = [
        'id_menu', 'id_level_user'
    ];
}
