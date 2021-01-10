<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class StorePortfolio extends Model
{
    protected $table    =   'store_portfolios';

    protected $fillable = [
        'user_id', 'store_id', 'type', 'file_name'
    ];

}