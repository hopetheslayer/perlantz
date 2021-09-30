<?php

namespace App\Http\Controllers\Admin\Treatment;

use App\Models\Faq\TKategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;

class AdminKategoriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $kats = TKategori::all();

        return view('backend.faqkat.kategori-index',compact('kats'));
    }

    public function form()
    {

        return view('backend.faqkat.kategori-form');
    }

    public function kaydet(Request $request)
    {
        request()->validate([
            'slug' =>'required',
            'kategori_adi' =>'required',
        ]);

        TKategori::create($request->all());

        toastr()->success('Veri Başarıyla Eklendi :)');

        return redirect()->route('admin.treatmentkategori.index');
    }

    public function edit($id)
    {
        $kategori  = TKategori::find($id);

        return view('backend.faqkat.kategori-edit',compact('kategori'));

    }

    public function guncelle($id)
    {
        request()->validate([
            'slug' =>'required',
            'kategori_adi' =>'required',
            'image' =>'required'
        ]);

        $kategori = TKategori::find($id);

        $kategori->slug = request('slug');
        $kategori->kategori_adi = request('kategori_adi');

        if(Input::hasFile('image'))
        {
            $file = Input::file('image');
            $file->move('frontend/uploads/treatment/treatment-kat/',$file->getClientOriginalName());
            $kategori->image = $file->getClientOriginalName();
        }

        $kategori->save();

        toastr()->success('Veri Başarıyla Güncellendi :)');

        return redirect()->route('admin.treatmentkategori.index');
    }

    public function sil($id)
    {
        TKategori::destroy($id);
        toastr()->success('Veri Başarıyla Silindi :)');
        return redirect()->back();
    }

}
