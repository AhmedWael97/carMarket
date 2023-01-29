<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class orderDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['order_id' , 'car_id' , 'price', 'qty' ,'discount' , 'discount_precent', 'total_line'];

    public function car() {
        $this->hasOne('\App\Models\car','id','car_id');
    }
}
