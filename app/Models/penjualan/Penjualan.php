<?php

namespace App\Models\penjualan;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $fillable = [
        'TIDList', 'name_bill', 'material', 'text_material'
    ];
}
