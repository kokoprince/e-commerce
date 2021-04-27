<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $table='cars_shopping';
    protected $fillable=['id','user_id','pro_car_id','pro_clothe_id','pro_book_id','pro_computer_id','the_price','number_pro','total_price','date'];
    protected $hidden=[];
    public $timestamps=false;
}
