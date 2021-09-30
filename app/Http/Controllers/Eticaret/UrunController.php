<?php

namespace App\Http\Controllers\Eticaret;

use App\Mail\NewPorductreqRequest;
use App\Models\KategoriUrun\Comment;
use App\Models\KategoriUrun\Kategori;
use App\Models\KategoriUrun\Urun;
use App\Models\KategoriUrun\Urundosya;
use App\Models\Productreq;
use App\Tema\TemaAyarları;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;

class UrunController extends Controller
{

    public function shop()
    {

    }

    public function urun($slug_urunadi)
    {
        $urun = Urun::whereSlug($slug_urunadi)->firstOrFail();
        // iki tane olandan kategoriyi 1 e indirmek
        $kategoriler = Kategori::whereRaw('üst_id is null')->get();
        //$urun = Urun::where('slug',$slug_urunadi)->firstOrFail();
        $temaayar = TemaAyarları::where('id',1)->get();
        $most_recent = Urun::select('urun.*')
            ->where('goster_cok_satan',1)->
            orderBy('updated_at','asc')->take(5)->get();
        $rand_product  = Urun::inRandomOrder()->where('goster_one_cikan','=',1)->orderByRaw('created_at ASC')->take(3)->get();
        $feautures = Urun::inRandomOrder('goster_one_cikan',1)->
        orderBy('created_at','desc')->take(8)->get();






        return view('frontend.urun.product',compact('urun','kategoriler','most_recent','rand_product','temaayar','feautures'));
    }

    public function ara()
    {

        $aranan = request()->input('aranan');
        $urunler = Urun::where('urun_adi','like',"%$aranan%")
            ->orwhere('aciklama','like',"%$aranan%")
            ->get();

        request()->flash();

        return view('arama',compact('urunler'));
    }

    public function postStar(Request $request,$id)
    {
        request()->validate([
            'rating' =>'required',

        ]);

        $urun  = Urun::find($id);

        $urun->rating = request('rating');

        $urun->update();

        return redirect()->back();

    }


    public function sendreq(Request $request)
    {

        request()->validate([
            'name',
            'surname',
            'phone',
            'email',
            'company',
            'quantity',
            'another',
            'urun_adi',
            'oz1',
            'oz2',
            'oz3',
            'renk',
        ]);

            $proreq = new Productreq;


            $proreq->name = request('name');
            $proreq->surname = request('surname');
            $proreq->phone = request('phone');
            $proreq->email = request('email');
            $proreq->company = request('company');
            $proreq->quantity = request('quantity');
            $proreq->another = request('another');
            $proreq->urun_adi = request('urun_adi');
            $proreq->oz1 = request('oz1');
            $proreq->oz2 = request('oz2');
            $proreq->oz3 = request('oz3');
            $proreq->renk = request('renk');


        Mail::to('info@perlantz.com')
            ->cc('umutderebek@rdglobal.com.tr')
            ->send(new NewPorductreqRequest($request));

            $proreq->save();



        Toastr::success('Your message has been successfully sent ','SUCCESS');

        return back();

    }




}
