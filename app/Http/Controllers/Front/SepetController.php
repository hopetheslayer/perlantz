<?php

namespace App\Http\Controllers\Front;

use App\Models\Sepet\Sepet;
use App\Models\Sepet\SepetUrun;
use App\Models\KategoriUrun\Urun;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SepetController extends Controller
{
    public function sepet()
    {
        return view('frontend.sepet.sepet');
    }

    public function ekle()
    {
        $urun = Urun::find(request('id'));
        //sepet ekleme
        //slugun yanında renk boyut gibi eklenebilinir.
        $cartItem =  Cart::add($urun->id, $urun->urun_adi ,1, $urun->fiyat, ['slug' =>$urun->slug]);

        if(auth()->check()){
            $aktif_sepet_id = session('aktif_sepet_id');
            if(!isset($aktif_sepet_id))
            {
                $aktif_sepet = Sepet::create([
                    'kullanici_id' => auth()->id()
                ]);
                $aktif_sepet_id = $aktif_sepet->id;
                session()->put('aktif_sepet_id',$aktif_sepet_id);
            }
            SepetUrun::updateOrCreate(
                ['sepet_id'=> $aktif_sepet_id, 'urun_id'=>$urun->id],
                ['adet'=>$cartItem->qty,'durum'=>'Beklemede','tutar'=>$urun->fiyat]
            );
        }




        return redirect()->route('sepet')
            ->with('mesaj_tur','success')
            ->with('mesaj','Ürün Sepete Eklendi');
    }

    public function kaldir($rowid)
    {
        if(auth()->check())
        {
            $aktif_sepet_id = session('aktif_sepet_id');
            $cartItem = Cart::get($rowid);
            \App\Models\SepetUrun::where('sepet_id', $aktif_sepet_id)->where('urun_id',$cartItem->id)->delete();
            Cart::remove($rowid);
            return redirect()->route('sepet')
                ->with('mesaj_tur','success')
                ->with('mesaj','Ürün Sepetten Kaldırıldı');
        }

    }
    public function bosalt()
    {
        if(auth()->check())
        {
            $aktif_sepet_id = session('aktif_sepet_id');
            SepetUrun::where('sepet_id', $aktif_sepet_id)->delete();
        }
        Cart::destroy();

        return redirect()->route('sepet')
            ->with('mesaj_tur','success')
            ->with('mesaj','Sepet Boşaltılmıştır.');
    }
    public function guncelle($rowid)
    {
        $validator = Validator::make(request()->all(),
            [
                'adet' => 'required|numeric|between:0,5'
            ]);

        if($validator->fails())
        {
            session()->flash('mesaj_tur','warning');
            session()->flash('mesaj','Adet değeri 1 ile 5 arasında olmalıdır.');
            return response()->json(['alert'=>false]);
        }

        if(auth()->check())
        {
            $aktif_sepet_id = session('aktif_sepet_id');
            $cartItem = Cart::get($rowid);
            if(request('adet')==0)
            {
                SepetUrun::where('sepet_id', $aktif_sepet_id)->where('urun_id', $cartItem->id)->delete();
            }
            else
            {
                SepetUrun::where('sepet_id', $aktif_sepet_id)->where('urun_id', $cartItem->id)
                    ->update(['adet'=>request('adet')]);
            }

        }

        Cart::update($rowid,request('adet'));

        session()->flash('mesaj_tur','success');
        session()->flash('mesaj','Kayıt Güncellenmiştir.');

        return response()->json(['success'=>true]);
    }
}
