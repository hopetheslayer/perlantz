<?php

namespace App\Models\Wish;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Wishlist extends Model
{
    Use SoftDeletes;

    protected $table ="wishlist";

    protected $guarded =[];


    public static function  aktif_wish_id()
    {
        $aktif_wish = DB::table('wishlist as s')
            ->leftJoin('siparis as si','si.sepet_id', '=','s.id')
            ->where('s.user_id',auth()->id())
            ->whereRaw('si.id is null')
            ->orderByDesc('s.created_at')
            ->select('s.id')
            ->first();


        if(!is_null($aktif_wish)) return $aktif_wish->id;
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
