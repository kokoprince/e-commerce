<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class top_admin extends Model
{
    //use HasFactory;
    protected $table = 'top_admin';
    protected $fillable = ['name', 'email','phone', 'password','male_female','cases','	date'];
    protected $hidden = [];
    public $timestamps=false;
    public function getMaleFemaleAttribute($key)
    {
        switch ($key){
            case 1:
                return 'male';
                break;
            case 0:
                return 'female';
                break;
            default:
                return 'none';
                break;
        }
    }
}
