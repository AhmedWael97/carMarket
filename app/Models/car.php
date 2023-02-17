<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class car extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [

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
        'thumbnail',
    ];

    public function imgs() {
        return $this->hasMany('\App\Models\carImgs','car_id','id');
    }

    // public function make() {
    //     return $this->hasOne('\App\Models\make','id','make_id');
    // }

    public function model_type() {
        return $this->hasOne('\App\Models\models','id','model_id');
    }

    public function properties() {
        return $this->hasMany('\App\Models\CarProperty','car_id','id');
    }
}
