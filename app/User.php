<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $guard = 'user';



    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    protected $fillable = ['name','surname','email','password'];

    public function verifyUser()
    {
        return $this->hasOne('App\VerifyUser');
    }

    public function countries()
    {
        return $this->hasOne(Country::class, 'countries_id');
    }

    public function userdetay()
    {
        return $this->belongsTo('App\Userdetay','id');
    }

    public function userShipping()
    {
        return $this->belongsTo('App\Usershipping','id');
    }

    public function detay()
    {
        return $this->hasOne('App\Userdetay');
    }

    public function ship()
    {
        return $this->hasOne('App\Usershipping');
    }

}
