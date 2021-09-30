<?php

namespace App\Models\KategoriUrun;

use App\Models\KategoriUrun\Comment;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Urun extends Model
{
    use SoftDeletes;



    protected $table = "urun";

    protected $guarded=[];

    public function kategoriler()
    {
        return $this->belongsToMany('App\Models\KategoriUrun\Kategori','kategori_urun');
    }

    public function urdosya()
    {
        return $this->hasMany(Urundosya::class,'urun_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }

    public function ratings()
    {
        return $this->hasMany(Urun::class);
    }

}
