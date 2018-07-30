<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecialityCategory extends Model
{

    protected $fillable = [
        'name',  
    ];
	public function speciality(){
		return $this->hasMany('App\Speciality');
	}
}
