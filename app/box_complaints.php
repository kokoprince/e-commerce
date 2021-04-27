<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class box_complaints extends Model
{
    protected $table='box_complaints';
    protected $fillable=['id','id_user','id_admin','text_message','reply_message','date','reply_date'];
    protected $hidden=[];
    public $timestamps=false;
}
