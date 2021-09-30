<?php

namespace App\Http\Controllers\Front;

use App\Models\Blog\BKategori;
use App\Models\Blog\Blog;

use App\Models\Blog\Blogkategori;
use App\Models\KategoriUrun\Kategori;
use App\Tema\TemaAyarları;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class BlogsayfaController extends Controller
{
    public function blog()
    {


        $blog = Blog::where('yayın',1)->orderByRaw('created_at DESC')->paginate(4);

        $temaayar = TemaAyarları::all();

        $kategori = Blogkategori::all();

        $popular = DB::table('blog')
            ->orderByRaw('created_at DESC')
            ->take(5)
            ->get();

        $kategoriler = Kategori::whereRaw('üst_id is null')->get();

        return view('frontend.blog.front-blog-page',compact('blog','kategori','temaayar','kategoriler','popular'));

    }

    public function blogkat($id)
    {

        $kategori = Blogkategori::where('slug',$id)->firstOrFail();
        $temaayar = TemaAyarları::all();

        $kategoris = Blogkategori::all();

        $blog = Blog::where('blogkategori_id',$kategori->id)->paginate(10);


        $deneme = $kategori->blog;


        $kategoriler = Kategori::whereRaw('üst_id is null')->get();


        return view('frontend.blog.bkategori',compact('kategori','temaayar','kategoris','blog','deneme','kategoriler'));

    }

    public function post($id)
    {

        $blog = Blog::whereSlug($id)->firstOrFail();

        $temaayar = TemaAyarları::all();
        $kategoris = Blogkategori::all();
        $kategoriler = Kategori::whereRaw('üst_id is null')->get();

        $popular = DB::table('blog')
            ->orderByRaw('created_at DESC')
            ->take(5)
            ->get();




        return view('frontend.blog.bpost',compact('temaayar','kategoris','blog','popular','kategoriler'));
    }
}
