<?php

namespace App\Http\Controllers\Admin\Tema;

use App\Http\Controllers\Controller;
use App\Tema\Aboutdiamonds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AboutdiamondsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {

        $diamondsbilgi = Aboutdiamonds::where('id',1)->get();

        return view('backend.ayar.tema-aboutdiamonds',compact('diamondsbilgi'));
    }

    public function kaydet(Request $request)
    {
        request()->validate([
            'aciklama' =>'required',

        ]);

        $entry = Aboutdiamonds::where('id',1)->firstOrFail();

        $entry->aciklama  = request('aciklama');

        $entry->update();

        toastr()->success('Veri Başarıyla Güncellendi :)');



        return redirect()->route('admin.diamonds.getir',$entry->id);
    }
}
