<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecialCode extends Model
{
    //
    protected $table = 'specialcodes';
    protected $primaryKey = 'id_code';
    public $timestamps = false;
    public $incrementing = true;
    
    protected $fillable =
        ['codename','codestatus','discount','free_shippingfee'];


    public function codeusage(){
        return $this->hasMany('App\CodeUsage','id_code');
    }
    
    
}
