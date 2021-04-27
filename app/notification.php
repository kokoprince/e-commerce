<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\see_notification;
class notification extends Model
{
    protected $table='notification';
    protected $fillable=['id','content','read','date'];
    protected $hidden=[];
    public $timestamps=false;
    public function relation_see_notifi(){
        return $this->hasMany('App\see_notification','id','id');
        //return $this->belongsToMany('App\see_notification','see_notification','id_notification','id_user','id','id');
    }
}
