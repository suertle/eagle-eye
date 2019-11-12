<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    public function checkins()
    {
        return $this->hasMany('App\Models\Checkin');
    }

    public function rent_lists()
    {
        return $this->hasMany('App\Models\RentList');
    }

    public function member_plan()
    {
        return $this->belongsTo('App\Models\MemberPlan');
    }
}
