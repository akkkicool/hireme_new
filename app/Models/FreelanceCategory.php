<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class FreelanceCategory extends Model
{
    protected $table    =   'freelance_categories';

    protected $fillable = [
        'user_id', 'category_id'
    ];

}