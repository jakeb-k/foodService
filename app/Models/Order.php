<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    function restaurant(){
        return $this->belongsTo('App\Models\Restaurant');
    }
}
