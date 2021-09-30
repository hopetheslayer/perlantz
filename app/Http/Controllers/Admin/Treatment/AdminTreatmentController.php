<?php

namespace App\Http\Controllers\Admin\Treatment;


use App\Models\Faq\TKategori;
use App\Models\Faq\Treatment;
use App\Models\Faq\Treatmentdosya;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;


class AdminTreatmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {

        $treatments = Treatment::all();



        return view('backend.faq.news-index',compact('treatments'));
    }
    public function form()
    {
        $treatmentkategori = TKategori::all();

        return view('backend.faq.news-creator',compact('treatmentkategori'));
    }

    public function kaydet(Request $request)
    {
        $this->validate(request(),[
            'post_baslik' => 'required',
            'onyazi' => 'required',
            'yazi' => 'required',
            'kimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'blogkategori' => 'required',
            'blog_aciklama' => 'required',
            'blog_keyword' => 'required',
            'created_at'  => 'required',
            'updated_at'  => 'required'
        ]);

        $treatment = new Treatment();
        $treatment->post_baslik = request('post_baslik');
        $treatment->onyazi = request('onyazi');
        $treatment->yazi = request('yazi');
        $treatment->blog_aciklama = request('blog_aciklama');
        $treatment->blog_keyword = request('blog_keyword');
        $treatment->created_at = request('created_at');
        $treatment->updated_at = request('updated_at');


        if($request->file('kimage'))
        {
            $file = $request->file('kimage');
            $file->move('frontend/uploads/faq/kapak',$file->getClientOriginalName());
            $treatment->kimage = $file->getClientOriginalName();
        }

        if($request->file('gimage'))
        {
            $file = $request->file('gimage');
            $file->move('frontend/uploads/faq/ongorsel',$file->getClientOriginalName());
            $treatment->gimage = $file->getClientOriginalName();
        }

        $treatment['yayın'] = request()->has('yayın') ? 1: 0;

        $treatment->treatmentkategori_id = request('treatmentkategori');



        $treatment->save();

        toastr()->success('Veri Başarıyla Güncellendi :)');



        return redirect()
            ->route('admin.faq.index');
    }

    public function edit($id)
    {
        $treatment = Treatment::find($id);
        $treatment_kategoriler = $treatment->treatmentkategori()->pluck('id')->all();
        $treatkategori = TKategori::all();

        return view('backend.faq.news-guncelle',compact('treatment','treatkategori','treatment_kategoriler'));
    }

    public function guncelle(Request $request,$id)
    {


        request()->validate([
            'post_baslik' =>'required',
            'yazi' =>'required',
            'onyazi'=>'required'
        ]);

        $treatment = Treatment::find($id);

        $treatment->post_baslik = request('post_baslik');
        $treatment->yazi = request('yazi');
        $treatment->onyazi = request('onyazi');
        $treatment->blog_aciklama = request('blog_aciklama');
        $treatment->blog_keyword = request('blog_keyword');
        $treatment->created_at = request('created_at');
        $treatment->updated_at = request('updated_at');


        if($request->file('kimage'))
        {
            $file = $request->file('kimage');
            $file->move('frontend/uploads/faq/kapak',$file->getClientOriginalName());
            $treatment->urun_resmi = $file->getClientOriginalName();
        }

        if($request->file('gimage'))
        {
            $file = $request->file('gimage');
            $file->move('frontend/uploads/faq/ongorsel',$file->getClientOriginalName());
            $treatment->gimage = $file->getClientOriginalName();
        }


        $treatment['yayın'] = request()->has('yayın') ? 1: 0;


        $treatment->treatmentkategori_id = request('treatmentkategori');

        $treatment->update();


        toastr()->success('Veri Başarıyla Güncellendi :)');

        return redirect()->route('admin.faq.index');

    }

    public function dropzone($id)
    {
        $treatment = Treatment::findOrFail($id);

        $photos = Treatmentdosya::where('blog_id',$id)->get();

        return view('backend.faq.news-dropzone',compact('treatment','photos'));
    }

    public function dfilestore(Request $request,$id)
    {
        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('frontend/uploads/treatment/ekfoto'),$imageName);

        $imageupload = new Treatmentdosya();
        $imageupload->blog_id = request('inputx');
        $imageupload->imagex = $imageName;
        $imageupload->save();

    }

    public function destroy($id)
    {

        Treatmentdosya::destroy($id);

        toastr()->success('Veri Başarıyla Silindi :)');

        return redirect()->back();


    }

    public function sil($id)
    {
        Treatment::destroy($id);
        toastr()->success('Veri Başarıyla Güncellendi :)');
        return redirect()->route('admin.faq.index');
    }

}

