<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detels_sections extends Model
{
    //use HasFactory;
    protected $table='detels_sections';
    protected $fillable=['id','sections_id','name','image_sections'];
    protected $hidden=[];
    public $timestamps=false;
    public function data_sho()
    {
        return $this->belongsTo('App\show_sections','sections_id','id');

    }
}
