<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = ['user_id','name','phonenumber','email','address','country','state','zip','cardtype','nameoncard','creditcardnum','expiration','cvv'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function products(){
        return $this->belongsToMany('App\Product')->withPivot('quantity');
    }
}
