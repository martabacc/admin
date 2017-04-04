<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IssueType extends Model
{
    protected $table = 'issuetypes';
    protected $primaryKey = 'id_issue_type';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable =
        ['name','priority'];

    public function issue(){
        return $this->hasMany('App\Issues','id_issue_type');
    }
}
