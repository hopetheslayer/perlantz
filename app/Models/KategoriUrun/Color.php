<?php

namespace App\Models\KategoriUrun;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = "color";
    protected $fillable = ['kategori_ad','color','resim','created_at','updated_at'];
    protected $guarded = [''];
}
