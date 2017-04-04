<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CodeUsage extends Model
{
    //
    protected $table = 'codeusages';
    protected $primaryKey = 'id_usage';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable =
        [   'id_code',
            'id_user',
            'timestamp'];

    protected $dates = ['timestamp'];

    public function specialcode(){
        return $this->belongsTo('App\SpecialCode','id_code');
    }
}
