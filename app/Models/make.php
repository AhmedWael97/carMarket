<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class make extends Model
{
    protected $fillable = ['name', 'logo'];
    use HasFactory, SoftDeletes;
}
