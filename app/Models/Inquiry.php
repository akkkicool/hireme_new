<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $table    =   'inquiries';

    protected $fillable = [
        'name', 'email', 'subject', 'message', 'created_at', 'updated_at'
    ];

}
