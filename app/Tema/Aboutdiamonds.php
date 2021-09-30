<?php

namespace App\Tema;

use Illuminate\Database\Eloquent\Model;

class Aboutdiamonds extends Model
{
    protected $table ='aboutdiamonds';
    protected $fillable = [
    'aciklama'
    ];
    protected $guarded=[];
}
