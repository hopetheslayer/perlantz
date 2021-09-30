<?php

namespace App\Models\Siparis;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Siparis extends Model
{
    Use SoftDeletes;

    protected $table ="siparis";

    protected $fillable = ['payer_id','payment_id','amount','currency','payment_status','siparis_tutari','durum','adsoyad','adres','telefon','ceptelefonu',
        'payment_provider','created_at','updated_at','deleted_at','billing_name','billing_lastname','billing_company','billing_address','billing_address2','billing_phone',
        'billing_email','billing_country','billing_state','shipping_name','shipping_lastname','shipping_company','shipping_address','shipping_address2','shipping_country',
        'shipping_state','shipping_notes'];


    public function sepet()
    {
        return $this->belongsTo('App\Models\Sepet\Sepet');
    }
    public function wishlist()
    {
        return $this->belongsTo('App\Models\Wish\Wishlist');
    }
}
