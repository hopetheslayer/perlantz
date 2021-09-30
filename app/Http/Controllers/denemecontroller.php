<?php

namespace App\Http\Controllers;

use App\User;
use App\Userdetay;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class denemecontroller extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function kaydet(Request $request,$id)
    {

        $this->validate(request(),[
            'imageb' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'phone' => 'required|max:50',
            'website' => 'required|max:100'
        ]);

        $user = Userdetay::find($id);
        $user->website = request('website');
        $user->phone = request('phone');
        $user->country = request('country');
        $user->state = request('state');

        if($request->file('imageb'))
        {
            $file = $request->file('imageb');
            $file->move('frontend/uploads/profile',$file->getClientOriginalName());
            $user->imageb = $file->getClientOriginalName();
        }


        $user->update();




        toastr()->success('Veri Başarıyla Güncellendi :)');

        return redirect()->back();


    }

}
