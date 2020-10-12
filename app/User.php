<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_lengkap', 'email', 'password', 'id_level_user', 'foto'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    // public function level(){
    //     return $this->belongsTo('App\UserRule');
    // }

    public function id_menu(){
        return $this->belongsTo('App\Menu', 'id_menu');
    }

    public function leveluser(){
        return $this->belongsTo('App\LevelUser', 'id_level_user', 'id_level_user');
    }
}
