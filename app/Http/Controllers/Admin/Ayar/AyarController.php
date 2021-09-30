<?php

namespace App\Http\Controllers\Admin\Ayar;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Hash;

class AyarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function Showcph()
    {
        return view('backend.ayar.sifre');
    }

    public function Showcph1(Request $request)
    {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Sistemde tanımlı olan şifreyle şuanki şifreniz aynı degil. Lütfen kontrol ediniz.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","Yeni şifreleriniz Uyuşmuyor. Lütfen kontrol ediniz.");
        }

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        toastr()->success('Veri Başarıyla Güncellendi :)');

        return redirect()->back();
    }

    public function mailsj()
    {
        return view('backend.ayar.mail');
    }

    public function mailsjsj(Request $request)
    {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Sistemde tanımlı olan şifreyle şuanki şifreniz aynı degil. Lütfen kontrol ediniz.");
        }

        if(strcmp($request->get('new-mail'), $request->get('new-mail-confirm')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","Yeni şifreleriniz Uyuşmuyor. Lütfen kontrol ediniz.");
        }

        if(strcmp($request->get('current-gsor'), Auth::user()->addetay->gsor)){
            //Current password and new password are same
            return redirect()->back()->with("error","Gizli Sorunuz Uyuşmuyor. Lütfen Kontrol ediniz");
        }


        $user = Auth::user();

        $user->email = $request->get('new-mail');

        $user->save();

        if($user->save()==1)
        {
            toastr()->success('Veri Başarıyla Güncellendi :)');
        }


        return redirect()->back();

    }
}
