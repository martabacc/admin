<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $table = 'issues';
    protected $primaryKey = 'id_issue';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable =
        [   'id_issue_type',
            'id_user',
            'id_issued_user',
            'description',
            'resolve_status',
            'resolve_description'];

    public function user(){
        return $this->belongsTo('App\User','id_user');
    }

    public function issued_user(){
        return $this->belongsTo('App\User','id_issued_user','id_user');
    }

    public function issuetype(){
        return $this->belongsTo('App\IssueType','id_issue_type','id_issue_type');
    }

}
