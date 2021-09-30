<?php

namespace App\Http\Controllers\Auth;

use App\Models\Sepet\Sepet;
use App\Models\Sepet\SepetUrun;
use Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Session;

class ClientLoginController extends Controller
{
    public function __construct()
    {

        $this->middleware('guest:client',['except' => ['logout']]);
    }

    public function showlogin()
    {
        return view('userbackend.auth.login');
    }



    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('anasayfa');
    }




}
