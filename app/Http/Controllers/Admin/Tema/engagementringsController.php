<?php

namespace App\Http\Controllers\Admin\Tema;

use App\Http\Controllers\Controller;
use App\Tema\engagementrings;
use Illuminate\Http\Request;

class engagementringsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {

        $engagement = engagementrings::where('id',1)->get();

        return view('backend.ayar.tema-engagementrings',compact('engagement'));
    }

    public function kaydet(Request $request)
    {
        request()->validate([
            'aciklama' =>'required',

        ]);

        $entry = engagementrings::where('id',1)->firstOrFail();

        $entry->aciklama  = request('aciklama');

        $entry->update();

        toastr()->success('Veri Başarıyla Güncellendi :)');



        return redirect()->route('admin.engagementrings.getir',$entry->id);
    }
}
