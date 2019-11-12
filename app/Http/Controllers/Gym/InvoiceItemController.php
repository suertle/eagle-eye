<?php

namespace App\Http\Controllers\Gym;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ResourceTrait;
use Illuminate\Http\Request;
use App\Models\InvoiceItem;

class InvoiceItemController extends Controller
{
    use ResourceTrait;

    public function __construct() {
        $this->modelName = 'App\Models\InvoiceItem';
    }
}
