<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class EmailTemplate extends Model
{
    protected $table    =   'email_templates';

    protected $fillable = [
        'slug', 'title', 'subject', 'content', 'status', 'is_deleted', 'created_at', 'updated_at'
    ];

}


