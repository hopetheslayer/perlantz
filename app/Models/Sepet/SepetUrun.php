<?php

namespace App\Models\Sepet;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class SepetUrun extends Model
{
    use SoftDeletes;

    protected $table="sepet_uruns";

    protected $guarded =[];



    public function siparis()
    {
        return $this->hasOne('App\Models\Siparis\Siparis');
    }

    public function urun()
    {
        return $this->belongsTo('App\Models\KategoriUrun\Urun');
    }

    public function sepet_urun_adet()
    {
        return DB::table('sepet_uruns')->where('sepet_id',$this->id)->sum('adet');
    }

    public function sepet_urunler()
    {
        return $this->hasMany('App\Models\SepetUrun');
    }
}
