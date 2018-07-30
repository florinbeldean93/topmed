<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScreeningLocation extends Model
{
    protected $fillable = [
        'category', 'doctor', 'address',
    ];

}