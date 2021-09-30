<?php



namespace App\Http\Controllers\Eticaret;



use App\Models\KategoriUrun\Kategori;

use App\Models\Sepet\Sepet;

use App\Models\Sepet\SepetUrun;

use App\Models\KategoriUrun\Urun;

use App\Tema\TemaAyarları;

use Brian2694\Toastr\Facades\Toastr;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Cart;

use Validator;



class SepetController extends Controller

{





    public function sepet()

    {
        $kategoriler = Kategori::whereRaw('üst_id is null')->get();

        $temaayar = TemaAyarları::where('id',1)->get();

        return view('frontend.sepet.sepet',compact('kategoriler','temaayar'));

    }



    public function ekle(Request $request)
    {


        $centerstone = request()->input('centerstone');
        $accentstone = request()->input('accentstone');
        $perlantzlogo = request()->input('perlog');

        $urun = Urun::find(request('id'));
        //sepet ekleme
        //slugun yanında renk boyut gibi eklenebilinir.
       $cartItem =  Cart::add($urun->id, $urun->urun_adi ,1, $urun->fiyat_eur, ['slug' => $urun->slug, 'urun_resmi' => $urun->urun_resmi,
            'accentstone'=> $accentstone,'centerstone'=>$centerstone,'perlantzlogo'=>$perlantzlogo]);


        if(auth()->check()){

            $aktif_sepet_id = session('aktif_sepet_id');

            if(!isset($aktif_sepet_id))

            {

                $aktif_sepet = Sepet::create([

                    'user_id' => auth()->id()

                ]);

                $aktif_sepet_id = $aktif_sepet->id;

                session()->put('aktif_sepet_id',$aktif_sepet_id);

            }

            SepetUrun::updateOrCreate(

                ['sepet_id'=> $aktif_sepet_id, 'urun_id'=>$urun->id],

                ['adet'=>$cartItem->qty,'durum'=>'Pending','tutar'=>$urun->fiyat_eur,'urun_resmi'=>$urun->urun_resmi]

            );

        }



        toastr()->success('Product added your cart');

        return redirect()->route('cart');




    }



    public function kaldir($rowid)

    {

        if(auth()->check())

        {

            $aktif_sepet_id = session('aktif_sepet_id');

            $cartItem = Cart::get($rowid);

            SepetUrun::where('sepet_id', $aktif_sepet_id)->where('urun_id',$cartItem->id)->delete();

            Cart::remove($rowid);

            toastr()->success('Product Deleted.');

            return redirect()->route('cart');

        }

        toastr()->success('Product Deleted.');

        Cart::remove($rowid);

       return redirect()->route('cart');


    }



    public function anasayfakaldir($rowid)
    {
        if(auth()->check())
        {

            $aktif_sepet_id = session('aktif_sepet_id');

            $cartItem = Cart::get($rowid);

            SepetUrun::where('sepet_id', $aktif_sepet_id)->where('urun_id',$cartItem->id)->delete();

            Cart::remove($rowid);

            return redirect()->route('cart');

        }
        Cart::remove($rowid);
        toastr()->success('Product Deleted.');
        return redirect()->back();
    }



    public function bosalt()

    {

        if(auth()->check())

        {

            $aktif_sepet_id = session('aktif_sepet_id');

            SepetUrun::where('sepet_id', $aktif_sepet_id)->delete();

        }



        Cart::destroy();


        toastr()->success('Cart Deleted');


        return redirect()->route('cart');

    }

    public function guncelle($rowid)

    {

        $validator = Validator::make(request()->all(),

            [

                'adet' => 'required|numeric|between:0,30'

            ]);



        if($validator->fails())

        {





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



        toastr()->success('Product Update.');







        return response()->json(['success'=>true]);

    }

}

