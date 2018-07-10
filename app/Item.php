<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
     protected $fillable = ['img', 'user_id'];
   
    public function carts()
    {
        return $this->hasMany(Image::class);
    }
}
