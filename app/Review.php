<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';
    protected $primaryKey = 'id_review';
    public $incrementing = true;

    protected $fillable =
        [   'id_user',
            'id_reviewer',
            'description',
            'star_count',
            'timestamp'];

    protected $timestamp = ['timestamp'];

    public function user(){
        return $this->belongsTo('App\User','id_user');
    }

    public function reviewer(){
        return $this->belongsTo('App\User','id_reviewer');
    }

    public $timestamps = false;

}
