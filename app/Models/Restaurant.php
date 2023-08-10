<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    function dish(){
        return $this->hasMany('App\Models\Dish');
    }
    function order(){
        return $this->hasMany('App\Models\Order');
    }
    protected $fillable=['name', 'location','times', 'image'];
}
