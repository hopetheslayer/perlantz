<?php

namespace App\Models\KategoriUrun;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    use SoftDeletes;

    protected $table = "urunkategori";
    protected $fillable = ['slug','kategori_adi','seo_title','seo_description','seo_keywords'];
    protected $guarded = [''];



    //hem urunkategori hemde urunleri cekicez

    public function urunler()
    {
        return $this->belongsToMany('App\Models\KategoriUrun\Urun','kategori_urun');
    }

    public function uruns()
    {
        return $this->belongsTo(Urun::class, 'urun_id');
    }






}
