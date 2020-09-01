<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    protected $fillable = [
        'user_id', 'is_primary','line1','line2','city','state','country','postalcode','contact_number','address_type',
   ];

   protected $hidden=[
       'created_at','updated_at',
   ];

    public function user()
    {
        return $this->belongsTo('App\User'); 
    }
}
