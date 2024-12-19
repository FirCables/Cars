<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class owner extends Model
{
    public $timestamps = false;
    public function cars() 
    {
        return $this->hasMany(Car::class);
    }
}
