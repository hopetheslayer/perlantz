<?php

namespace App\Http\Controllers\Admin\Siparis;

use App\Http\Controllers\Controller;
use App\Models\KategoriUrun\Urundosya;
use App\Models\Siparis\Siparis;
use Illuminate\Http\Request;

class SiparisController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function  index()
    {

        $siparis =  Siparis::all();

        return view('backend.siparis.index',compact('siparis'));
    }

    public function yeni()
    {

    }

    public function look($id)
    {
        $siparis = Siparis::with('sepet.sepet_urunler.urun')->find($id);

        return view('backend.siparis.look',compact('siparis'));
    }

    public function edit($id)
    {
        $siparis = Siparis::with('sepet.sepet_urunler.urun')->find($id);

        return view('backend.siparis.edit',compact('siparis'));
    }

    public function guncelle(Request $request,$id)
    {
        request()->validate([
            'billing_name' =>'required',
            'billing_lastname' =>'required',
            'billing_company' =>'required',
            'billing_address' =>'required',
            'billing_address2' =>'required',
            'billing_phone' =>'required',
            'billing_email' =>'required',
            'billing_country' =>'required',
            'billing_state' =>'required',
            'shipping_name' =>'required',
            'shipping_lastname' =>'required',
            'shipping_company' =>'required',
            'shipping_address' =>'required',
            'shipping_address2' =>'required',
            'shipping_country' =>'required',
            'shipping_state' =>'required',
            'shipping_notes' =>'required',
            'centerstone' =>'required',
            'accentstone' =>'required',
            'perlantzlogo' =>'required',
        ]);

        $siparis  = Siparis::find($id);

        $siparis->billing_name = request('billing_name');
        $siparis->billing_lastname = request('billing_lastname');
        $siparis->billing_company = request('billing_company');
        $siparis->billing_address = request('billing_address');
        $siparis->billing_address2 = request('billing_address2');
        $siparis->billing_phone = request('billing_phone');
        $siparis->billing_email = request('billing_email');
        $siparis->billing_country = request('billing_country');
        $siparis->billing_state = request('billing_state');
        $siparis->shipping_name = request('shipping_name');
        $siparis->shipping_lastname = request('shipping_lastname');
        $siparis->shipping_company = request('shipping_company');
        $siparis->shipping_address = request('shipping_address');
        $siparis->shipping_address2 = request('shipping_address2');
        $siparis->shipping_state = request('shipping_state');
        $siparis->centerstone = request('centerstone');
        $siparis->accentstone = request('accentstone');
        $siparis->perlantzlogo = request('perlantzlogo');



        $siparis->update();

        toastr()->success('Veri Başarıyla Güncellendi :)');

        return redirect()->route('admin.siparis.index');

    }

    public function sil($id)
    {
        Siparis::destroy($id);

        toastr()->success('Veri Başarıyla Silindi :)');

        return redirect()->back();
    }
}
