<?php

namespace App\Models\eclat;

use Illuminate\Database\Eloquent\Model;

class Eclat extends Model
{
    protected $table = 'tb_eclat';

    protected $fillable = [
        'id_eclat', 'kode_barang', 'id_transaksi', 'level', 'jml'
    ];
}
