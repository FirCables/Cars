<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function owner() 
    {
        return $this->belongsTo(Owner::class);
    }
}
