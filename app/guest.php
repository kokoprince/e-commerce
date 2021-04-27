<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Fortify\TwoFactorAuthenticatable;
class guest extends Authenticatable
{
    //use TwoFactorAuthenticatable;
    protected $table = 'the_guest';
    protected $fillable = ['id','images', 'name','email', 'phone','type','date','password','cases'];
    protected $hidden = [];
    public $timestamps=false;
    public function relation_notifi(){
        return $this->belongsToMany('App\notification','see_notification','id_notification','id_user','id','id');
    }

}
