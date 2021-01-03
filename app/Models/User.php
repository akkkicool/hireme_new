<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Rating;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'role_id','email_verified_at', 'status', 'is_deleted', 'mobile_number', 'country_code', 'dob', 'gender', 'image', 'address', 'is_approved', 'timezone', 'lat', 'lng'    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    // Accessors for returning Full Name
    public function getFullNameAttribute()
    {
        return ucwords("{$this->first_name} {$this->last_name}");
    }



    public function ratings()
    {
        return $this->hasMany('App\Models\Rating', 'doctor_id', 'id');
    }


    public function profile()
    {
        return $this->hasOne('App\Models\FreelanceProfile', 'user_id', 'id');
    }


    public function portfolio(){
        return $this->hasMany('App\Models\Portfolio', 'user_id', 'id');
    }

}