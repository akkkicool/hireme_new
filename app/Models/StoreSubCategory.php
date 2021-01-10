<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class StoreSubCategory extends Model
{
    protected $table    =   'store_sub_categories';

    protected $fillable = [
        'user_id', 'store_id', 'sub_cat_id', 'sub_cat_price', 'sub_cat_time'
    ];

}