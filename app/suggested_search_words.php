<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suggested_search_words extends Model
{
   // use HasFactory;
    protected $table='suggested_search_words';
    protected $fillable=['id','words','table_name'];
    protected $hidden=[];
    public $timestamps=false;
}
