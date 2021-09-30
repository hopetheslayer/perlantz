<?php

namespace App\Http\Controllers\Admin\Urun;

use App\Models\Blog\Blogkategori;
use App\Models\KategoriUrun\Kategori;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class AdminUrunKategoriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $kats = Kategori::all();

        return view('backend.urunkategori.kategori-index',compact('kats'));
    }

    public function form()
    {

        return view('backend.urunkategori.kategori-form');
    }

    public function kaydet(Request $request)
    {
        request()->validate([
            'slug' =>'required',
            'kategori_adi' =>'required',
            'kategori_resmi' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $kategori = new Kategori();

        $kategori->slug = request('slug');
        $kategori->kategori_adi = request('kategori_adi');
        $kategori->aciklama = request('aciklama');
        $kategori->seo_title = request('seo_title');
        $kategori->seo_description = request('seo_description');
        $kategori->seo_keywords = request('seo_keywords');

        if(Input::hasFile('kategori_resmi'))
        {
            $file = Input::file('kategori_resmi');
            $file->move('frontend/uploads/category',$file->getClientOriginalName());
            $kategori->kategori_resmi = $file->getClientOriginalName();
        }


        $kategori->save();

        toastr()->success('Veri Başarıyla Eklendi :)');


        return redirect()->route('admin.urunkategori.index');
    }
    public function edit($id)
    {
        $kategori  = Kategori::find($id);

        return view('backend.urunkategori.kategori-edit',compact('kategori'));

    }

    public function guncelle($id)
    {

        request()->validate([
            'slug' =>'required',
            'kategori_adi' =>'required',

        ]);

        $kategori = Kategori::find($id);

        $kategori->slug = request('slug');
        $kategori->kategori_adi = request('kategori_adi');
        $kategori->seo_description = request('seo_description');
        $kategori->seo_title = request('seo_title');
        $kategori->seo_keywords = request('seo_keywords');
        $kategori->aciklama = request('aciklama');


        if(Input::hasFile('kategori_resmi'))
        {
            $file = Input::file('kategori_resmi');
            $file->move('frontend/uploads/category',$file->getClientOriginalName());
            $kategori->kategori_resmi = $file->getClientOriginalName();
        }

        $kategori->update();


        toastr()->success('Veri Başarıyla Güncellendi :)');

        return redirect()->route('admin.urunkategori.index');
    }

    public function sil($id)
    {
        Kategori::destroy($id);
        toastr()->success('Veri Başarıyla Silindi :)');
        return redirect()->route('admin.urunkategori.index');
    }
}
