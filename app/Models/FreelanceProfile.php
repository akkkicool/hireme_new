<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class FreelanceProfile extends Model
{
    protected $table    =   'freelance_profiles';

    protected $fillable = [
        'user_id', 'location_preference', 'range_in_km', 'location', 'phone', 'email','category', 'exp', 'rate','sub_category', 'tagline', 'description', 'lat', 'lng', 'fb_acc', 'twitter_acc', 'insta_acc'
    ];

}

