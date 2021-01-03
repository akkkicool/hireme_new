<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class MobileVerified extends Model
{
    protected $table    =   'mobile_numbers';

    protected $fillable = [
        'user_id', 'mobile_number', 'verification_code', 'status', 'created_at', 'updated_at'
    ];

}

