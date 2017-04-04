<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $tables = 'coupon';
    protected $primaryKey = 'coupon_id';

    protected $fillable = [
        'customerfacingcoupon','backendfacingcoupon','activedate','expiredate','terms','usages','limit_usages',
        'free_shipping','id_condition'
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
