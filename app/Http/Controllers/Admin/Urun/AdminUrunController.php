<?php

namespace App\Http\Controllers\Admin\Urun;

use App\Models\KategoriUrun\Color;
use App\Models\KategoriUrun\Kategori;
use App\Models\KategoriUrun\KategoriUrun;
use App\Models\KategoriUrun\Urun;
use App\Models\KategoriUrun\UrunDetay;
use App\Models\KategoriUrun\Urundosya;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class AdminUrunController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $list = Urun::orderby('id')->paginate(30);

        return view('backend.urun.index',compact('list'));
    }

    public function form()
    {
        $kategoriler = Kategori::all();

         return view('backend.urun.creater',compact('kategoriler'));
    }

    public function kaydet(Request $request)
    {
        request()->validate([
            'urun_adi' =>'required',
            'slug' => 'nullable',
            'fiyat_eur_indirim' => 'nullable',
            'fiyat_eur' => 'nullable',
            'qty' => 'numeric|min:0|max:1',
            'main_metal_k' => 'nullable',
            'metal_color' => 'nullable',
            'chain' => 'nullable',
            'width_thickness'=> 'nullable',
            'sizelen'=> 'nullable',
            'eightk_weight'=> 'nullable',
            'ninek_weight'=> 'nullable',
            'forteenk_weight'=> 'nullable',
            'eighteenk_weight'=> 'nullable',
            'ninefiveplt_weight'=> 'nullable',
            'twentyfivek_weight'=> 'nullable',
            'stone'=> 'nullable',
            'certificate'=> 'nullable',
            'color'=> 'nullable',
            'clarity'=> 'nullable',
            'shape'=> 'nullable',
            'mm'=> 'nullable',
            'total_crt'=> 'nullable',
            'stone_dia1'=> 'nullable',
            'cert_dia1'=> 'nullable',
            'color_dia1'=> 'nullable',
            'clarity_dia1'=> 'nullable',
            'shape_dia1'=> 'nullable',
            'qty_dia1'=> 'nullable',
            'mm_dia1'=> 'nullable',
            'total_crt_dia1'=> 'nullable',
            'stone_dia2'=> 'nullable',
            'cert_dia2'=> 'nullable',
            'color_dia2'=> 'nullable',
            'clarity_dia2'=> 'nullable',
            'shape_dia2'=> 'nullable',
            'qty_dia2'=> 'nullable',
            'mm_dia2'=> 'nullable',
            'total_crt_dia2'=> 'nullable',
        ]);

        $urun = New Urun();
        $urun->urun_adi = request('urun_adi');
        $urun->fiyat_eur = request('fiyat_eur');
        $urun->fiyat_eur_indirim = request('fiyat_eur_indirim');
        $urun->goster_gunun_firsati = request('goster_gunun_firsati');
        $urun->goster_one_cikan = request('goster_one_cikan');
        $urun->goster_cok_satan = request('goster_cok_satan');
        $urun->goster_indirimli = request('goster_indirimli');
        $urun->qty = request('qty');
        $urun->main_metal_k = request('main_metal_k');
        $urun->main_metal_k_data = Str::lower(request('main_metal_k_data'));
        $urun->metal_color = request('metal_color');
        $urun->metal_color_data = Str::lower(request('metal_color_data'));
        $urun->width_thickness = request('width_thickness');
        $urun->chain = request('chain');
        $urun->sizelen = request('sizelen');
        $urun->eightk_weight = request('eightk_weight');
        $urun->ninek_weight = request('ninek_weight');
        $urun->forteenk_weight = request('forteenk_weight');
        $urun->eighteenk_weight = request('eighteenk_weight');
        $urun->ninefiveplt_weight = request('ninefiveplt_weight');
        $urun->twentyfivek_weight = request('twentyfivek_weight');
        $urun->stone = request('stone');
        $urun->color = request('color');
        $urun->renk = request('renk');
        $urun->total_crt = request('totalcarat');
        $urun->clarity = request('clarity');
        $urun->certificate = request('certificate');
        $urun->color = request('color');
        $urun->clarity = request('clarity');
        $urun->shape = request('shape');
        $urun->mm = request('mm');
        $urun->total_crt = request('total_crt');
        $urun->stone_dia1 = request('stone_dia1');
        $urun->cert_dia1 = request('cert_dia1');
        $urun->color_dia1 = request('color_dia1');
        $urun->clarity_dia1 = request('clarity_dia1');
        $urun->shape_dia1 = request('shape_dia1');
        $urun->qty_dia1 = request('qty_dia1');
        $urun->mm_dia1 = request('mm_dia1');
        $urun->total_crt_dia1 = request('total_crt_dia1');
        $urun->stone_dia2 = request('stone_dia2');
        $urun->cert_dia2 = request('cert_dia2');
        $urun->color_dia2 = request('color_dia2');
        $urun->clarity_dia2 = request('clarity_dia2');
        $urun->shape_dia2 = request('shape_dia2');
        $urun->qty_dia2 = request('qty_dia2');
        $urun->mm_dia2 = request('mm_dia2');
        $urun->total_crt_dia2 = request('total_crt_dia2');
        $urun->seo_title = request('seo_title');
        $urun->seo_description = request('seo_description');
        $urun->seo_keywords = request('seo_keywords');

        $kategoriler = request('kategoriler');

        $urun->kategoriler()->attach($kategoriler);

        if($request->file('urun_resmi'))
        {
            $file = $request->file('urun_resmi');
            $file->move('frontend/uploads/urun',$file->getClientOriginalName());
            $urun->urun_resmi = $file->getClientOriginalName();
        }







        toastr()->success('Veri Başarıyla Eklendi :)');

        return redirect()
            ->route('admin.urun');
    }

    public function edit($id)
    {
        $list = Urun::find($id);
        $urun_kategoriler = [];
        $urun_kategoriler = $list->kategoriler()->pluck('kategori_id')->all();
        $kategoriler = Kategori::all();
        $uruncolor = Color::all();

        return view('backend.urun.edit',compact('list','kategoriler','urun_kategoriler','uruncolor'));
    }

    public function guncelle(Request $request,$id)
    {
        request()->validate([
            'urun_adi' =>'required',
            'fiyat_eur_indirim' => 'nullable',
            'fiyat_eur' => 'nullable',
            'goster_gunun_firsati' => 'numeric|min:0|max:1',
            'goster_one_cikan' => 'numeric|min:0|max:1',
            'goster_cok_satan' => 'numeric|min:0|max:1',
            'goster_indirimli' => 'numeric|min:0|max:1',
            'qty'=> 'nullable',
            'main_metal_k' => 'nullable',
            'metal_color' => 'nullable',
            'chain'=> 'nullable',
            'sizelen'=> 'nullable',
            'width_thickness'=> 'nullable',
            'eightk_weight'=> 'nullable',
            'ninek_weight'=> 'nullable',
            'forteenk_weight'=> 'nullable',
            'eighteenk_weight'=> 'nullable',
            'ninefiveplt_weight'=> 'nullable',
            'twentyfivek_weight'=> 'nullable',
            'stone'=> 'nullable',
            'certificate'=> 'nullable',
            'color'=> 'nullable',
            'clarity'=> 'nullable',
            'shape'=> 'nullable',
            'mm'=> 'nullable',
            'total_crt'=> 'nullable',
            'stone_dia1'=> 'nullable',
            'cert_dia1'=> 'nullable',
            'color_dia1'=> 'nullable',
            'clarity_dia1'=> 'nullable',
            'shape_dia1'=> 'nullable',
            'qty_dia1'=> 'nullable',
            'mm_dia1'=> 'nullable',
            'total_crt_dia1'=> 'nullable',
            'stone_dia2'=> 'nullable',
            'cert_dia2'=> 'nullable',
            'color_dia2'=> 'nullable',
            'clarity_dia2'=> 'nullable',
            'shape_dia2'=> 'nullable',
            'qty_dia2'=> 'nullable',
            'mm_dia2'=> 'nullable',
            'total_crt_dia2'=> 'nullable',
            'seo_keywords'=> 'nullable',
            'seo_title'=> 'nullable',
            'seo_description'=> 'nullable',
        ]);



        $urun  = Urun::find($id);

        $urun->urun_adi = request('urun_adi');
        $urun->fiyat_eur = request('fiyat_eur');
        $urun->fiyat_eur_indirim = request('fiyat_eur_indirim');
        $urun->goster_gunun_firsati = request('goster_gunun_firsati');
        $urun->goster_one_cikan = request('goster_one_cikan');
        $urun->goster_cok_satan = request('goster_cok_satan');
        $urun->goster_indirimli = request('goster_indirimli');
        $urun->qty = request('qty');
        $urun->main_metal_k = request('main_metal_k');
        $urun->main_metal_k_data = Str::lower(request('main_metal_k_data'));
        $urun->metal_color = request('metal_color');
        $urun->metal_color_data = Str::lower(request('metal_color_data'));
        $urun->width_thickness = request('width_thickness');
        $urun->chain = request('chain');
        $urun->sizelen = request('sizelen');
        $urun->eightk_weight = request('eightk_weight');
        $urun->ninek_weight = request('ninek_weight');
        $urun->forteenk_weight = request('forteenk_weight');
        $urun->eighteenk_weight = request('eighteenk_weight');
        $urun->ninefiveplt_weight = request('ninefiveplt_weight');
        $urun->twentyfivek_weight = request('twentyfivek_weight');
        $urun->stone = request('stone');
        $urun->color = request('color');
        $urun->renk = request('renk');
        $urun->total_crt = request('totalcarat');
        $urun->clarity = request('clarity');
        $urun->certificate = request('certificate');
        $urun->color = request('color');
        $urun->clarity = request('clarity');
        $urun->shape = request('shape');
        $urun->mm = request('mm');
        $urun->total_crt = request('total_crt');
        $urun->stone_dia1 = request('stone_dia1');
        $urun->cert_dia1 = request('cert_dia1');
        $urun->color_dia1 = request('color_dia1');
        $urun->clarity_dia1 = request('clarity_dia1');
        $urun->shape_dia1 = request('shape_dia1');
        $urun->qty_dia1 = request('qty_dia1');
        $urun->mm_dia1 = request('mm_dia1');
        $urun->total_crt_dia1 = request('total_crt_dia1');
        $urun->stone_dia2 = request('stone_dia2');
        $urun->cert_dia2 = request('cert_dia2');
        $urun->color_dia2 = request('color_dia2');
        $urun->clarity_dia2 = request('clarity_dia2');
        $urun->shape_dia2 = request('shape_dia2');
        $urun->qty_dia2 = request('qty_dia2');
        $urun->mm_dia2 = request('mm_dia2');
        $urun->total_crt_dia2 = request('total_crt_dia2');
        $urun->seo_title = request('seo_title');
        $urun->seo_description = request('seo_description');
        $urun->seo_keywords = request('seo_keywords');
        $kategoriler = request('kategoriler');



        if($request->file('urun_resmi'))
        {
            $file = $request->file('urun_resmi');
            $file->move('frontend/uploads/urun',$file->getClientOriginalName());
            $urun->urun_resmi = $file->getClientOriginalName();
        }

        $urun->kategoriler()->sync($kategoriler);


        $urun->update();

        toastr()->success('Veri Başarıyla Güncellendi :)');

        return redirect()->route('admin.urun');
    }

    public function dropzone($id)
    {
        $urun = Urun::findOrFail($id);

        $photos = Urundosya::where('urun_id',$id)->get();

        return view('backend.urun.urun-dropzone',compact('urun','photos'));
    }

    public function dfilestore(Request $request,$id)
    {
        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('frontend/uploads/urun/ekfoto'),$imageName);

        $imageupload = new Urundosya();
        $imageupload->urun_id = request('inputx');
        $imageupload->imagex = $imageName;
        $imageupload->save();

    }

    public function destroy($id)
    {

        Urundosya::destroy($id);

        toastr()->success('Veri Başarıyla Silindi :)');

        return redirect()->back();


    }

    public function sil($id)
    {
        Urun::destroy($id);
        toastr()->success('Veri Başarıyla Silindi :)');
        return redirect()->back();

    }

    public function ara()
    {
        $aranan = request()->input('aranan');

        $urunler = Urun::where('perlantz_sku','like',"%$aranan%")->get();

        request()->flash();

        return view('backend.urun.ara',compact('urunler'));


    }
}
