<?php

namespace App\Http\Controllers\Admin\Tema;

use App\Http\Controllers\Controller;
use App\Tema\braceletsize;
use Illuminate\Http\Request;

class braceletsizeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {

        $braceletsize = braceletsize::where('id',1)->get();

        return view('backend.ayar.tema-braceletsize',compact('braceletsize'));
    }

    public function kaydet(Request $request)
    {
        request()->validate([
            'aciklama' =>'required',

        ]);

        $entry = braceletsize::where('id',1)->firstOrFail();

        $entry->aciklama  = request('aciklama');

        $entry->update();

        toastr()->success('Veri Başarıyla Güncellendi :)');



        return redirect()->route('admin.braceletsize.getir',$entry->id);
    }
}
