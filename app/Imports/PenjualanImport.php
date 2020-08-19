<?php

namespace App\Imports;

use App\Pembelian;
use App\Models\penjualan\Penjualan as AppPenjualan;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class PenjualanImport  implements ToCollection
{
    /**
    * @param array $row
    *
    */
    public function collection(Collection $collection)
    {
        foreach($collection as $row)
        {
            AppPenjualan::create([
                'TIDList' => $row[0],
                'name_bill' => $row[1],
                'material' => $row[2],
                'text_material' => $row[3],
            ]);
        }
    }
}
