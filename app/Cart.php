<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
     public function users()
    {
        
         return $this->belongsToMany(User::class, 'carts', 'user_id', 'item_id')->withTimestamps();
    }
        
     public function addcart($item_id)
    {
     //既にカートに入っているかの確認
     $exist = $this->is_carting($image_id);

    if ($exist) {
        // 既にカートに入っていれば何もしない
        return false;
    } else {
        // カートに入っていればればカートに追加する
        $this->addcart()->attach($image_id);
        return true;
    }
}

    public function discardcart($image_id)
    {
    //既にカートに入っているかの確認
     $exist = $this->is_carting($image_id);

    if ($exist) {
        // 既にカートに入っていればカートから外す
        $this->addcart()->detach($imageid);
        return true;
    } else {
        // カートに入っていなければ何もしない
        return false;
    }
    }
    
    public function is_carting($image_id) {
    return $this->is_carting()->where('user_id', $image_id)->exists();

    }
}
