<?php

namespace App\Models\Wish;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class WishUrun extends Model
{
    use SoftDeletes;

    protected $table="wish_uruns";

    protected $guarded =[];

    public function siparis()
    {
        return $this->hasOne('App\Models\Siparis\Siparis');
    }

    public function urun()
    {
        return $this->belongsTo('App\Models\KategoriUrun\Urun');
    }

    public function wish_urun_adet()
    {
        return DB::table('wish_uruns')->where('wish_id',$this->id)->where('deleted_at','=',null)->sum('adet');
    }

    public function wish_urunler()
    {
        return $this->hasMany('App\Models\Wish\WishUrun');
    }
}
