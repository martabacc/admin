<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verified extends Model
{
    //
    protected $table = 'verified';
    protected $primaryKey = 'id_verified';

    public $timestamps = false;
    public $incrementing = true;


    protected $fillable =
        ['id_user',
         'verification_img',
         'is_verified',
         'verified_by',
         'verified_date'];

    protected $dates = ['verified_date'];

    public function user(){
        return $this->belongsTo('App\User','id_user');
    }
}
