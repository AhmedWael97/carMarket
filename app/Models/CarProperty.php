<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class CarProperty extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['car_id','property_id', 'value'];


    public function property () {
        return $this->hasOne('\App\Models\Property','id','property_id');
    }
}
