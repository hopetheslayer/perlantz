<?php

namespace App\Http\Controllers\Eticaret;

use App\Models\KategoriUrun\Kategori;

use App\Models\KategoriUrun\Urun;
use App\Tema\TemaAyarları;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{
    public function index(Request $request,$slug_kategoriadi)
    {

        $kategoriler = Kategori::whereRaw('üst_id is null')->get();

        $temaayar = TemaAyarları::where('id',1)->get();

        $kategori = Kategori::where('slug',$slug_kategoriadi)->firstOrFail();

        $alt_kategori = Kategori::where('üst_id',$kategori->id)->get();

        $sirala = request('shortby');

        if($sirala == 'most-popular')
        {
            $urunler = $kategori->urunler()
                ->distinct()
                ->orderBy('goster_one_cikan','asc')
                ->paginate(9);

        }

        else if ($sirala == '0-200')
        {
            $urunler = $kategori->urunler()
                ->distinct()
                ->where('fiyat_eur_indirim','<',200)->orderBy('fiyat_eur_indirim','asc')
                ->paginate(9);
        }

        else if ($sirala == '200-500')
        {
            $urunler = $kategori->urunler()
                ->distinct()
                ->where('fiyat_eur_indirim','>',200)->where('fiyat_eur_indirim','<',500)->orderBy('fiyat_eur_indirim','asc')
                ->paginate(9);
        }

        else if ($sirala == '500-1000')
        {
            $urunler = $kategori->urunler()
                ->distinct()
                ->where('fiyat_eur_indirim','>',500)->where('fiyat_eur_indirim','<',1000)->orderBy('fiyat_eur_indirim','asc')
                ->paginate(9);
        }

        else if ($sirala == '1000-2000')
        {
            $urunler = $kategori->urunler()
                ->distinct()
                ->where('fiyat_eur_indirim','>',1000)->where('fiyat_eur_indirim','<',2000)->orderBy('fiyat_eur_indirim','asc')
                ->paginate(9);
        }

        else if ($sirala == '2000')
        {
            $urunler = $kategori->urunler()
                ->distinct()
                ->where('fiyat_eur_indirim','>',2000)->orderBy('fiyat_eur_indirim','asc')
                ->paginate(9);
        }

        else if ($sirala == 'new-products')
        {
            $urunler = $kategori->urunler()
                ->distinct()
                ->orderBy('goster_one_cikan','desc')
                ->paginate(9);
        }

        else if ($sirala == 'color-white')
        {
            $urunler = $kategori->urunler()
                ->distinct()
                ->where('renk','white')
                ->paginate(9);
        }
        else if ($sirala == 'color-yellow')
        {
            $urunler = $kategori->urunler()
                ->distinct()
                ->where('renk','yellow')
                ->paginate(9);
        }
        else if ($sirala == 'color-red')
        {
            $urunler = $kategori->urunler()
                ->distinct()
                ->where('renk','red')
                ->paginate(9);
        }

        else if ($sirala == 'white-yellow')
        {
            $urunler = $kategori->urunler()
                ->distinct()
                ->where('renk','whiteyellow')
                ->paginate(9);
        }

        else if ($sirala == 'yellow-white')
        {
            $urunler = $kategori->urunler()
                ->distinct()
                ->where('renk','yellowwhite')
                ->paginate(9);
        }

        else if ($sirala == 'red-white')
        {
            $urunler = $kategori->urunler()
                ->distinct()
                ->where('renk','redwhite')
                ->paginate(9);
        }

        else if ($sirala == 'white-red')
        {
            $urunler = $kategori->urunler()
                ->distinct()
                ->where('renk','whitered')
                ->paginate(9);
        }

        else if ($sirala == 'clear')
        {
            $urunler = $kategori->urunler()->paginate(9);
        }

        else
        {
            $urunler = $kategori->urunler()->paginate(9);
        }





        return view('frontend.category.kategori',compact('kategori','alt_kategori','urunler','temaayar','kategoriler'));
    }




}
