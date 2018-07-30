<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorLocation extends Model
{

    protected $fillable = [
        'doctor_id', 'location_id',  
    ];

	public function location(){
		return $this->belongsTo('App\Location');
	}
	public function doctor(){
		return $this->belongsTo('App\Doctor');
	}
}
