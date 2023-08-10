<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    function restaurant(){
        return $this->belongsTo('App\Models\Restaurant');
    }
    function order(){
        return $this->belongsTo('App\Models\Order');
    }
    protected $fillable=['name','price','promotion','description', 'image','restaurant_id', 'tags']; 
}
