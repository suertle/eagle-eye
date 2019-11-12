<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentListItem extends Model
{
    protected $guarded = ['id'];

    public function member()
    {
        return $this->belongsTo('App\Models\Member');
    }

    public function rent_list()
    {
        return $this->belongsTo('App\Models\RentList');
    }

    public function rent_thing()
    {
        return $this->belongsTo('App\Models\RentThing');
    }
}
