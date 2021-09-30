<?php

namespace App\Http\Controllers\Client;


use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use DB;
use Gloudemans\Shoppingcart\Cart;


class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:client');
    }

    public function index()
    {
        return view('userbackend.userpanel');
    }


    public function profile()
    {
        $user_id = auth()->id();

        $user = User::where('id',$user_id)->firstOrFail();

        $countries = DB::table('countries')->pluck("name","id");

        return view('userbackend.profile.index',compact('user','countries'));
    }

    public function getStates($id)
    {
        $states = DB::table("states")->where("countries_id",$id)->pluck("name","id");
        return json_encode($states);
    }




    public function kaydet()
    {
        $data = request()->only('name','surname','email','company','website','phone','address','country','state','addcomment');

        $entry = Auth::where('id',Auth::id())->firstOrFail();
        $entry1 = Auth::where('id',Auth::id())->firstOrFail();

        $entry->update($data);
        $entry1->update($data);

        if(request()->hasFile('image'))
        {
            $this->validate(request(),[
                'image' => 'image|mimes:jpg,png,jpeg,gif|max:2048'
            ]);

            $urun_resmi = request()->file('image');
            $urun_resmi = request()->image;

            $dosyad = $entry1->id . "-" . time() . "." . $urun_resmi->extension();

            if($urun_resmi->isValid())
            {
                $urun_resmi->move('/frontend/uploads/user/profile/',$dosyad);

                User::updateOrCreate(
                    ['id' => $entry1->id],
                    ['image'=> $dosyad]
                );

            }
        }



    }
}
