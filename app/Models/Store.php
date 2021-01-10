<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table    =   'stores';

    protected $fillable = [
        'user_id', 'category_id', 'exp', 'tagline', 'description'
    ];

    public function storeSubCategory(){
    	return $this->hasMany('App\Models\StoreSubCategory', 'store_id', 'id');
    }

    public function storePortfolio(){
    	return $this->hasMany('App\Models\StorePortfolio', 'store_id', 'id');
    }


    public function user(){
        return $this->hasMany('App\Models\User', 'id', 'user_id');
    }
}