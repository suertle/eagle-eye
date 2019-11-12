<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $guarded = ['id'];

    public function member()
    {
        return $this->belongsTo('App\Models\Member');
    }

    public function invoice_items()
    {
        return $this->hasMany('App\Models\InvoiceItem');
    }
}
