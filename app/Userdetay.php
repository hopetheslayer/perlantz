<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Userdetay extends Model
{
    use SoftDeletes;

    protected $table = "user_detay";



    protected $fillable = [
        'urun_resmi','website','phone','adress_baslik','adress','adress2','country','state','zipcode','firm_name','tax_no'
    ];

    public function users()
    {
        return $this->hasOne('App\User');
    }
}
