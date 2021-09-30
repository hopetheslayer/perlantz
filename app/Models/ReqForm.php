<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReqForm extends Model
{
    use SoftDeletes;

    protected $table = "formreq";

    protected $fillable=[''];
}
