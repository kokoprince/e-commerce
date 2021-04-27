<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    protected $table='images';
    protected $fillable=['id','id_cars','id_clothes','id_computers','id_books','images'];
    protected $hidden=[];
    public $timestamps=false;
}
