<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{


    protected $fillable = [
        'name', 'address', 'timetable', 'Email', 'phone', 
    ];

	public function doctorlocation(){
		return $this->hasMany('App\DoctorLocation');
	}
	public function appointment(){
		return $this->hasMany('App\Appointment');
	}
	public function speciality(){
		return $this->hasMany('App\Speciality');
	}
	public function medicaltest(){
		return $this->hasMany('App\MedicalTest');
	}
}
