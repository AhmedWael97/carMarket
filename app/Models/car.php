<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class car extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'make_id',
        'model_id',
        'name',
        'price',
        'used',
        'qty',
        'discount_price',
        'start_date',
        'end_date',
        'short_desc',
        'desc',
        'warranty',
        'engine_capacity',
        'horse_power',
        'maxmum_speed',
        'transmittion',
        'year',
        'fuel',
        'fuel_usage',
        'country',
        'length',
        'width',
        'ground_clearance',
        'wheel_base',
        'trunk_size',
        'seats',
        'traction_type',
        'clynder',
        'fuel_tank_capacity',
        'comfort',
        'windows',
        'sound_system',
        'safety',
        'other',
        'qty',
        'thumbnail',
    ];

    public function imgs() {
        return $this->hasMany('\App\Models\carImgs','car_id','id');
    }

    public function make() {
        return $this->hasOne('\App\Models\make','id','make_id');
    }

    public function model_type() {
        return $this->hasOne('\App\Models\models','id','model_id');
    }
}
