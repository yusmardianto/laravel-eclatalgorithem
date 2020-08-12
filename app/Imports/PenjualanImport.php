<?php

namespace App\Imports;

use App\Pembelian;
use App\Models\penjualan\Penjualan as AppPenjualan;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class PenjualanImport  implements ToCollection, WithStartRow
{
    /**
    * @param array $row
    *
    */
    public function collection(Collection $collection)
    {
        foreach($collection as $row)
        {
            $cek = AppPenjualan::where('name_product', $row[1])->first();
            if(isset($cek))
            {
                AppPenjualan::where('name_product', $row[1])->update([
                    'purchase_document' => $row[0],
                    'name_product' => $row[1],
                    'stock' => $row[2],
                    'order_quantity' => $row[3],
                    'order_unit' => $row[4],
                    'origin' => $row[5],
                    'keterangan' => $row[6],
                ]);
            }
            else
            {
                AppPenjualan::create([
                    'purchase_document' => $row[0],
                    'name_product' => $row[1],
                    'stock' => $row[2],
                    'order_quantity' => $row[3],
                    'order_unit' => $row[4],
                    'origin' => $row[5],
                    'keterangan' => $row[6],
                ]);
            }
        }
    }
    public function startRow(): int
    {
        return 10;
    }
}
