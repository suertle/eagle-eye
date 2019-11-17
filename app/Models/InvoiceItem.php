<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    protected $guarded = ['id'];

    public function member()
    {
        return $this->belongsTo('App\Models\Member')->withTrashed();
    }

    public function invoice()
    {
        return $this->belongsTo('App\Models\Invoice');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product')->withTrashed();
    }
}
