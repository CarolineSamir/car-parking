<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    public function car(){
        return $this->$this->hasOne(Car::class, 'id', 'car_id');
    }
}
