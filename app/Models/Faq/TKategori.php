<?php

namespace App\Models\Faq;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TKategori extends Model
{
    use SoftDeletes;

    protected $table = "faqkategori";
    protected $fillable = ['kategori_adi','slug','image'];
    protected $guarded = [''];



}
