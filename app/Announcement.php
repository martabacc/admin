<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    //
    protected $table = 'announcements';
    protected $primaryKey = 'id_announcement';
    public $incrementing = true;
    public $timestamps = true;

    protected $dates = [

        'start_time',
        'end_time',
    ];

    protected $fillable =
        [   'name',
            'description',
            'start_time',
            'end_time',
            'html_code'];

    
}
