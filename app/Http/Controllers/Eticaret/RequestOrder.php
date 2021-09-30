<?php

namespace App\Http\Controllers\Eticaret;

use App\Models\KategoriUrun\Kategori;
use App\Tema\TemaAyarları;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Siparis\Siparis;
use Illuminate\Support\Facades\DB;

class RequestOrder extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $siparisler = Siparis::with('sepet')->wherehas('sepet',function ($query)
        {
            $query->where('user_id',auth()->id());
        })->get();

        $kategoriler = Kategori::whereRaw('üst_id is null')->get();





        $temaayar = TemaAyarları::where('id',1)->get();

        return view('userbackend.orders.index',compact('siparisler','temaayar','kategoriler'));
    }

    public function detay($id)
    {
        $siparisler = Siparis::with('sepet')->wherehas('sepet',function ($query)
        {
            $query->where('user_id',auth()->id());

        })->where('siparis.id',$id)->get();

        $siparis  = Siparis::with('sepet.sepet_urunler.urun')
            ->whereHas('sepet',function ($query)
            {
                $query->where('user_id',auth()->id());
            })
            ->where('siparis.id',$id)
            ->firstOrFail();

        $temaayar = TemaAyarları::where('id',1)->get();

        return view('userbackend.orders.index-detay',compact('siparis','temaayar','siparisler'));
    }
}
