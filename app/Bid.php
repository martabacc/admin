<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
	protected $table = 'bids';
    protected $primaryKey = 'id_bid';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable =
        [   'item_id',
            'user_id',
            'price',
            'win_status',
            'timestamp',];
}
