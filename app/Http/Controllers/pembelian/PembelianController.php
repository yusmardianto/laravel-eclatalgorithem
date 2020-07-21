<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\PembelianImport;
use App\Models\pembelian\Pembelian;
use DataTables, Hasher, Validator, DB, Excel;

class PembelianController extends Controller
{
    public function index(Request $request)
    {
        return view('pembelian.index');
    }

    public function ajaxList()
    {
        $data = Pembelian::where();

        $datatables = DataTables::of($data);
        return $datatables->addColumn('action', function ($row) {
            $hashed_id = Hasher::encode($row->id);
                return "
                <a class=\"btn btn-xs btn-info\" href=\"". url('pembelian/detail/'.$hashed_id) ."\"><i class=\"glyphicon glyphicon-eye-open\"></i> Detail</a>
                <a class=\"btn btn-xs btn-primary\" href=\"". url('pembelian/edit/'.$hashed_id) ."\"><i class=\"glyphicon glyphicon-edit\"></i> Ubah</a>
                <a class=\"btn btn-xs btn-warning delete-btn\" href=\"#\" data-id=\"". $hashed_id ."\" data-name=\"". $row->name_product ."\"><i class=\"glyphicon glyphicon-trash\"></i> Hapus</a>
                ";
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
    }

    public function uploadExcel(Request $request)
    {
        set_time_limit(0);
        ini_set('memory_limit', '-1');

        $excel = $request->file('excel');
        // Move Uploaded File
        if(isset($excel))
        {
            $destinationPath = 'files';
            $excel->move($destinationPath, $excel->getClientOriginalName());
            $excel1 = $excel->getClientOriginalName();
        }
        else
        {
            $excel1 = null;
        }

        Excel::import(new PembelianImport, public_path('/files/'.$excel1));
        return redirect()->back()->with('success', 'Berhasil Upload File');
    }

    public function destroy($id)
    {
        $data = Pembelian::find($id);
        if(isset($data))
        {
            return redirect()->back()->with('success', 'Berhasil menghapus SK Pensiunan '.$data->name_product);
        }
        else
        {
            return redirect()->back()->with('error', 'Gagal menghapus SK Pensiunan');
        }
    }
}
