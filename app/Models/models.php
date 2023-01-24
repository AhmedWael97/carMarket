<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class models extends Model
{
    protected $fillable = ['name', 'make_id'];
    use HasFactory, SoftDeletes;
}
