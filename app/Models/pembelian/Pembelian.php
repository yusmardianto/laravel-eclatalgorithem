<?php

namespace App\Models\pembelian;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $fillable = [
        'purchase_document', 'name_product', 'stock', 'order_quantity', 'order_unit', 'origin','keterangan'
    ];
}
