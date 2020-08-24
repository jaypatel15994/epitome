<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    //



   

    public function product(){
        return $this->hasOne('App\Product',"id","product_id");
    }

    public function users(){
        return $this->belongsTo('App\User');
    }
}
