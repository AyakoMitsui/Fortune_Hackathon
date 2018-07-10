<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
   //カートリスト
    public function carting()
    {
    return $this->belongsToMany(Item::class, 'carts', 'user_id', 'item_id');
    }
    
    //カートに追加
    public function addcart($id)
    {
     $exist = $this->is_carting($id);
     if ($exist) {
        return false;
    } else {
        $this->carting()->attach($id);
        return true;
    }
    }
    
    //お気にに入りしているかどうか
    public function is_carting($id)
    {
    return $this->carting()->where('item_id', $id)->exists(); //existsはwhereで値を探しだすことに成功すればtrueを返す
    }
    
    
    
    public function discart($id){
    $this->carting()->detach($id);
    } 
    
    
    
  
   
}
