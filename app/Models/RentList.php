<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentList extends Model
{
    protected $guarded = ['id'];

    public function member()
    {
        return $this->belongsTo('App\Models\Member');
    }

    public function rent_list_items()
    {
        return $this->hasMany('App\Models\RentListItem');
    }
}
