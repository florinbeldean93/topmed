<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    

    protected $fillable = [
        'name', 'email', 'phone', 'CNP', 'birthday', 'date', 'speciality_id', 'doctor_id', 'location_id', 'message',
    ];
	public function location(){
		return $this->belongsTo('App\Location');
	}
	public function doctor(){
		return $this->belongsTo('App\Doctor');
	}
	public function speciality(){
		return $this->belongsTo('App\Speciality');
	}
}
