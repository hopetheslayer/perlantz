<?php

namespace App\Models\KategoriUrun;

use Illuminate\Database\Eloquent\Model;

class KategoriUrun extends Model
{
    protected $table ="urunkategori";

    protected $fillable = ['kategori_id','urun_id'];

    public function urun()
    {
        return $this->belongsTo(Urun::class, 'urun_id');
    }
}
