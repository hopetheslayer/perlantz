<?php

namespace App\Http\Controllers\Eticaret;

use App\Http\Controllers\Controller;
use App\Mail\NewWishlistmailRequest;
use App\Models\KategoriUrun\Kategori;
use App\Models\KategoriUrun\Urun;
use App\Models\Wish\WishUrun;
use App\Tema\TemaAyarları;
use App\Models\Wish\Wishlist;

use Illuminate\Http\Request;
use Cart;

use Validator;

class WishlistController extends Controller
{

    public function index()
    {
        $temaayar = TemaAyarları::where('id',1)->get();
        $kategoriler = Kategori::whereRaw('üst_id is null')->get();

        return view('frontend.wishlist.wishlist',compact('temaayar','kategoriler'));

    }


    public function ekle()
    {
       $urun = Urun::find(request('id'));

       $cartItem = Cart::instance('wishlist')->add($urun->id,$urun->urun_adi,1,$urun->fiyat_eur,['slug'=>$urun->slug,'urun_resmi'=>$urun->urun_resmi]);


        if(auth()->check()){

            $aktif_wish_id = session('aktif_wish_id');

            if(!isset($aktif_wish_id))
            {
                $aktif_wish = Wishlist::create([
                    'user_id' => auth()->id()
                ]);
                $aktif_wish_id = $aktif_wish->id;
                session()->put('aktif_wish_id',$aktif_wish_id);
            }

            WishUrun::updateOrCreate(
                ['wish_id'=> $aktif_wish_id, 'urun_id'=>$urun->id],
                ['adet'=>$cartItem->qty,'durum'=>'Pending','tutar'=>$urun->fiyat_eur,'urun_resmi'=>$urun->urun_resmi]
            );

        }

        toastr()->success('Product added your cart');

        return  redirect()->back();
    }

    public function kaldir($rowid)
    {
        if(auth()->check())

        {
            $aktif_wish_id = session('aktif_wish_id');

            $cartItem = Cart::instance('wishlist')::get($rowid);

            WishUrun::where('wish_id', $aktif_wish_id)->where('urun_id',$cartItem->id)->delete();

            Cart::instance('wishlist')::remove($rowid);

            toastr()->success('Product Deleted.');

            return redirect()->route('wishlist');

        }

        toastr()->success('Product Deleted.');

        Cart::instance('wishlist')::remove($rowid);

        return redirect()->route('cart');


    }

    public function anasayfakaldir($rowid)
    {
        if(auth()->check())
        {

            $aktif_wish_id = session('aktif_wish_id');

            $cartItem = Cart::instance('wishlist')->get($rowid);

            WishUrun::where('wish_id', $aktif_wish_id)->where('urun_id',$cartItem->id)->delete();

            Cart::instance('wishlist')->remove($rowid);

            return redirect()->route('wishlist');

        }
        Cart::instance('wishlist')->remove($rowid);
        toastr()->success('Product Deleted.');
        return redirect()->back();
    }


    public function mail(Request $request)
    {
        request()->validate([

            'name',

            'email',

            'subject',

            'message'

        ]);


        Mail::to('sales@invamedoem.com')->send(new NewWishlistmailRequest($request));

        toastr()->success('Your message has been successfully sent');

        return redirect()->route('wishlist');
    }

    public function deneme()
    {
        $deneme = Cart::instance('wishlist')->content();


        return view('denemex',compact('deneme'));
    }



    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
