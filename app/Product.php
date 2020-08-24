<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use Notifiable;
    //
    protected $table='products';

    protected $fillable = [
         'name', 'image','seller_id','price','description',
    ];

    protected $hidden=[
        'created_at','updated_at',
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function cartItems()
    {
        return $this->belongsToMany('App\CartItem');
    }

   
}
