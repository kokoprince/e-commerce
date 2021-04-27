<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    protected $table = 'comments';
    protected $fillable = ['id','id_user','id_cars','id_books','id_clothes','id_computer','text_comment','date'];
    protected $hidden = [];
    public $timestamps=false;
}
