<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ProductCategory extends Model
{
    use Notifiable;
    //
    protected $table='product_categories';

    protected $fillable = [
         'product_id', 'category_id',
    ];

    protected $hidden=[
        'created_at','updated_at',
    ];

}
