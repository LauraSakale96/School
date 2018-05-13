<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Profile extends Model
{
    
    protected $fillable = [
        'id',
        'avatar',
        'subject',
        'education',
        'description',
        'age',
        'school',
    ];

  
}