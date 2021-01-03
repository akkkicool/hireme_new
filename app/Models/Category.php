<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table    =   'categories';

    protected $fillable = [
        'name', 'parent_id', 'status', 'is_deleted', 'created_at', 'updated_at'
    ];

}

