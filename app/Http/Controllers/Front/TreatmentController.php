<?php

namespace App\Http\Controllers\Front;

use App\Admin;
use App\Models\Blog\Blog;
use App\Models\Faq\TKategori;
use App\Models\Faq\Treatment;
use App\Models\Faq\Treatmentdosya;
use App\Tema\TemaAyarları;
use App\Tema\TemaSettings;
use App\trx;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TreatmentController extends Controller
{
    public function index()
    {
        $blog = Treatment::where('yayın',1)->orderByRaw('created_at DESC')->paginate(4);

        $temaayar = TemaAyarları::all();



        $kat = DB::table('faqkategori')->where('id', '1')->get();

        $kat1 = DB::table('faqkategori')->where('id', '2')->get();

        $kat2 = DB::table('faqkategori')->where('id', '3')->get();

        $kat3 = DB::table('faqkategori')->where('id', '4')->get();

        $kat4 = DB::table('faqkategori')->where('id', '5')->get();

        $kat5 = DB::table('faqkategori')->where('id', '6')->get();

        $kat6 = DB::table('faqkategori')->where('id', '7')->get();

        $treatment = Treatment::all();

        return view('frontend.faq.front-blog-page',compact('blog','kat','kat1','kat2','kat3','kat4','kat5','kat6','temaayar','treatment'));
    }

    public function search(Request $request){

        if($request->ajax()) {

            $data = Treatment::where('treat_ara', 'LIKE', '%'.$request->country.'%')
                ->take(3)->get();

            $output = '';

            if (count($data)>0) {

                $output = '<ul class="list-group text-center" style="display: block; position: relative; z-index: 1; margin-top: 5px; list-style: none;">';

                foreach ($data as $row){

                    $output .= '<li  class="rd-header spanz  product-header-alt p-4 text-uppercase mb-3  text-color-light gidole-yazi  "><div style="margin-top: -13px;"><a class="treatment-m-yazi" href="/faq/'.$row->slug.'">'.$row->post_baslik.'</a></div></li>';
                }

                $output .= '</ul>';
            }
            else {

                $output .= '     <div style="height: 75px;"  class="rd-header text-center mb-3"><div   class=" spanz  p-4 text-uppercase mb-3  text-color-light gidole-yazi  ">No results</div></div>';
            }

            return $output;
        }
    }

    public function treatkat($id)
    {

        $kategori = TKategori::where('slug',$id)->firstOrFail();
        $temaayar = TemaAyarları::all();

        $kategoris = TKategori::all();

        $blog = Treatment::where('treatmentkategori_id',$kategori->id)->paginate(10);


        $deneme = $kategori->blog;



        return view('frontend.faq.bkategori',compact('kategori','temaayar','kategoris','blog','deneme'));

    }


    public function post($id)
    {
        $blog = Treatment::whereSlug($id)->firstOrFail();

        $temaayar = TemaAyarları::all();
        $kategoris = TKategori::all();




        $popular = DB::table('faq')
            ->orderByRaw('created_at DESC')
            ->take(5)
            ->get();


        return view('frontend.faq.bpost',compact('temaayar','kategoris','blog','popular'));
    }

}
