<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Administrator extends Authenticatable
{
    use Notifiable;
    
    protected $tables = 'administrators';
//    protected $primaryKey = 'id_admin';

    protected $fillable = [
        'name', 'email', 'password', 'username'
    ];


    public $incrementing = true;
    protected $hidden = [
        'password', 'remember_token'
    ];

    public $timestamps = true;
}
