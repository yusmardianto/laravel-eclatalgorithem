<?php

namespace App\Models\penjualan;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $fillable = [
        'purchase_document', 'name_product', 'stock', 'order_quantity', 'order_unit', 'origin','keterangan'
    ];
}
