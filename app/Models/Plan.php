<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table    =   'plans';

    protected $fillable = [
        'title','slug', 'price', 'status', 'billing_type', 'is_deleted', 'created_at', 'updated_at'
    ];

}
