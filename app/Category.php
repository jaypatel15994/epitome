<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products(){
        return $this->belongsToMany('App\Product', 'product_categories', 'category_id', 'product_id');
    }
}
