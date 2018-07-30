<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $fillable = [
        'title', 'subtitle', 'link', 'link_name', 'image',  
    ];

}
