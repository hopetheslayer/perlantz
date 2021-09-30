<?php

namespace App\Http\Controllers\Admin\Tema;

use App\Tema\Aboutus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class AboutusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {
        $aboutus = Aboutus::findOrFail(1)->get();
        return view('backend.ayar.tema-aboutus',compact('aboutus'));
    }

    public function kaydet(Request $request)
    {
        $data = request()->only('baslik','baslik_yazi','fp','fp_baslik','fp_yazi','fd','fd_baslik','fd_yazi','dl','dl_baslik','dl_yazi','sayi1','sayi1_yazi','sayi2','sayi2_yazi','sayi3','sayi3_yazi','sayi4','sayi4_yazi');

        $entry = Aboutus::where('id',1)->firstOrFail();



        if(Input::hasFile('image'))
        {
            $file = Input::file('image');
            $file->move('frontend/uploads/theme/aboutus',$file->getClientOriginalName());
            $entry->image = $file->getClientOriginalName();
        }

        if(Input::hasFile('imagex'))
        {
            $file = Input::file('imagex');
            $file->move('frontend/uploads/theme/aboutus',$file->getClientOriginalName());
            $entry->imagex = $file->getClientOriginalName();
        }



        $entry->update($data);

        toastr()->success('Veri Başarıyla Güncellendi :)');



        return redirect()->route('admin.aboutus.getir',$entry->id);
    }

}
