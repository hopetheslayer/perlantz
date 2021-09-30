<?php

namespace App\Http\Controllers\Admin\Tema;

use App\Tema\Aboutus;
use App\Tema\İletisimAyarları;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ContactusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {

        $iletisimayar = İletisimAyarları::where('id',1)->get();

        return view('backend.ayar.tema-contactus',compact('iletisimayar'));
    }

    public function kaydet(Request $request)
    {
        $data = request()->only('image','image_yazi','image_alt_yazi','contact_baslik','contact_yazi','contact_adres','contact_adres','contact_tel','contact_mail','contact_acilis','contact_acilis_saat','iframe');

        $entry = İletisimAyarları::where('id',1)->firstOrFail();




        if(Input::hasFile('imagez'))
        {
            $file = Input::file('imagez');
            $file->move('frontend/uploads/theme/contactus',$file->getClientOriginalName());
            $entry->imagez = $file->getClientOriginalName();
        }


        $entry->update($data);

        toastr()->success('Veri Başarıyla Güncellendi :)');



        return redirect()->route('admin.contactus.getir',$entry->id);
    }
}
