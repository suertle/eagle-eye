<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Checkin extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    public function member()
    {
        return $this->belongsTo('App\Models\Member')->withTrashed();
    }
}
