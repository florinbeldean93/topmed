<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{

    protected $fillable = [
        'name', 'short_description', 'image', 'description', 'location_id', 'speciality_category_id',  
    ];
	public function location(){
		return $this->belongsTo('App\Location');
	}
	public function specialitycategory(){
		return $this->belongsTo('App\SpecialityCategory');
	}
	public function appointment(){
		return $this->hasMany('App\Appointment');
	}

}
