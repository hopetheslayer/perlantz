<?php

namespace App\Http\Controllers\Form;


use App\Mail\NewReqFormRequest;
use App\Models\KategoriUrun\Kategori;
use App\Models\ReqForm;
use App\Tema\TemaAyarları;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Mail;

class ContactSales extends Controller
{
    public function index()
    {

        $countries = DB::table('countries')->pluck("name","id");

        $temaayar = TemaAyarları::where('id',1)->get();

        $kategoriler = Kategori::whereRaw('üst_id is null')->get();

        return view('frontend.salesform.index',compact('countries','temaayar','kategoriler'));
    }

    public function getStates($id)
    {
        $states = DB::table("states")->where("countries_id",$id)->pluck("name","id");
        return json_encode($states);
    }


    public function post(Request $request)
    {

        request()->validate([
            'product_area',
            'firstname',
            'lastname',
            'email',
            'phone',
            'company',
            'jobtitle',
            'country',
            'states',
            'other'
        ]);

        $req = new ReqForm;

        $req->product_area = request('product_area');
        $req->firstname = request('firstname');
        $req->lastname = request('lastname');
        $req->email = request('email');
        $req->phone = request('phone');
        $req->company = request('company');
        $req->jobtitle = request('jobtitle');
        $req->country = request('country');
        $req->states = request('states');
        $req->address = request('address');
        $req->other = request('other');



        $req->save();



        toastr()->success('Veri Başarıyla Gönderildi :)');

        return back();

    }

}
