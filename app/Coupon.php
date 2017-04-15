<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $table = 'coupon';
    protected $primaryKey = 'coupon_id';

    protected $fillable = [
        'customerfacingcoupon',
        'activedate',
        'expiredate',
        'terms',
        'usages',
        'limit_usages',
        'free_shipping',
        'id_condition',
        'id_user'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public $incrementing = true;
    public $timestamps = false;
    public $timestamp = [ 'activedate', 'expiredate' ];

}
