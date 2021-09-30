<?php

namespace App\Http\Controllers\Admin\Urun;

use App\Exports\UrunsExport;
use App\Http\Controllers\Controller;
use App\Imports\UrunsImport;
use App\Models\KategoriUrun\Urun;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UrunImporter extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function importExportView()
    {
        return view('backend.urun.import');
    }
    public function export()
    {
        return Excel::download(new UrunsExport(), 'urun.xlsx');
    }

    public function import(Request $request)
    {
        Excel::import(new UrunsImport, request()->file('file'));
        toastr()->success('Veri Başarıyla Eklendi :)');
        return back();
    }
}
