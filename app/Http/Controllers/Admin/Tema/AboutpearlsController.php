<?php

namespace App\Http\Controllers\Admin\Tema;

use App\Http\Controllers\Controller;
use App\Tema\aboutpearls;
use Illuminate\Http\Request;

class AboutpearlsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {

        $pearlsbilgi = aboutpearls::where('id',1)->get();

        return view('backend.ayar.tema-aboutpearls',compact('pearlsbilgi'));
    }

    public function kaydet(Request $request)
    {
        request()->validate([
            'aciklama' =>'required',

        ]);

        $entry = aboutpearls::where('id',1)->firstOrFail();

        $entry->aciklama  = request('aciklama');

        $entry->update();

        toastr()->success('Veri Başarıyla Güncellendi :)');



        return redirect()->route('admin.pearls.getir',$entry->id);
    }
}
