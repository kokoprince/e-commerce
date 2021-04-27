<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class between_user_and_order extends Model
{
    protected $table='between_user_and_order';
    protected $fillable=['id','id_user','quantity','link_tabel'];
    protected $hidden=[];
    public $timestamps=false;
}
