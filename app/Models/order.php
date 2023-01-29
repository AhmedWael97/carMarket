<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['client_name', 'client_mobile', 'client_phone', 'client_email','total','tax','discount','discount_precent'];

    public function details() {
        return $this->hasMany('\App\Models\orderDetail','order_id','id');
    }
}
