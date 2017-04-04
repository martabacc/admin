<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    protected $primaryKey = 'id_image';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = ['url'];
}
