<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemImage extends Model
{	
	protected $table = 'itemimages';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable =
        [   'id_item',
            'id_image',];
}
