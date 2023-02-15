<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class models extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name'];

    // public function make() {
    //     return $this->hasOne('\App\Models\make','id','make_id');
    // }
}
