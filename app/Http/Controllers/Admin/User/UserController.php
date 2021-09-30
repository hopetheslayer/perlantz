<?php

namespace App\Http\Controllers\Admin\User;

use App\User;
use App\Userdetay;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {

        $user = User::all();

        return view('backend.user.index',compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('backend.user.edit',compact('user'));
    }

    public function guncelle(Request $request,$id)
    {
        $data = request()->only('name','surname');

        $data1 = request()->only('website','phone','urun_resmi','adress_baslik','state','country','adress','adress2','zipcode');

        $entry = User::where('id',$id)->firstOrFail();

        $entry1 = Userdetay::where('id',$id)->firstOrFail();

        if(Input::hasFile('imageb'))
        {
            $file = Input::file('imageb');
            $file->move('frontend/uploads/profile',$file->getClientOriginalName());
            $entry1->imageb = $file->getClientOriginalName();
        }

        $entry->update($data);
        $entry1->update($data1);

        toastr()->success('Veri Başarıyla Güncellendi :)');

        return redirect()->route('admin.user.duzenle',$entry1->id);
    }

    public function sil($id)
    {
        User::destroy($id);
        Userdetay::destroy($id);
        toastr()->success('Veri Başarıyla Güncellendi :)');
        return redirect()->route('admin.user');
    }

}
