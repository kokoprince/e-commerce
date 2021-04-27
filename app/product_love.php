<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_love extends Model
{
    protected $table = 'product_love';
    protected $fillable = ['id','id_user','id_cars','id_books','id_clothes','id_computers'];
    protected $hidden = [];
    public $timestamps=false;
}
