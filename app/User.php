<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $tables = 'users';
    protected $primaryKey = 'id_user';

    protected $fillable = [
        'name', 'email', 'password','address','id_verify','id_image','phone','id_city','id_province'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public $incrementing = true;
    protected $hidden = [
        'password', 'remember_token',
    ];
    public $timestamps = true;

    public function isVerified()
    {
        return $this->id_verify !=null;
    }
    public function item(){
        return $this->hasMany('App\Item','id_user');
    }

    public function codeusage(){
        return $this->hasMany('App\Item','id_user');
    }
    
    public function verified(){
        return $this->belongsTo('App\Verified','id_verify');
    }

    public function reviews(){
        return $this->hasMany('App\Review','id_user');
    }

    public function reviewed(){
        return $this->hasMany('App\Review','id_reviewer');
    }

    public function issued(){
        return $this->hasMany('App\Issue','id_issued_user');
    }

}
