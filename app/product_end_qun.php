<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_end_qun extends Model
{
    protected $table='product_end';
    protected $fillable=['id','id_users','id_cars','id_books','id_clothes','id_computers','required_quantity','date'];
    protected $hidden=[];
    public $timestamps=false;
}
