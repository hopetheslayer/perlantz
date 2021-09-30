<?php



namespace App\Http\Controllers;



use App\Http\Requests\ContactRequest;

use App\Mail\NewContactRequest;



use App\Mail\NewSubscribeRequest;

use App\Models\Blog\Blog;

use App\Models\Forms\Contact;

use App\Models\KategoriUrun\Kategori;

use App\Models\KategoriUrun\Urun;

use App\Models\Subscribers;

use App\Tema\Aboutdiamonds;
use App\Tema\Aboutgemstones;
use App\Tema\aboutpearls;
use App\Tema\Aboutus;

use App\Tema\braceletsize;
use App\Tema\engagementrings;
use App\Tema\İletisimAyarları;

use App\Tema\returnwarranty;
use App\Tema\RingAyar;
use App\Tema\TemaAyarları;

use Brian2694\Toastr\Facades\Toastr;

use Illuminate\Http\Request;

use Mail;

use Illuminate\Support\Facades\DB;



class SayfaController extends Controller

{



    public function test()

    {

        $temaayar = TemaAyarları::where('id',1)->get();

        return view('test');

    }

    public function engraving()
    {
        $temaayar = TemaAyarları::where('id',1)->get();
        $engraving = returnwarranty::where('id',1)->get();
        return view('frontend.sayfalar.engraving',compact('temaayar','engraving'));
    }

    public function braceletsize()
    {
        $temaayar = TemaAyarları::where('id',1)->get();
        $braceletsize = braceletsize::where('id',1)->get();
        return view('frontend.sayfalar.braceletsize',compact('temaayar','braceletsize'));
    }

    public function aboutdiamonds()
    {
        $temaayar = TemaAyarları::where('id',1)->get();
        $diamondsbilgi = Aboutdiamonds::where('id',1)->get();
        return view('frontend.sayfalar.aboutdiamonds',compact('temaayar','diamondsbilgi'));
    }

    public function aboutgemstones()
    {
        $temaayar = TemaAyarları::where('id',1)->get();
        $gemstonebilgi = Aboutgemstones::where('id',1)->get();
        return view('frontend.sayfalar.aboutgemstones',compact('temaayar','gemstonebilgi'));
    }

    public function aboutpearls()
    {
        $temaayar = TemaAyarları::where('id',1)->get();
        $pearlsbilgi = aboutpearls::where('id',1)->get();
        return view('frontend.sayfalar.aboutpearls',compact('temaayar','pearlsbilgi'));
    }

    public function engagementrings()
    {
        $temaayar = TemaAyarları::where('id',1)->get();
        $engagement = engagementrings::where('id',1)->get();
        return view('frontend.sayfalar.engagementrings',compact('temaayar','engagement'));
    }

    public function weddingringguide()
    {
        $temaayar = TemaAyarları::where('id',1)->get();
        $wedding = RingAyar::where('id',1)->get();
        return view('frontend.sayfalar.weddingringguide',compact('temaayar','wedding'));
    }

    public function return()
    {
        $temaayar = TemaAyarları::where('id',1)->get();



        return view('frontend.return',compact('temaayar'));

    }




    public function index()

    {

        $kat = DB::table('urun')->where('id', '1')->take(1)->get();

        $kat1 = DB::table('urunkategori')->where('id', '16')->get();

        $kat2 = DB::table('urunkategori')->where('id', '17')->get();

        $kat3 = DB::table('urunkategori')->where('id', '18')->get();

        $kat4 = DB::table('urunkategori')->where('id', '5')->get();


        $most_recent = Urun::where('goster_cok_satan',1)->

            orderBy('updated_at','asc')->take(8)->get();



        $feautures = Urun::where('goster_one_cikan',1)->

        orderBy('updated_at','asc')->take(8)->get();



        $blog = Blog::where('yayın',1)->get();



        $kategoriler = Kategori::whereRaw('üst_id is null')->get();




        $temaayar = TemaAyarları::where('id',1)->get();



    return view('frontend.anasayfa',compact('most_recent','kategoriler','feautures','blog','temaayar','kat','kat1','kat2','kat3','kat4'));

    }



    public function shop(Request $request)

    {

        $kategoriler = Kategori::whereRaw('üst_id is null')->get();

        $temaayar = TemaAyarları::where('id',1)->get();





        $sirala = request('shortby');



        if($sirala == 'most-popular')

        {

            $urunler = $kategoriler->urunler()

                ->distinct()

                ->orderBy('goster_cok_satan','desc')

                ->paginate(9);

        }



        return view('frontend.shop',compact('kategoriler','temaayar','urunler'));

    }







    public function mail(Request $request)

    {

        request()->validate([

            'name',

            'email',

            'subject',

            'message'

        ]);



        Contact::create($request->all());



        Mail::to('sales@invamedoem.com')->send(new NewContactRequest($request));


        toastr()->success('Your message has been successfully sent');




        return back();

    }



    public function subs(Request $request)

    {

        request()->validate([

            'name',

        ]);



        Subscribers::create($request->all());



        Mail::to('sales@invamedoem.com')->send(new NewSubscribeRequest($request));

        Toastr::success('Thank you for your subscription','SUCCESS');



        return back();

    }



    public function hakkimda()

    {

        $kategoriler = Kategori::whereRaw('üst_id is null')->get();



        $aboutus = Aboutus::where('id',1)->get();



        $temaayar = TemaAyarları::where('id',1)->get();



        return view('frontend.hakkimda',compact('kategoriler','aboutus','temaayar'));

    }



    public function iletisim()

    {

        $temaayar = TemaAyarları::where('id',1)->get();

        $kategoriler = Kategori::whereRaw('üst_id is null')->get();

        $iletisim = İletisimAyarları::where('id',1)->get();

        return view('frontend.iletisim',compact('kategoriler','iletisim','temaayar'));

    }



    public function privacy()

    {

        $temaayar = TemaAyarları::where('id',1)->get();



        return view('frontend.privacy-policy',compact('temaayar'));

    }

    public function cookie()

    {

        $temaayar = TemaAyarları::where('id',1)->get();



        return view('frontend.cookie-policy',compact('temaayar'));

    }

    public function terms()

    {

        $temaayar = TemaAyarları::where('id',1)->get();

        return view('frontend.termsconditions',compact('temaayar'));

    }


    public function aboutus()
    {
        $temaayar = TemaAyarları::where('id',1)->get();

        return view('frontend.hakkimda',compact('temaayar'));
    }

    public function faq()
    {
        $temaayar = TemaAyarları::where('id',1)->get();

        return view('frontend.faq',compact('temaayar'));
    }

    public function contactus()
    {
        $temaayar = TemaAyarları::where('id',1)->get();

        return view('frontend.iletisim',compact('temaayar'));
    }

    public function returnform()
    {
        $temaayar = TemaAyarları::where('id',1)->get();

        return view('frontend.returnform',compact('temaayar'));
    }



}

