<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';
    protected $primaryKey = 'id_item';
    public $incrementing = true;

    protected $fillable =
        [   'name',
            'description',
            'start_time',
            'end_time',
            'id_user',
            'starting_price',
            'expected_price',
            'winning_status'];

    protected $dates = ['start_time','end_time'];
    public $timestamps = false;

    public function image(){
        return $this->hasManyThrough(
            'App\Image','App\ItemImage',
            'id_item','id_image');
    }

    public function user(){
        return $this->belongsTo('App\User', 'id_user');
    }
}
