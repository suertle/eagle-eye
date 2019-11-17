<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    public function supplier()
    {
        return $this->belongsTo('App\Models\Supplier')->withTrashed();
    }
}
