<?php

namespace App\Models\KategoriUrun;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Urundosya extends Model
{
  use SoftDeletes;

    protected $table = "urun_dosya";

    protected $guarded = [''];

    protected $fillable = [''];

    public function urun()
    {
        return $this->belongsTo(Urun::class,'urun_id');
    }

}
