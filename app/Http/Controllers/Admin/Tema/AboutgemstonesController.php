<?php

namespace App\Http\Controllers\Admin\Tema;

use App\Http\Controllers\Controller;
use App\Tema\Aboutgemstones;
use Illuminate\Http\Request;

class AboutgemstonesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {

        $gemstonebilgi = Aboutgemstones::where('id',1)->get();

        return view('backend.ayar.tema-aboutgemstones',compact('gemstonebilgi'));
    }

    public function kaydet(Request $request)
    {
        request()->validate([
            'aciklama' =>'required',

        ]);

        $entry = Aboutgemstones::where('id',1)->firstOrFail();

        $entry->aciklama  = request('aciklama');

        $entry->update();

        toastr()->success('Veri Başarıyla Güncellendi :)');



        return redirect()->route('admin.gemstone.getir',$entry->id);
    }
}
