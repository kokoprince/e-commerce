<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class show_sections extends Model
{
    //use HasFactory;
    protected $table='show_sections';
    protected $fillable=['id','sections'];
    protected $hidden=[];
    public $timestamps=false;
    public function data_show()
    {
        return $this->hasMany('App\detels_sections', 'sections_id', 'id');
    }
}
