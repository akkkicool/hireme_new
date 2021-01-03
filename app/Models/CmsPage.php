<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class CmsPage extends Model
{
    protected $table    =   'cms_pages';

    protected $fillable = [
        'title', 'slug', 'content', 'status', 'is_deleted', 'created_at', 'updated_at'
    ];

}



