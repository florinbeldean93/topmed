<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'category_id', 'main_image', 'description', 'user_id', 
    ];
    public function category(){
		return $this->belongsTo('App\Category');
	}
}
