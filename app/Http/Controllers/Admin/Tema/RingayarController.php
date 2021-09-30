<?php

namespace App\Http\Controllers\Admin\Tema;

use App\Http\Controllers\Controller;
use App\Tema\RingAyar;
use App\Tema\ringguide;
use Illuminate\Http\Request;

class RingayarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {

        $wedding = RingAyar::where('id',1)->get();

        return view('backend.ayar.tema-weddingrings',compact('wedding'));
    }

    public function kaydet(Request $request)
    {
        request()->validate([
            'aciklama' =>'required',

        ]);

        $entry = RingAyar::where('id',1)->firstOrFail();

        $entry->aciklama  = request('aciklama');

        $entry->update();

        toastr()->success('Veri Başarıyla Güncellendi :)');



        return redirect()->route('admin.weddingrings.getir',$entry->id);
    }
}
