<?php

namespace App\Http\Controllers\Admin\Tema;

use App\Http\Controllers\Controller;
use App\Tema\returnwarranty;
use Illuminate\Http\Request;

class ReturnwarrantyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {

        $engraving = returnwarranty::where('id',1)->get();

        return view('backend.ayar.tema-returnwarranty',compact('engraving'));
    }

    public function kaydet(Request $request)
    {
        request()->validate([
            'aciklama' =>'required',

        ]);

        $entry = returnwarranty::where('id',1)->firstOrFail();

        $entry->aciklama  = request('aciklama');

        $entry->update();

        toastr()->success('Veri Başarıyla Güncellendi :)');



        return redirect()->route('admin.engraving.getir',$entry->id);
    }
}
