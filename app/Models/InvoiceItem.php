<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    protected $guarded = ['id'];

    public function member()
    {
        return $this->belongsTo('App\Models\Member');
    }

    public function invoice()
    {
        return $this->belongsTo('App\Models\RentList');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\product');
    }
}
