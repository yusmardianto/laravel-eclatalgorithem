<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\eclat\Eclat;
use Illuminate\Http\Request;
use DataTables;

class EclatController extends Controller
{
    public function index()
    {
        return view('eclat.index');
    }

    public function ajaxList()
    {
        $data = Eclat::all();

        $datatables = DataTables::of($data);
        return $datatables->addIndexColumn()
            ->make(true);
    }
}
