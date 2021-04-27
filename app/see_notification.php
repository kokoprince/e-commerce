<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\notification;

class see_notification extends Model
{
    protected $table='see_notification';
    protected $fillable=['id_notification','id_user'];
    protected $hidden=[];
    public $timestamps=false;
    public function relation_notifi(){
      //  return $this->belongsToMany('App\notification','notification','id_notification','id_user','id','id');
        return $this->belongsToMany('App\notification','see_notification','id_notification','id_user','id','id');
    }
}
