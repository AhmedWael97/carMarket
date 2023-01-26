<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_name',
        'site_logo',
        'site_fav_icon',
        'section_one_img',
        'section_subscribe_img',
        'section_subscribe_title',
        'section_subscribe_desc',
        'phone',
        'mobile',
        'location',
        'description',
        'facebook_url',
        'twitter_url',
        'instagram_url',
        'snap_chat',
        'footer_text',
    ];
}
